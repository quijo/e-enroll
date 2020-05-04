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
        $reserved_counts = Student::where('status', 'approved')->get()->count();

        $preschool = Student::where('Grade_Level','Preschool')->count();
        $grade1 = Student::where('Grade_Level','Grade1')->where('status','approved')->count();
        $grade2 = Student::where('Grade_Level','Grade2')->where('status','approved')->count();
        $grade3 = Student::where('Grade_Level','Grade3')->where('status','approved')->count();
        $grade4 = Student::where('Grade_Level','Grade4')->where('status','approved')->count();
        $grade5 = Student::where('Grade_Level','grade5')->where('status','approved')->count();
        $grade6 = Student::where('Grade_Level','grade6')->where('status','approved')->count();
        $grade7 = Student::where('Grade_Level','grade7')->where('status','approved')->count();
        $grade8 = Student::where('Grade_Level','grade8')->where('status','approved')->count();
        $grade9 = Student::where('Grade_Level','grade9')->where('status','approved')->count();
        $grade10 = Student::where('Grade_Level','grade10')->where('status','approved')->count();
        $grade11 = Student::where('Grade_Level','grade11')->where('status','approved')->count();
        $grade12 = Student::where('Grade_Level','grade12')->where('status','approved')->count();

        return view('home')->with('counts',$reserved_counts,)
        ->with(compact
        (
            'preschool',
            'grade1',
            'grade2',
            'grade3',
            'grade4',
            'grade5',
            'grade6',
            'grade7',
            'grade8',
            'grade9',
            'grade10',
            'grade11',
            'grade12'
        ));
      
    }

   
  

    public function reserved_list()
    {
        $reserved = Student::all();
        return view('reserved_list')->with('reserveds', $reserved);


    }
 
}
