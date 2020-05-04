@extends('template.app')



@section('content')

    <div class="basiced-container">
            <div class="basiced-header">
                <h1>BASIC EDUCATION</h1>
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
           
        <form method="POST"  action="{{route('students.store')}}">
           
            @csrf
            <div class="basiced-regform">

                    <div class="students-form">
                        <h3>Student Info</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputfirstname_middlename">Firstname and Middlename</label>
                                    <input name="First_Name" value="{{old('First_Name')}}"placeholder="Enter First and Middlename" id="stud-fname" type="text" class="form-control border-0">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputlastname">Lastname</label>
                                    <input name="Last_Name" value="{{old('Last_Name')}}" placeholder="Enter Lastname" id="stud_lname" input type="text" class="form-control  border-0 "  >
                                </div>
                            </div>
          

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputgender">Gender
                                    </label>
                                    <select input name="Gender"  id="stud_gender" type="text" class="form-control  border-0"  >
                                        <option value="" disabled selected hidden>Enter Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputgradelevel">Grade Level</label>
                                    <select input name="Grade_Level" id="stud_grade" type="text" class="form-control  border-0"  >
                                        <option value="" disabled selected hidden>Enter Grade Level</option>
                                        <option>Nursery-AM</option>
                                        <option>Nursery-PM</option>
                                        <option>Kinder-AM</option>
                                        <option>Kinder-PM</option>
                                        <option>Grade 1</option>
                                        <option>Grade 2</option>
                                        <option>Grade 3</option>
                                        <option>Grade 4</option>
                                        <option>Grade 5</option>
                                        <option>Grade 6</option>
                                        <option>Grade 7</option>
                                        <option>Grade 8</option>
                                        <option>Grade 9</option>
                                        <option>Grade 10</option>
                                        <option>Grade 11</option>
                                        <option>Grade 12</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputbirthday">Birthday
                                    </label>
                                    <input name="Birthday" value="{{old('Birthday')}}" id="stud_birth" type="date" class="form-control  border-0" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputBirthplace">Birthplace</label>
                                    <input name="Birth_Place" value="{{old('Birth_Place')}}" placeholder="Enter Birth Place" id="stud_bplace" type="text" class="form-control  border-0"  placeholder="e.g. Apas, Cebu City">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input name="Student_Address" value="{{old('Student_Address')}}"id="stud_address" type="text" class="form-control  border-0"  placeholder="Enter Address">
                            </div>



                    </div><!--student form-->

                    <div class="parents-form">
                        <h3>Parents Info</h3>

                            <div class="form-group">
                                <label for="inputfirstname_middlename_lastname">Name</label>
                                <input name="Parents_Name" value="{{old('Parents_Name')}}" id="par_name" value="{{old('name')}}" placeholder="Enter Parent's Name" type="text" class="form-control  border-0" >
                            </div>
                            <div class="form-group">
                                <label for="inputtelnumber">TelephoneNumber / CellphoneNumber</label>
                                <input name="Parents_Contact" value="{{old('Parents_Contact')}}" id="par_contact" placeholder="Enter Parents Contact Number" type="text" class="form-control  border-0" >
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input name="Parents_Address" value="{{old('Parents_Address')}}" id="par_address" placeholder="Enter Parent's Address" type="text" class="form-control  border-0"  placeholder="1234 Main St">
                            </div>

                            <div class="form-group">
                                <label for="inputemail">Email</label>
                                <input name="Parents_Email" id="Parents_Email" value="{{old('Parents_Email')}}" placeholder="Enter Parent's Email" type="text" class="form-control  border-0" >
                            </div>

                              <button type="submit" name="submit" class="btn btn-dark  border-0" style="background-color:black;">Submit</button>
                    </div><!--parents form -->
            </div><!--basiced regestration form-->
            </form>
    </div><!--basiced maincontainer-->
@endsection
