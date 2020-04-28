<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@index');
Route::get('/basiced','PagesController@basiced');
Route::get('/college','PagesController@college');
Route::get('/contact','PagesController@contact');
Route::get('/payment','PagesController@payment');
Route::get('/reserved_list','PagesController@reserved_list');

Route::resource('students','StudentController');
Route::resource('col_students','ColStudentController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');







