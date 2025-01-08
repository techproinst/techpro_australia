<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Services\ApplicationService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stevebauman\Location\Facades\Location;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ApplicationService $applicationService, $id)
    {       
        try {

            $student = $applicationService->getStudent($id);
            
            $paymentSchedule = $applicationService->getPaymentSchedule($student->course_id);

            list($amountDue, $continent) = $this->getScheduleAmount($paymentSchedule->amount);

            return view('pages.payment',compact('student', 'amountDue', 'continent'));

        } catch(Exception $err) {

            Log::error($err->getMessage());

            return redirect()->back()->with([
                'flash_message' => $err->getMessage(),
                'flash_type' => 'danger'

            ]);

        }
          
          
    }

    public function getScheduleAmount($amount) 
    {
        $position = Location::get(request()->ip());

        $continent = $position->continent ?? 'other';

        $scheduleAmount = json_decode($amount, true);

        $amountDue = $scheduleAmount[$continent];

        return [$amountDue, $continent];

    }


    public function showPaymentUpload(ApplicationService $applicationService, $id)
    {
        try {
            

            $student = $applicationService->getStudent($id);
                                                            
            return view('pages.upload',compact('student'));

            
        } catch(Exception $err) {

            Log::error($err->getMessage());

            return redirect()->back()->with([
                'flash_message' => $err->getMessage(),
                'flash_type' => 'danger'

            ]);

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ApplicationService  $applicationService)
    {
        $validated = $request->validate([
            'id' => ['required','exists:students,id'],
            'payment_receipt' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:1024',

        ]);


            
        try { 


            $student = $applicationService->getStudent($request->id);

            $paymentSchedule = $applicationService->getPaymentSchedule($student->course_id);

            list($amountDue) = $this->getScheduleAmount($paymentSchedule->amount);
             
            $validated['student_id'] = $student->id; 
            $validated['amount_due'] = $amountDue;
            $validated['transaction_reference'] = Payment::trxRef();
            $validated['invoice'] = Payment::inv();
            $validated['purpose'] = $paymentSchedule->purpose;
            $validated['description'] = $paymentSchedule->description;
            $validated['schedule_id'] = $paymentSchedule->id;

        

                if($request->hasFile('payment_receipt')) {

                    $receipt = $request->File('payment_receipt');
                    $rad =  mt_rand(1000, 9999);
            
                    $receiptName =  md5($receipt->getClientOriginalName()) . $rad . '.' . $receipt->getClientOriginalExtension();
            
            
                    $receipt->move(public_path('upload/'), $receiptName);
                    $upload =  $receiptName;
            
                    if ($upload) {
    
                        $validated['payment_receipt'] = $upload;
                    
                    }
                }



            Payment::create($validated);

            return view('pages.success');


        } catch(Exception $err) {

            Log::error("Error processing payment for student ID {$request->id}: " . $err->getMessage());
            
            return redirect()->back()->with([

                'flash_message' => 'Critical error occured while processing payment upload, kindly try again later or contact our support team',
                'flash_type' => 'danger'

            ]);


        }


       
      


    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment )
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
