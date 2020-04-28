<?php

namespace App\Http\Controllers;

use App\colStudent;
use Illuminate\Http\Request;

class ColStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $col_students = array(
            //for database                //from form submited
            'col_stud_fname_field'=>$request->col_fname,
            'col_stud_lname_field'=>$request->col_lname,
            'col_stud_gender_field'=>$request->col_gender,
            'col_stud_course_field'=>$request->col_course,
            'col_stud_birth_field'=>$request->col_birth,
            'col_stud_bplace_field'=>$request->col_bplace,
            'col_stud_address_field'=>$request->col_address,
            'col_par_name_field'=>$request->col_par_name,
            'col_par_contact_field'=>$request->col_par_contact,
            'col_par_address_field'=>$request->col_par_address,
            'col_par_email_field'=>$request->col_par_email,
        );
        colStudent::create($col_students);
        
        //redirect to  payment mode
        return redirect('payment');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\colStudent  $colStudent
     * @return \Illuminate\Http\Response
     */
    public function show(colStudent $colStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\colStudent  $colStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(colStudent $colStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\colStudent  $colStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, colStudent $colStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\colStudent  $colStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(colStudent $colStudent)
    {
        //
    }
}
