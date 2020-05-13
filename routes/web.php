<?php

use Illuminate\Support\Facades\Route;
            //url when type name



Route::get('/','PagesController@index');
Route::get('/basiced','PagesController@basiced');
// Route::get('/college','PagesController@college');

// Route::get('/contact','PagesController@contact'); 


// Route::get('contact','EmailController@create'); for viewing the form page
Route::get('/contact','PagesController@create'); //get url  hitting the PagesController crete() method on clicking links

////submitting a form to email  posting a form
Route::post('/contact','PagesController@store'); //post to PagesController hittingt a store() method action="/contact"Rou

Route::get('/payment','PagesController@payment');
Route::get('/thankyou','PagesController@thankyou');

                //keywords
Route::resource('students','StudentController');
// Route::resource('col_students','ColStudentController');


Route::resource('college','CollegeController');
Route::get('college','CollegeController@index');
Route::get('college_list', 'CollegeController@college_list');

//action="{{route('payments.store')}} if using resource
Route::resource('payments','PaymentController');

Route::get('/paid', 'PaymentController@index');


Route::get('/test', 'StudentController@index');

// Route::get('editStatus', function(){
//     return view('editStatus');
// });


Route::resource('/students','StudentController');


Auth::routes(['register'=>true]);


Route::get('/reserved_list','HomeController@reserved_list');

Route::get('/home', 'HomeController@reserved_count');

Route::get('/home', 'HomeController@grade_levels');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payment_remarks', 'HomeController@payment_remarks');


Route::resource('payment_status','StudentController');












