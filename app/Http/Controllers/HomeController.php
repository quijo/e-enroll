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

        $count_approved = Student::where('status', 'approved')->get()->count();
      
       







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
        ->get()->count();

        $g7_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 7')
        ->where('status', '=', 'approved')
        ->count();

        $g8_q = Student::select('*')
        ->where('Grade_Level', '=', 'grade 8')
        ->where('status', '=', 'approved')
        ->get()->count();

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
        ->with('reserved_students',$count_approved)
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
        ->with('g12', $g12_q);



        



        // $grade1_data = Student::where('Grade_Level','Grade 1')->where('status','approved')->get()->count();
        // $grade2_data = Student::where('Grade_Level','Grade 2')->where('status','approved')->get()->count();
        // $grade3_data = Student::where('Grade_Level','Grade 3')->where('status','approved')->get()->count();
        // $grade4_data = Student::where('Grade_Level','Grade 4')->where('status','approved')->get()->count();
        // $grade5_data = Student::where('Grade_Level','grade 5')->where('status','approved')->get()->count();
        // $grade6_data = Student::where('Grade_Level','grade 6')->where('status','approved')->get()->count();
        // $grade7_data = Student::where('Grade_Level','grade 7')->where('status','approved')->get()->count();
        // $grade8_data = Student::where('Grade_Level','grade 8')->where('status','approved')->get()->count();
        // $grade9_data = Student::where('Grade_Level','grade 9')->where('status','approved')->get()->count();
        // $grade10_data = Student::where('Grade_Level','grade 10')->where('status','approved')->get()->count();
        // $grade11_data = Student::where('Grade_Level','grade 11')->where('status','approved')->get()->count();
        // $grade12_data = Student::where('Grade_Level','grade 12')->where('status','approved')->get()->count();
        



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
