<?php

namespace App\Http\Controllers;
use App\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

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

    public function college_list(){
        $reserved_college = College::all();
        return view('college_list')->with('reserved_colleges', $reserved_college);
    }

    Public function count_approved()
    {
        // $count_approved = College::where('status', 'approved')->count();
        //  return view('home')->with('college_count', $count_approved);
      
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'firstname'=>'required',
            'firstname'=>'required',
            'gender'=>'required',
            'course'=>'required',
            'birthday'=>'nullable',
            'birthplace'=>'nullable',
            'students_address'=>'nullable',
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
                    'students_address'=>$request->studenst_address,
                    'parents_name'=>$request->parents_name,
                    'parents_contact'=>$request->parents_contact,
                    'parent_address'=>$request->parents_address,
                    'email'=>$request->email,
                );
        
                College::create($college);

                return back()->with('success', 'Data Sucessfully updated');
    }
        
    

    /**
     * Display the specified resource.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

              //validate inputs
        $this->validate($request,[
     
            'status'=>'Status',
        ]); 

        $students = College::find($id);
        $students->status = $request->input('Status');
           
       $students->save();
        return back()->with('success', 'Data Sucessfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        //
    }
}
