<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationNotification;
use App\Models\Student;
use App\Services\ApplicationService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

        
        $year = date('Y');
        $validated['app_no'] = Student::genAppNo($year);
        $validated['password'] = Hash::make($request->input('password'));
        unset($validated['password_confirmation']);

        try {

            DB::beginTransaction();

             $std = Student::create($validated);

             $student = $applicationService->getStudent($std->id);

            try {

                Mail::to($student->email)->send(new ApplicationNotification($student->firstname, $student->lastname, $student->email, $student->course->name, $student->app_no, $student->id));


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

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
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
    public function destroy(Student $student)
    {
        //
    }
}
