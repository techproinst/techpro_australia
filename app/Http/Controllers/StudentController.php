<?php

namespace App\Http\Controllers;

use App\Mail\AdminReviewMail;
use App\Mail\ApplicationNotification;
use App\Mail\ApplicationNumberNotification;
use App\Models\Course;
use App\Models\Payment;
use App\Models\PaymentSchedule;
use App\Models\Student;
use App\Models\StudentReview;
use App\Models\User;
use App\Services\ApplicationService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;

class StudentController extends Controller
{   

  


    public function getApplicationForm($course_id, ApplicationService $applicationService)
    { 
        
        try {

        $course =  $applicationService->getCourse($course_id);

        return view('pages.application.form', compact('course'));

        } catch(Exception $err) {

            Log::error($err->getMessage());

            return redirect()->back()->with([
                'flash_message' => 'No course found',
                'flash_type' => 'danger'

            ]);

        }
       
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('course')->get();

        return view('admin.students.view',compact('students'));

    
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
    public function store(Request $request, ApplicationService $applicationService)
    {
        $validated = $request->validate([
            'course_id' => ['required', 'exists:courses,id'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:students'],
            'password' => ['required', 'string', 'min:8','confirmed'],
            'password_confirmation' => ['required',],
        ]);

        
        $validated['password'] = Hash::make($request->input('password'));
        unset($validated['password_confirmation']);

        try {

            DB::beginTransaction();

             $std = Student::create($validated);

             $student = $applicationService->getStudent($std->id);

            try {

               Mail::to($student->email)->send(new ApplicationNotification($student->firstname, $student->lastname, $student->email, $student->course->name,  $student->id, $student->course->id)); 


            } catch(Exception $err) {
                DB::rollBack();
                $emailException = $err->getMessage();

                Log::error($emailException);

                return redirect()->back()->with([
                    'flash_message' => 'critical error occurred  while processing email notification, try again later! or contact  support team',
                    'flash_type' => 'danger'
    
                ]);
            }

            DB::commit();

            return view('pages.application.message', compact('student'));


        } catch(Exception $err) {

            DB::rollBack();
            
            Log::error($err->getMessage());

            return redirect()->back()->with([

                'flash_message' => 'Something went wrong while proccessing your registration. Please try again later  or contact support team',
                'flash_type' => 'danger'

            ]);

        }





    }


    public function showDetails(Request $request) 
    {
          $student = Student::with('course')->where('app_no', $request->app_no)->first();

          if(!$student) {

            return redirect()->back()->with([
                'flash_message' => 'Invalid application number',
                'flash_type' => 'danger'

            ]);

          }

          $payments = Payment::with('paymentSchedule')
                              ->where('student_id', $student->id)
                              ->where('status', 'success')
                              ->get();

         if($payments->isEmpty()) {

            return view('pages.application.details', compact('student'));
         }

        $scheduleId = $student->course_id;

        $schedule = PaymentSchedule::where('course_id', $scheduleId)->first();

        $amountDue = json_decode($schedule->amount);

        $currency = $payments->first()->currency;

        $amountScheduled =  $currency === 'usd' ? $amountDue->other : $amountDue->africa;

        $paid = $payments->sum('amount');

        $balance = $amountScheduled - $paid;

    

            /*
                    $currency = [];

                    $amountDue = json_decode($schedule->amount);

                    $paid = 0;

                    foreach ($payments as $index => $payment) {

                        $currency[] = $payment->currency;  
                        $paid += $payment->amount;

                    }

                    $amountScheduled = $currency[0] === 'usd' ? $amountDue->other : $amountDue->africa;

                    $balance = $amountScheduled - $paid;


                    return $balance;
            */
         return view('pages.application.details', compact(
            'student',
            'payments',
            'amountDue',
            'balance',
            'currency',
        ));











    }

    public function outstanding(Student $student)
    { 

        $position = Location::get(request()->ip());

        $continent = $position->continent ?? 'other';
        
      return view('pages.upload', compact('student','continent'));

    }

    public function submitFeedbackForm(Request $request)
    {

       $student = Student::where('app_no', $request->app_no)->first();

       if(!$student) {

            return redirect()->back()->with([
                'flash_message' => 'Invalid application number',
                'flash_type' => 'danger'

            ]);

       }

        $validated = $request->validate([
            'country' => ['required', 'string'],
            'ratings' => ['required', 'integer', 'min:1', 'max:5'],
            'comments' => ['required', 'string', 'max:255'],
            'image' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:1024',
         ]);

         
         if($request->hasFile('image')) {

            $image = $request->File('image');
            $rad =  mt_rand(1000, 9999);
    
            $imageName =  md5($image->getClientOriginalName()) . $rad . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload/'), $imageName);

            $upload =  $imageName;
    
            if ($upload) {

                $validated['image'] = $upload;
            
            }
        }

        try {

            DB::beginTransaction();

            $studentReview = StudentReview::updateOrCreate(
                [   'student_id' => $student->id],

                [   'country' => $request->country,
                    'ratings' => $request->ratings,
                    'status' => StudentReview::STATUS_PENDING,
                    'comments' => $request->comments,
                    'image' => $validated['image'],


                ]);


                        try {

                            $admin = User::first();

                            Mail::to($admin->email)->send(new AdminReviewMail($admin->name));

                        } catch(Exception $emailException) {

                            DB::rollBack();

                            Log::error($emailException->getMessage());

                            return redirect()->back()->with([
                                'flash_message' => 'Critical error occured while trying to send notification, Please try again later or contact our support team',
                                'flash_type' => 'danger',
                    
                            ]);

                        }

            DB::commit();


            return redirect()->back()->with([
                        'flash_message' => 'Your review have submitted succesfully',
                        'flash_type' => 'success',
        
                    ]);


        } catch(Exception $err) {

            Log::error($err->getMessage());

            return redirect()->back()->with([
                'flash_message' => 'Something went wrong while submitting your review, Please try again later',
                'flash_type' => 'danger',
    
            ]);
    

            

        }

         

       




    }

    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $students = Student::with('course')
                             ->whereNull('app_no')
                             ->where('course_id', 4)
                             ->orWhere('course_id', 6)
                             ->get();

        return view('admin.students.free_course', compact('students'));
    }

    public function genAppNo(Student $student)
    {
       if(!$student) {

        return redirect()->back()->with([
            'flash_message' => 'Invalid application number',
            'flash_type' => 'danger'

        ]);

       }


       try {
                    $year = date('Y');
                    $student->app_no = Student::genAppNo($year);

                    $student->save();


               try{

                Mail::to($student->email)->send(new ApplicationNumberNotification(

                 $student->firstname,
                 $student->lastname,
                 $student->email,
                 $student->course->name,
                 $student->app_no,

                 ));


        
              }catch(Exception $emailException) {

                Log::error($emailException->getMessage());

                return redirect()->back()->with([
                    'flash_message' => 'Critical error occured while attempting to send notification, please try again later or contact our support team',
                    'flash_type' => 'danger'
        
                ]);


              }


              return redirect()->back()->with([
                'flash_message' => 'Application number processed successfully',
                'flash_type' => 'success'
    
            ]);


       } catch(Exception $err) {


        Log::error($err->getMessage());

                return redirect()->back()->with([
                    'flash_message' => 'An error occured while trying to process application number, please try again later',
                    'flash_type' => 'danger'
        
                ]);



       }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student, ApplicationService $applicationService)
    {
          $request->validate([
              'id' => ['required', 'exists:students,id'],
              'firstname' => ['required', 'string', 'max:255'],
              'lastname' => ['required', 'string', 'max:255'],

        ]);

        try {

            $student = $applicationService->getStudent($request->id);

            $student->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,

            ]);

            return redirect()->back()->with([
                'flash_message' => 'Student record updated successfully',
                'flash_type' => 'success'


            ]);

        }catch(Exception $err) {

            log::error($err->getMessage());

            return redirect()->back()->with([
                'flash_message' => $err->getMessage(),
                'flash_type' => 'danger'


            ]);

        }



        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
         try{

            $student = Student::find($id);
             $student->delete();

             return redirect()->back()->with([

                'flash_message' => 'Student record deleted successfully',
                'flash_type' => 'success',

             ]);

         } catch(Exception $err) {

            Log::error($err->getMessage());

            return redirect()->back()->with([

                'flash_message' => 'Something went wrong while trying to delete student record',
                'flash_type' => 'danger',

             ]);


         }
    }






}
