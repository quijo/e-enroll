@extends('template.app')


@section('content')

        <div class="banner-logo">
                <img src="../images/vnbc-logo.png"><h3>Visayan Nazarene Bible College</h3>
        </div>
       
        <div class="banner-box">
                <div class="bluebox"><h1>PRE-ENROLLMENT</h1></div>
                <div class="prereg-form">

                       <p> Reprehenderit enim nostrud tempor cillum sunt consectetur in sit id.
                        Veniam ipsum occaecat voluptate elit cillum adipisicing sint esse irure nulla.
                        Fugiat ullamco consequat commodo esse irure officia culpa esse tempor
                        consequat eu cillum sint. Laborum excepteur ipsum pariatur enim adipisicing
                        consequat consequat cillum. Reprehenderit est ipsum proident occaecat minim 
                        voluptate adipisicing mollit elit.</p>

                        <div class="buttons">
                                <a class="btn-top pre-enrollment-btn" href="{{url('/basiced') }}" type="button">Basic Education</a>
                                <a class="btn-top pre-enrollment-btn" href="{{url('/college') }}">College</a>
                                <a class="btn-bottom "  href="{{url('/contact') }}">Contact Us</a>
                        </div>


                </div>
        </div>
@endsection