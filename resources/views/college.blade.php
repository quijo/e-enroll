@extends('template/app')

@section('content')
 <div class="basiced-container">

        <div class="basiced-header">
            <h1>COLLEGE EDUCATION</h1>
        </div>

        <div class="m-1">
            @if($message = Session::get('success'))
            <div class="alert alert-success">{{$message}}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="p-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif
        </div>

            <div class="basiced-regform">
                <div class="students-form">
                    <h3>Student Info</h3>
                    <form action="{{route('college.store')}}" method="POST">
                            @csrf
                         <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label>Firstname and Middlename </label>
                                <input name="firstname" id="firstname"  value="{{old('firstname')}}" type="text" class="form-control border-0" placeholder="Enter Firstname with Middlename">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Lastname</label>
                                <input name="lastname" id="lastname" value="{{old('lastname')}}" input type="text" class="form-control border-0" placeholder="Enter Lastname" >                                    
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Gender</label>
                                <select  name="gender" id="gender" value="{{old('gender')}}}" type="text" class="form-control border-0" >
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Courses</label>
                                <select name="course" id="course" value="{{old('course')}}" type="text" class="form-control border-0"  > 
                                    <option value="" disabled selected hidden>Enter Course</option>

                                    <option>Bachelor of Arts in Theology</option>
                                    <option>Bachelor of Arts in Religious Education</option> 
                                    <option>Bachelor of Arts in Intercultural Ministries</option> 
                                    <option>Bachelor of Arts in Pastoral Studies</option> 
                                </select> 
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="birthday">Birthday
                                </label>
                                <input name="birthday" id="birthday" value="{{old('birthday')}}" type="date" class="form-control border-0" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="birthplace">Birthplace</label>
                                <input type="text" name="birthplace" id="birthplace" value="{{old('birthplace')}}"   class="form-control border-0"  placeholder="Enter birthplace">
                            </div>
                        </div>

                         <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="students_address" id="students_address" value="{{old('students_address')}}"  class="form-control border-0" placeholder="Enter Address">
                        </div>
                </div>

                <div class="parents-form">
            
                <h3>Parents Info</h3>
                    
                         <div class="form-group">
                            <label for="inputfirstname_middlename_lastname">Name</label>
                            <input name="parents_name" id="parents_name" value="{{old('parents_name')}}" type="text" class="form-control border-0"  placeholder="Enter parents name">
                        </div>
                         <div class="form-group">
                            <label for="inputtelnumber">TelephoneNumber / CellphoneNumber</label>
                            <input name="parents_contact" id="parents_contact" value="{{old('parents_contact')}}" type="text" class="form-control border-0" placeholder="Enter parents Tel / Cell. No." >
                        </div>
                         <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="parents_address" id="paretns_address" value="{{old('parents_address')}}" class="form-control border-0"  placeholder="Enter parents_address">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" id="email" value="{{old('email')}}" type="text" class="form-control border-0" placeholder="Enter parents email" >
                        </div>
                        <button type="submit" class="btn btn-dark border-0 bg-black">Submit</button>
                    </form>
                </div>
            </div>
    </div>
@endsection