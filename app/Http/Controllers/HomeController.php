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

     $preschool = Student::where('Grade_Level','Preschool')->where('status','approved')->get()->count();
        $grade1 = Student::where('Grade_Level','Grade 1')->where('status','approved')->get()->count();
        $grade2 = Student::where('Grade_Level','Grade 2')->where('status','approved')->get()->count();
        $grade3 = Student::where('Grade_Level','Grade 3')->where('status','approved')->get()->count();
        $grade4 = Student::where('Grade_Level','Grade 4')->where('status','approved')->get()->count();
        $grade5 = Student::where('Grade_Level','grade 5')->where('status','approved')->get()->count();
        $grade6 = Student::where('Grade_Level','grade 6')->where('status','approved')->get()->count();
        $grade7 = Student::where('Grade_Level','grade 7')->where('status','approved')->get()->count();
        $grade8 = Student::where('Grade_Level','grade 8')->where('status','approved')->get()->count();
        $grade9 = Student::where('Grade_Level','grade 9')->where('status','approved')->get()->count();
        $grade10 = Student::where('Grade_Level','grade 10')->where('status','approved')->get()->count();
        $grade11 = Student::where('Grade_Level','grade 11')->where('status','approved')->get()->count();
        $grade12 = Student::where('Grade_Level','grade 12')->where('status','approved')->get()->count();
        $reserved_counts = Student::where('status', 'approved')->get()->count();



        //return the counting of approved studens plus per grade level count
        return view('home')
        ->with('preschool',$preschool)
        ->with('grade1',$grade1)
        ->with('grade2',$grade2)
        ->with('grade3',$grade3)
        ->with('grade4',$grade4)
        ->with('grade5',$grade5)
        ->with('grade6',$grade6)
        ->with('grade7',$grade7)
        ->with('grade8',$grade8)
        ->with('grade9',$grade9)
        ->with('grade10',$grade10)
        ->with('grade11',$grade11)
        ->with('grade12',$grade12)
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
