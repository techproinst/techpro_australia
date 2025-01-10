<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class CourseController extends Controller
{
    public function getBusinessAnalysisCourse() 
    {
         $businessAnalysisCourses = Course::with('paymentSchedule')->where('course_type', 0)->get();

         list($coursePrices, $continent)  = $this->getPrice($businessAnalysisCourses);

         return view('pages.business-analysis-course', compact('businessAnalysisCourses', 'coursePrices', 'continent'));


    }

   
    public function getScrumCourse()
    {
        $scrumCourses = Course::with('paymentSchedule')->where('course_type', 1)->get();

        list($coursePrices, $continent) = $this->getPrice($scrumCourses);

        return view ('pages.scrum-master', compact('scrumCourses', 'coursePrices', 'continent'));
    }


    public function getProductManagementCourse() 
    {
        $productManagementCourses = Course::with('paymentSchedule')->where('course_type', 2)->get();

        list($coursePrices, $continent) = $this->getPrice($productManagementCourses);

        return view('pages.product-management', compact('productManagementCourses', 'coursePrices', 'continent'));
    }

    
    public function getPrice($Course_schedule)
    {
        $position = Location::get(request()->ip());

         $continent = $position->continent ?? 'other';

         $coursePrices = [];

         foreach($Course_schedule as $course) {

            $paymentSchedule = $course->paymentSchedule;

            if($paymentSchedule) {

                $prices = json_decode($paymentSchedule->amount, true);

                $coursePrices[$course->id] = $prices[$continent] ?? $prices['other'] ?? null;

            }else {

                $coursePrices[$course->id] = null;
            }

         }


         return  [$coursePrices, $continent];
    }


    


    /**
     * Display a listing of the resource.   
     */
    public function index()
    {
        $courses = Course::all();

        return view('admin.courses.view', compact('courses'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
