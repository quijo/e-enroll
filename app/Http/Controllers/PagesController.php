<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Student;

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


    // public function contact(){
    //     return view('contact');
    // }
    public function create(){
        return view('contact.create');
    }

    public function store()
    {
        //validate inputs
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

     
        Mail::to ('infotech@vnbc.edu.ph')->send(new ContactFormMail($data));
        return back()->with('success', 'Thank you');
      
            //send email

        // dd(request()->all());
    }


  
    
    public function payment(){
        return view('payment');
    }
    // public function reserved_list(){
    //     return view('reserved_list');
    // }
    public function thankyou(){
        return view('thankyou');
    }

}
