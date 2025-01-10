<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  /*
    $ch=curl_init();
    $url='Https://ipapi.co/json';
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $resp=curl_exec($ch);
    if($e=curl_error($ch)){
       echo $e;
    }else{
       $decoded=json_decode($resp,true);
        print_r($decoded);
       
    }
    curl_close($ch);
    */  
    return view('index');
})->name('index');

Route::get('/quiz', function () {
    return view('pages.quiz');
})->name('quiz');



Route::get('application/{course_id}', [StudentController::class, 'getApplicationForm'] )->name('application.form');
Route::post('application/form', [StudentController::class, 'store'])->name('application.submit');

//Payment
Route::get('payment/{id}', [PaymentController::class, 'index'])->name('payment');
Route::get('payment/upload/{id}', [PaymentController::class, 'showPaymentUpload'])->name('payment.show');
Route::post('payment/store/', [PaymentController::class, 'store'])->name('payment.store');

//Courses Route
Route::get('business-analysis-course', [CourseController::class, 'getBusinessAnalysisCourse'])->name('businessAnalysis.show');
Route::get('scrum-master',[CourseController::class, 'getScrumCourse'])->name('scrum.show');
Route::get('product-management',[CourseController::class, 'getProductManagementCourse'])->name('product-management.show');


Route::get('/details', function() {
    return view('pages.application.details-form');
})->name('page.details');

Route::post('/details-form', [StudentController::class, 'showDetails'])->name('details.post');
Route::get('/outstanding-fees', [StudentController::class, 'outstanding' ])->name('outstanding.payment');




Route::middleware(['auth', 'verified'])->prefix('admin')->group(function() {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/students', [StudentController::class, 'index'])->name('students.view');
    Route::post('/students/{id}',[StudentController::class, 'update'])->name('student.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

    Route::get('/pending/payments', [PaymentController::class, 'getPendingPayments'])->name('payments.pending');
    Route::post('/approve/payment/{id}', [PaymentController::class, 'approve'])->name('payment.approve');
    Route::post('/decline/payment', [PaymentController::class, 'decline'])->name('payment.decline');

    Route::get('active/payments', [PaymentController::class, 'getActivePayments'])->name('payments.active');
    Route::get('declined/payments', [PaymentController::class, 'getDeclinedPayments'])->name('declined.payments');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
