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
   
    }

    public function post_mail()
    {

       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           //validate inputs
           $data = request()->validate([
            'First_Name'=>'required',
            'Last_Name'=>'required',
            'Gender'=>'required',
            'Grade_Level'=>'required',
            'Birthday'=>'required',
            'Birth_Place'=>'required',
            'Student_Address'=>'required',
            'Parents_Name'=>'required',
            'Parents_Contact'=>'required',
            'Parents_Address'=>'required',
            'Parents_Email'=>'required|email',
        ]);

        $payments = array(
           
            'First_Name'=>$request->First_Name,
            'Last_Name'=>$request->Last_Name,
            'Gender'=>$request->Gender,
            'Grade_Level'=>$request->Grade_Level,
            'Birthday'=>$request->Birthday,
            'Birth_Place'=>$request->Birth_Place,
            'Student_Address'=>$request->Student_Address,
            'Parents_Name'=>$request->Parents_Name,
            'Parents_Contact'=>$request->Parents_Contact,
            'Parents_Address'=>$request->Parents_Address,
            'Parents_Email'=>$request->Parents_Email,
           
            
        );

        Student::create($payments);
        return back()->with('success', 'Thank you');
        
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       
     
              //validate inputs
        $this->validate($request,[
            // 'First_Name'=>'required',
            // 'Last_Name'=>'required',
            // 'Gender'=>'required',
            // 'Grade_Level'=>'required',
            // 'Birthday'=>'required',
            // 'Birth_Place'=>'required',
            // 'Student_Address'=>'required',
            // 'Parents_Name'=>'required',
            // 'Parents_Contact'=>'required',
            // // 'Parents_Address'=>'required',
            // 'Parents_Email'=>'required|email',
            'status'=>'Status',
        ]);
        // return back()->with('success', 'data has content');

        // $data = request()->validate([
            // 'First_Name'=>'required',
            // 'Last_Name'=>'required',
            // 'Gender'=>'required',
            // 'Grade_Level'=>'required',
        //     'Birthday'=>'required',
        //     'Birth_Place'=>'required',
        //     'Student_Address'=>'required',
        //     'Parents_Name'=>'required',
            // 'Parents_Contact'=>'required',
        //     'Parents_Address'=>'required',
            // 'Parents_Email'=>'required|email',
            // 'Status'=>'required|email',
        // ]);

       

        $students = Student::find($id);


        
           
        // $students->First_Name = $request->input('First_Name');
        // $students->Last_Name = $request->input('Last_Name');
        // $students->Gender = $request->input('Gender');
        // $students->Grade_Level = $request->input('Grade_Level');
        // $students->Birthday = $request->input('Birthday');
        // $students->Birth_Place = $request->input('Birth_Place');
        // $students->Student_Address = $request->input('Student_Address');
        // $students->Parents_Name = $request->input('Parents_Name');
        // $students->Parents_Contact = $request->input('Parents_Contact');
        // // $students->Parents_Address = $request->input('Parents_Address');
        // $students->Parents_Email = $request->input('Parents_Email');
        $students->status = $request->input('Status');
           
       $students->save();
    
        return back()->with('success', 'Data Sucessfully updated');
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
