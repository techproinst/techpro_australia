<?php

namespace App\Http\Controllers;

use App\Models\StudentReview;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews =  StudentReview::with('student')->where('status', 1)->get();

        return view('index', compact('reviews'));
    }

    public function getPendingReviews() 
    {
       $reviews = StudentReview::with('student')->where('status', 0)->get(); 

       return view('admin.reviews.pending', compact('reviews'));
    }

    public function getActiveReviews()
    {
        $reviews = StudentReview::with('student')->where('status', 1)->get(); 

         return view('admin.reviews.active', compact('reviews'));
    }


    public function getDeclinedReviews() 
    {
         
        $reviews = StudentReview::with('student')->where('status', -1)->get(); 

        return view('admin.reviews.declined', compact('reviews'));
    }

    public function approveReview(StudentReview $studentReview)
    {    
        if(!$studentReview) {
            
            return redirect()->back()->with([
                'flash_message' => 'Review not found',
                'flash_type' => 'danger',

            ]);

        }

        try {

            $studentReview->status = studentReview::STATUS_APPROVED;
            $studentReview->save();
    
            return redirect()->back()->with([
                'flash_message' => 'Review approved successfully',
                'flash_type' => 'success',
    
            ]);


        } catch(Exception $err) {

            Log::error($err->getMessage());

            return redirect()->back()->with([
                'flash_message' => 'An error occured while approving the review.',
                'flash_type' => 'danger',
    
            ]);



        }


       

    }


    public function declineReview(StudentReview $studentReview)
    {    
        if(!$studentReview) {
            
            return redirect()->back()->with([
                'flash_message' => 'Review not found',
                'flash_type' => 'danger',

            ]);

        }

        try {

            $studentReview->status = studentReview::STATUS_DECLINED;
            $studentReview->save();
    
            return redirect()->back()->with([
                'flash_message' => 'Review Declined successfully',
                'flash_type' => 'success',
    
            ]);


        } catch(Exception $err) {

            Log::error($err->getMessage());

            return redirect()->back()->with([
                'flash_message' => 'An error occured while declining the review.',
                'flash_type' => 'danger',
    
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
