
@extends('template.app')

@section('content')
<div class="basiced-container">

  <div class="basiced-header">
    <h1>Payment Option</h1>
  </div>
  <div class="container">

  <div class="alert alert-info" role="alert">
    <span style="color:red;">IMPORTANT!</span> Thank you for filling up your reservation form.  Be informed that your transaction will become official as soon as you upload a scan or photo of
     your proof of payment.  Thank you for choosing Visayan Nazarene Bible College as part of your learning.
    </div>

 

    <div class="row">

      <div class="col-sm-4 mb-5">
        <div class="card card text-center h-100">
          <div class="card-body">
            <img class="card-img-top fluid" src="images/metrobank2.png"  style="width:60%">
           
              <h6 style="font-size: calc(9px + 0.8vw);">Account Name:<br/> Visayan Nazarene Bible College</h6>
              <h6 style="font-size: calc(9px + 0.8vw);">Account#:<br/> 1213-43535345-3456</></h6>
              <button type="button" class="btn btn-large btn-warning mb-4" data-toggle="modal" data-target="#exampleModal">Pay Now </button>
            
          </div>
        </div>
      </div><!--col4-->
      
      <div class="col-sm-4 mb-5">
        <div class="card card text-center h-100">
          <div class="card-body">
            <img class="card-img-top fluid  mt-4 mb-4" src="img/credit/paypal.png"  style="width:70%">
           
              <h6 style="font-size: calc(9px + 0.8vw);">Account Name:<br/> Visayan Nazarene Bible College</h6>
              <h6 style="font-size: calc(9px + 0.8vw);">Account#:<br/> 1213-43535345-3456</></h6>
              <button type="button" class="btn btn-large btn-warning mb-4" data-toggle="modal" data-target="#exampleModal">Pay Now </button>
            
          </div>
        </div>
      </div><!--col4-->

      <div class="col-sm-4 mb-5">
        <div class="card card text-center h-100">
          <div class="card-body">
            <img class="card-img-top fluid mb-4 mt-4" src="images/gcash.jpg"  style="width:45%">
           
              <h6 style="font-size: calc(9px + 0.8vw);">Account Name:<br/> Visayan Nazarene Bible College</h6>
              <h6 style="font-size: calc(9px + 0.8vw);">Account#:<br/> 1213-43535345-3456</></h6>
              <button type="button" class="btn btn-large btn-warning mb-4" data-toggle="modal" data-target="#exampleModal">Pay Now </button>
            
          </div>
        </div>
      </div><!--col4-->

    </div><!--row-->

    <div class="row">
      <div class="col-sm-12">
     
      <div class="col-sm-12">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Student Name</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Amount</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Pay</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div><!--container-->
</div><!--basic ed container-->
@endsection





    

