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

        $count_approved = Student::where('status', 'approved')->count();
      




        $prep_q = Student::select('*')
        ->where('Grade_Level', '=', 'prep')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g1_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 1')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g2_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 2')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g3_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 3')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g4_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 4')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g5_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 5')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g6_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 6')
        ->where('status', '=', 'approved')
        ->count();

        $g7_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 7')
        ->where('status', '=', 'approved')
        ->count();

        $g8_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 8')
        ->where('status', '=', 'approved')
        ->count();

        $g9_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 9')
        ->where('status', '=', 'approved')
        ->get()->count();;

        $g10_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 10')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g11_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 11')
        ->where('status', '=', 'approved')
        ->get()->count();

        $g12_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 12')
        ->where('status', '=', 'approved')
        ->get()->count();


       
        return view('home')
       
        ->with('prep', $prep_q)
        ->with('g1', $g1_q)
        ->with('g2', $g2_q)
        ->with('g3', $g3_q)
        ->with('g4', $g4_q)
        ->with('g5', $g5_q)
        ->with('g6', $g6_q)
        ->with('g7', $g7_q)
        ->with('g8', $g8_q)
        ->with('g9', $g9_q)
        ->with('g10', $g10_q)
        ->with('g11', $g11_q)
        ->with('g12', $g12_q)
        ->with('counts',$count_approved);


        
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
