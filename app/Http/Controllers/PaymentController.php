<?php

namespace App\Http\Controllers;

use App\Payment;
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
                    // payment page 
        // $reserved = Payment::all();
        // return dd($reserved);
        // return view('payments')->with('reserveds', $reserved);
        // return view ('payment');
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


        if($request->has('payment_receipt_upload')){
            $fileuploaded = $request->file('payment_receipt_upload');
            // $filename= $request->  $fileuploaded->getClientOriginalExtension(); 
           // $filename= time() . '.' . $fileuploaded->getClientOriginalExtension(); // getting image extension
            $filename = $request->file('payment_receipt_upload')->getClientOriginalName();
            $filepath= public_path('/images/');
            $fileuploaded->move( $filepath, $filename); //ok

           
        $data = array(  
            
            'payment_name_field'=>$request->payment_stud_name,
            'payment_amount_field'=>$request->payment_amount,
            'payment_receipt_upload_field'=>$filename,
        );

            }
            Payment::create($data);

            // return redirect('thankyou')->with('data', $data);
           

    }



  

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
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
        //
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
