<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paymnents = array(
            //for database                //from form submited
            'stud_fname_field'=>$request->stud_fname,
            'stud_lname_field'=>$request->stud_lname,
            'stud_gender_field'=>$request->stud_gender,
            'stud_grade_field'=>$request->stud_grade,
            'stud_birth_field'=>$request->stud_birth,
            'stud_bplace_field'=>$request->stud_bplace,
            'stud_address_field'=>$request->stud_address,
            'par_name_field'=>$request->par_name,
            'par_contact_field'=>$request->par_contact,
            'par_address_field'=>$request->par_address,
            'par_email_field'=>$request->par_email,
        );
        Student::create($payments);
        
        //success page
       // return ;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
