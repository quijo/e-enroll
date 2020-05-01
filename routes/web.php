<?php

use Illuminate\Support\Facades\Route;
            //url when type name
Route::get('/','PagesController@index');
Route::get('/basiced','PagesController@basiced');
Route::get('/college','PagesController@college');

// Route::get('/contact','PagesController@contact'); 


// Route::get('contact','EmailController@create'); for viewing the form page
Route::get('/contact','PagesController@create'); //get url  hitting the PagesController crete() method on clicking links

////submitting a form to email  posting a form
Route::post('/contact','PagesController@store'); //post to PagesController hittingt a store() method action="/contact"

Route::get('/payment','PagesController@payment');
Route::get('/thankyou','PagesController@thankyou');






                //keywords
Route::resource('students','StudentController');
Route::resource('col_students','ColStudentController');

//action="{{route('payments.store')}} if using resource
Route::resource('payments','PaymentController');


Auth::routes();
Route::get('/reserved_list','HomeController@reserved_list');
Route::get('/home', 'HomeController@index')->name('home');







