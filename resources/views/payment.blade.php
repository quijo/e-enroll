
@extends('template.app')



@section('content')

<div class="basiced-container">

   
  <div class="basiced-header">
    <h1>Payment Option</h1>
  </div>

  <div class="container">
    
    {{-- ################################################################## --}}
    {{-- #################      important notes        l################### --}}
    {{-- ################################################################## --}}

    <div class="alert alert-info" role="alert">
      <span style="color:red;">IMPORTANT!</span> Thank you for filling up your reservation form.  Be informed that your transaction will become official as soon we recieve your uploaded scanned or photo of
      your proof of payment.  Thank you for choosing Visayan Nazarene Bible College as part of your learning.
    </div>
     {{-- ################################################################## --}}
    {{-- #################      end of important notes   ################### --}}
    {{-- ################################################################## --}}


    {{-- ################################################################## --}}
    {{-- ##################        Start cards        l################### --}}
    {{-- ################################################################## --}}

    <div class="row">

      <div class="col-sm-3 mb-5">
        <div class="card card text-center h-100">
          <div class="card-body">
            <img class="card-img-top fluid " src="images/metrobank2.png"  style="width:60%">
           
              <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Name:</span><br/> Visayan Nazarene Bible College</h6>
              <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Number:</span><br/> 246-3-24655593-2</></h6>
              <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Branch:</span><br/> Metrobank Banilad Cebu City Branch</></h6>
              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Be sure you have your payment receipt">
              <button type="submit" class="btn btn-large btn-success mb-4" data-toggle="modal" data-target="#exampleModal" Enabled>Pay Now </button>
              </span>
              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Get deposit slip from Metrobank">
                <a href="/" class="btn btn-large btn-danger mb-4"  Enabled>Pay Later </a>
              </span>
              
          </div>
        </div>
      </div><!--col4-->
      
      <div class="col-sm-3 mb-5">
        <div class="card card text-center h-100">
          <div class="card-body">
            <img class="card-img-top fluid mt-4 mb-5" src="images/psbank.png"  style="width:100%">
           
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Name:</span><br/> Visayan Nazarene Bible College</h6>
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Number:</span><br/> 110112000705</></h6>
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Branch:</span><br/> MetrobankBanilad Cebu City Branch</></h6>
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Be sure you have your payment receipt">
              <button type="submit" class="btn btn-large btn-success mb-4" data-toggle="modal" data-target="#exampleModal" Enabled>Pay Now </button>
              </span>
              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Get deposit slip from PSBank">
                <a href="/" class="btn btn-large btn-danger mb-4"  Enabled>Pay Later </a>
             
          </div>
        </div>
      </div><!--col4-->

      

      <div class="col-sm-3 mb-5">
        <div class="card card text-center h-100">
          <div class="card-body">
            <img class="card-img-top fluid mb-4 mt-4" src="images/ecpay711.png"  style="width100%">
           
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold ">Account Name:</span><br/> Visayan Nazarene Bible College</h6>
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Number:</span><br/> 246-3-24655593-2</></h6>
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Branch:</span><br/> Metrobank Banilad Cebu City Branch</></h6>
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Be sure you have your payment receipt">
              <button type="submit" class="btn btn-large btn-success mb-4" data-toggle="modal" data-target="#exampleModal" Enabled>Pay Now </button>
              </span>
              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Get deposit slip from ECPAY">
                <a href="/" class="btn btn-large btn-danger mb-4"  Enabled>Pay Later </a>
            
          </div>
        </div>
      </div><!--col4-->

      
      <div class="col-sm-3 mb-5">
        <div class="card card text-center h-100">
          <div class="card-body">
            <img class="card-img-top fluid mb-4 mt-1" src="images/landbank.png"  style="width100%">
           
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold ">Account Name:</span><br/> Visayan Nazarene Bible College</h6>
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Number:</span><br/> 2401-0214-45</></h6>
            <h6 style="font-size: calc(7px + 0.8vw);"><span class="font-weight-bold">Account Branch:</span><br/> Landbank Banilad Cebu City Branch</></h6>
            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Be sure you have your payment receipt">
              <button type="submit" class="btn btn-large btn-success mb-4" data-toggle="modal" data-target="#exampleModal" Enabled>Pay Now </button>
              </span>
              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Get deposit slip from LANDBANK">
                <a href="/" class="btn btn-large btn-danger mb-4"  Enabled>Pay Later </a>
          
          
          </div>
        </div>
      </div><!--/col4-->

    </div><!--/row-->

    {{-- ################################################################## --}}
    {{-- ##################        end cards        l################### --}}
    {{-- ################################################################## --}}

  

    {{-- ################################################################## --}}
    {{-- ##################        Start Modal        l################### --}}
    {{-- ################################################################## --}}

      <div class="row">
          <div class="col-sm-12">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">

                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payment Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div><!--/modal-header-->

                  <div class="modal-body">
                    <form action="{{route('payments.store')}}" method="POST" enctype="multipart/form-data"  >
                      @csrf
                        <div class="form-group">
                          <label for="payment_stud_name" class="col-form-label">Student Name</label>
                          <input type="text" name="payment_stud_name" id="payment_stud_name"class="form-control" >
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Amount</label>
                          <input type="text" name="payment_amount" id="payment_amount"class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Please Upload deposit slip or reciept.</label><br/>
                          <input type="file" name="payment_receipt_upload" id="receipt_upload" class="filestyle" data-icon="true">
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" >Pay</button>
                        </div>
                    </form>
                  </div><!--/modal body-->

                   

                </div><!--Modal content-->
              </div><!--modal dialog-->
            </div><!--/modal fade-->
          </div><!--/col 12-->
      </div><!-- /row -->

    {{-- ################################################################## --}}
    {{-- ##################         End of Moda .       l################## --}}
    {{-- ################################################################## --}}

 
  </div><!--/container-->
</div><!--/basic ed container-->

@endsection





    

