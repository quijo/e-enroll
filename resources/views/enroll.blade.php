@extends('template.app')


@section('content')

        <div class="banner-logo">
                <img src="../images/vnbc-logo.png"><h3>Visayan Nazarene Bible College</h3>
        </div>
       
        <div class="banner-box">
                <div class="bluebox"><h1>PRE-ENROLLMENT</h1></div>
                <div class="prereg-form">

                       <h4> “The difference between school and life? In school, you're taught a lesson and then given a test. In life, you're given a test that teaches you a lesson.”<br/>
                        Tom Bodett</h4>

                        <div class="buttons">
                                <a class="btn-top pre-enrollment-btn" href="{{url('/basiced') }}" type="button">Basic Education</a>
                                <a class="btn-top pre-enrollment-btn" href="{{url('/college') }}">College</a>
                                <a class="btn-bottom "  href="{{url('/contact') }}">Contact Us</a>
                        </div>


                </div>
        </div>
@endsection