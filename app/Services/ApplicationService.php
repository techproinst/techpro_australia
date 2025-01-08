<?php

namespace App\Services;

use App\Models\Course;
use App\Models\PaymentSchedule;
use App\Models\Student;
use Exception;
use Illuminate\Support\Facades\Log;

class ApplicationService 
{
  public function getCourse($course_id) 
  {
        $course = Course::find($course_id);

        if(!$course) {

          throw new Exception("Course with ID = {$course_id} not found");
        }


        return $course;

  }


  public function getStudent($id) 
  {
    
     $student = Student::with('course')->where('id', $id)->first();
      
     if(!$student) {

      throw new Exception("Student with ID {$id} not found");
    }

    return $student;

  }



  public function getPaymentSchedule($course_id) 
  {  
     $schedule = PaymentSchedule::where('course_id', $course_id)->first();

     if(!$schedule) {

      throw new Exception("Payment schedule for course ID {$course_id} not found");

     }


     return $schedule;

  }


















}
