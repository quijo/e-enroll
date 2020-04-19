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
    <div class="contact-form">
        <form >
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text border-0 bg-black text-blue contact-input">NAME</div>
                    </div>
                    <input type="text" class="form-control border-0 " id="inlineFormInputGroup" placeholder="Name">
                </div>
                 <div class="input-group mb-2">
                    <div class="input-group-prepend ">
                    <div class="input-group-text border-0 bg-black text-blue contact-input">EMAIL</div>
                    </div>
                    <input type="text" class="form-control border-0" id="inlineFormInputGroup" placeholder="Email">
                </div>
                 <div class="input-group mb-2">
                    <div class="input-group-prepend ">
                    <div class="input-group-text border-0 bg-black text-blue subject-prefext  ">SUBJECT</div>
                    </div>
                    <input type="text" class="form-control border-0" id="inlineFormInputGroup" placeholder="Subject">
                </div>
                <div class="form-group contact-textarea mb2 '">
                    <label for="exampleFormControlTextarea1" class="bg-black text-blue textarea-label contact-textarea">MESSAGE</label>
                    <textarea class="form-control border-0 message" id="exampleFormControlTextarea1" rows="10" ></textarea>
                </div>
                <button class="contact-btn bg-black text-blue border-0">SEND</button>
            </div>
            
        </form>
    </div>

</div>
    
@endsection