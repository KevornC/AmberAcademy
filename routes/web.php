<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('generalhomepage');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','\App\Http\Controllers\HomeController@index')->name('dashh');
Route::middleware(['auth:sanctum', 'verified'])->get('/profile','\App\Http\Controllers\HomeController@index');

//Media & About us &Policy
Route::GET('media','\App\Http\Controllers\HomeController@media');
Route::GET('aboutus','\App\Http\Controllers\HomeController@aboutus');
Route::GET('contactus','\App\Http\Controllers\HomeController@contactus');
Route::POST('contactus','\App\Http\Controllers\contactmailcontroller@send');

Route::get('apply/{id?}','\App\Http\Controllers\StudentController@apply')->name('dashboard');

//Courses
Route::get('addcourse','\App\Http\Controllers\CourseController@viewadd');
Route::post('addcourse','\App\Http\Controllers\CourseController@add')->middleware('CourseMid');
Route::get('viewcourse','\App\Http\Controllers\CourseController@view');

//guest view
Route::get('courses','\App\Http\Controllers\CourseController@courseguestview');
Route::get('studentcourse','\App\Http\Controllers\CourseController@coursestudentview');
//Route::post('delete','\App\Http\Controllers\CourseController@delete');
Route::get('delete/{id?}','\App\Http\Controllers\CourseController@delete');
Route::get('update/{id?}','\App\Http\Controllers\CourseController@viewupdate');
Route::post('update','\App\Http\Controllers\CourseController@update');

//application
Route::get('applicationstatus','\App\Http\Controllers\applicationstatus@application_status')->name('appstat');
Route::get('upload','\App\Http\Controllers\DocUploadController@uploadFile');
Route::post('upload','\App\Http\Controllers\DocUploadController@uploadFile')->name('upload-file');
Route::GET('view','\App\Http\Controllers\applicationstatus@view_all_applications');
Route::GET('approved','\App\Http\Controllers\applicationstatus@view_approved_applications');
Route::GET('approve/{id?}','\App\Http\Controllers\applicationstatus@approve_application');
Route::GET('denied/','\App\Http\Controllers\applicationstatus@view_denied_applications');
Route::GET('deny/{id?}','\App\Http\Controllers\applicationstatus@deny_application');

//payment
Route::get('payment','\App\Http\Controllers\PaymentController@makepayment');
Route::POST('payment','\App\Http\Controllers\PaymentController@validatepayment')->name('makingpayment');
// Route::GET('paymentsuccess','\App\Http\Controllers\PaymentController@paymentsuccess');
Route::GET('studentpaymentview/{id?}','\App\Http\Controllers\PaymentController@viewpayment');

//Export XML
Route::GET('/Export/{id}','\App\Http\Controllers\applicationstatus@export');

