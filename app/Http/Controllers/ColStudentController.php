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
        return view('college');
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

  //college form input data
  $data = request()->validate([
    'firstname'=>'required',
    'firstname'=>'required',
    'gender'=>'required',
    'course'=>'required',
    'birthday'=>'nullable',
    'birthplace'=>'nullable',
    'student_address'=>'required',
    'parents_name'=>'required',
    'parents_contact'=>'required',
    'parents_address'=>'nullable',
    'email'=>'nullable|email',
]);


        $college = array(
            //for database                //from form submited
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'gender'=>$request->gender,
            'course'=>$request->course,
            'birthday'=>$request->birthday,
            'birthplace'=>$request->birthplace,
            'student_address'=>$request->student_address,
            'parents_name'=>$request->parents_name,
            'parents_contact'=>$request->parents_contact,
            'parent_address'=>$request->parents_address,
            'email'=>$request->email,
        );

        colStudent::create($college);


       
        
       

     

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
