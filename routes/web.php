<?php

use Illuminate\Support\Facades\Route;

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
    return view('enroll');
});
Route::get('/basiced', function () {
    return view('basiced');
});
Route::get('/college', function () {
    return view('college');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tuition', function () {
    return view('tuition');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
