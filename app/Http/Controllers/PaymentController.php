<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Payment;
use App\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_created = Payment::all();
        return view('paid')->with('pay', $payment_created);
      
     
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


        if($request->has('Upload'))
        {
                $fileuploaded = $request->file('Upload');
                $filename = $request->file('Upload')->getClientOriginalName();
                $filepath= public_path('/images/');
                $fileuploaded->move( $filepath, $filename); 
                
        }
        
                $payment_data = array(  
                    'Name'=>$request->Name,
                    'Amount'=>$request->Amount,
                    'Upload'=>$filename,
                );

    
        // dd($payment_data);
            // dd($payment_data);
            Payment::create($payment_data);
            return back()->with('success', 'Payment Successfull! your application is now under review, we will get back to you as soon as posible.');
         
            
           

    }




  

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $id)
    {
      
       
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
