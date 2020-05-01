@extends('template.app')

@section('content')
<div class="contact-container">
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>
            Nulla labore pariatur mollit in incididunt minim enim. 
            Fugiat ullamco esse labore ut aute id. Officia dolore qui elit
            excepteur velit minim dolor dolore incididunt voluptate Lorem ut minim nisi.
        </p>
    </div>
    
        @if($message = Session::get('success'))
        <div class="alert alert-success">{{$message}}</div>
        @endif
    
    <div class="contact-form">
                       {{-- submit to Route::post('/contact','PagesController@store')  --}}
        <form action="/contact" method="POST" >
            @csrf
            <div class="col-auto">
        
                <div class="text-warning">{{$errors->first('name')}}</div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text border-0 bg-black text-blue contact-input">NAME</div>
                    </div>
                    <input type="text" name="name" class="form-control border-0 "value="{{old('name')}}" id="inlineFormInputGroup" placeholder="Name">
                </div>
                
                <div class="text-warning">{{$errors->first('email')}}</div>
                 <div class="input-group mb-2">
                    <div class="input-group-prepend ">
                        <div class="input-group-text border-0 bg-black text-blue contact-input">EMAIL</div>
                    </div>
                    <input type="text" name="email" class="form-control border-0"value="{{old('email')}}" id="inlineFormInputGroup" placeholder="Email">
                </div>
                
                <div class="text-warning">{{$errors->first('subject')}}</div>
                 <div class="input-group mb-2">
                    <div class="input-group-prepend ">
                        <div class="input-group-text border-0 bg-black text-blue subject-prefext  ">SUBJECT</div>
                    </div>
                    <input type="text" name="subject" class="form-control border-0" value="{{old('subject')}}"id="inlineFormInputGroup" placeholder="Subject">
                </div>
               

                <div class="form-group contact-textarea mb2 '">
                    <label for="exampleFormControlTextarea1" class="bg-black text-blue textarea-label contact-textarea">MESSAGE</label>
                    <textarea name="message" class="form-control border-0 message" id="exampleFormControlTextarea1" rows="10" >
                        {{old('message')}}
                    </textarea>
                </div>
                <div class="text-warning">{{$errors->first('message')}}</div>
                <button type="submit"class="contact-btn bg-black text-blue border-0">SEND</button>
            </div>
            
        </form>
    </div>

</div>
    
@endsection