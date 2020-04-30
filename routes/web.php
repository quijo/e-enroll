<?php

use Illuminate\Support\Facades\Route;
            //url when type name
Route::get('/','PagesController@index');
Route::get('/basiced','PagesController@basiced');
Route::get('/college','PagesController@college');
Route::get('/contact','PagesController@contact');
Route::get('/payment','PagesController@payment');
Route::get('/reserved_list','PagesController@reserved_list');

                //keywords
Route::resource('students','StudentController');
Route::resource('col_students','ColStudentController');
Route::resource('payments','PaymentController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');







