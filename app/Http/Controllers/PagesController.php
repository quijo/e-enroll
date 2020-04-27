<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('enroll');
    }
    public function basiced(){
        return view('basiced');
    }
    public function college(){
        return view('college');
    }
    public function contact(){
        return view('contact');
    }
    public function reserved_list(){
        return view('reserved_list');
    }

}
