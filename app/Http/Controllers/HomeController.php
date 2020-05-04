<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

     $preschool_data = Student::where('Grade_Level','Preschool')->where('status','approved')->get()->count();
        $grade1_data = Student::where('Grade_Level','Grade 1')->where('status','approved')->get()->count();
        $grade2_data = Student::where('Grade_Level','Grade 2')->where('status','approved')->get()->count();
        $grade3_data = Student::where('Grade_Level','Grade 3')->where('status','approved')->get()->count();
        $grade4_data = Student::where('Grade_Level','Grade 4')->where('status','approved')->get()->count();
        $grade5_data = Student::where('Grade_Level','grade 5')->where('status','approved')->get()->count();
        $grade6_data = Student::where('Grade_Level','grade 6')->where('status','approved')->get()->count();
        $grade7_data = Student::where('Grade_Level','grade 7')->where('status','approved')->get()->count();
        $grade8_data = Student::where('Grade_Level','grade 8')->where('status','approved')->get()->count();
        $grade9_data = Student::where('Grade_Level','grade 9')->where('status','approved')->get()->count();
        $grade10_data = Student::where('Grade_Level','grade 10')->where('status','approved')->get()->count();
        $grade11_data = Student::where('Grade_Level','grade 11')->where('status','approved')->get()->count();
        $grade12_data = Student::where('Grade_Level','grade 12')->where('status','approved')->get()->count();
        $reserved_counts = Student::where('status', 'approved')->get()->count();



        //return the counting of approved studens plus per grade level count
        return view('home')
        ->with('preschool',$preschool_data)
        ->with('grade1',$grade1_data)
        ->with('grade2',$grade2_data)
        ->with('grade3',$grade3_data)
        ->with('grade4',$grade4_data)
        ->with('grade5',$grade5_data)
        ->with('grade6',$grade6_data)
        ->with('grade7',$grade7_data)
        ->with('grade8',$grade8_data)
        ->with('grade9',$grade9_data)
        ->with('grade10',$grade10_data)
        ->with('grade11',$grade11_data)
        ->with('grade12',$grade12_data)
        ->with('counts',$reserved_counts);


        
        // ([
        //     'preschool',
        //     'grade1',
        //     'grade2',
        //     'grade3',
        //     'grade4',
        //     'grade5',
        //     'grade6',
        //     'grade7',
        //     'grade8',
        //     'grade9',
        //     'grade10',
        //     'grade11',
        //     'grade12'
        // ]));
      
    }

   
  

    public function reserved_list()
    {
        $reserved = Student::all();
        return view('reserved_list')->with('reserveds', $reserved);


    }
 
}
