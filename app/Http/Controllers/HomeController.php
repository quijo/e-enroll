<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Student;
use App\College;

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
        $college_count_approved = College::where('status', 'approved')->count();
        $basiced_count_approved = Student::where('status', 'approved')->count();
        $prep_am = Student::where('Grade_Level', 'Kinder-AM')->where('status', 'approved')->count();
        $prep_pm = Student::where('Grade_Level', 'Kinder-PM')->where('status', 'approved')->count();
        $g1_q = Student::where('Grade_Level', 'grade 1')->where('status',  'approved')->count();
        $g2_q = Student::where('Grade_Level', 'grade 2')->where('status',  'approved')->count();
        $g3_q = Student::where('Grade_Level', 'grade 3')->where('status',  'approved')->count();
        $g4_q = Student::where('Grade_Level', 'grade 4') ->where('status', 'approved')->count();
        $g5_q = Student::where('Grade_Level', 'grade 5')->where('status',  'approved')->count();
        $g6_q = Student::where('Grade_Level', 'grade 6')->where('status',  'approved')->count();
        $g7_q = Student::where('Grade_Level', 'grade 7')->where('status',  'approved')->count();
        $g8_q = Student::where('Grade_Level', 'grade 8')->where('status',  'approved')->count();
        $g9_q = Student::where('Grade_Level', 'grade 9') ->where('status', 'approved')->count();
        $g10_q = Student::where('Grade_Level','grade 10')->where('status', 'approved')->count();
        $g11_q = Student::where('Grade_Level','grade 11')->where('status', 'approved')->count();
        $g12_q = Student::where('Grade_Level','grade 12')->where('status', 'approved')->count();


        return view('home')
        ->with('preschool', $prep_am + $prep_pm)
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
        ->with('basiced_count',$basiced_count_approved)
        ->with('college_count', $college_count_approved);
        


    }

   


    public function reserved_list()
    {
       

   
        $reserved = Student::all();
        return view('reserved_list')
        ->with('reserveds', $reserved)
        ->with('remarks','$remark');
      

   


      
    }

    



 
}
