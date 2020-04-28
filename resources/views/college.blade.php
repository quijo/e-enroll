@extends('template/app')

@section('content')
 <div class="basiced-container">

        <div class="basiced-header">
            <h1>COLLEGE EDUCATION</h1>
        </div>

            <div class="basiced-regform">
                <div class="students-form">
                    <h3>Student Info</h3>
                    <form action="{{route('col_students.store')}}" method="POST">
                            @csrf
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputfirstname_middlename">Firstname and Middlename
                                </label>
                                <input name="col_fname" id="col_fname" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputlastname">Lastname</label>
                                <input name="col_lname" id="col_lname" input type="text" class="form-control"  >                                    
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputgender">Gender
                                </label>
                                <select  name="col_gender" id="col_gender" type="text" class="form-control" >
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputcourse">Courses</label>
                                <select name="col_course" id="col_course" type="text" class="form-control"  > 
                                    <option>Bachelor of Arts in Theology</option>
                                    <option>Bachelor of Arts in Religious Education</option> 
                                    <option>Bachelor of Arts in Intercultural Ministries</option> 
                                    <option>Bachelor of Arts in Pastoral Studies</option> 
                                </select> 
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputbirthday">Birthday
                                </label>
                                <input name="col_birth" id="col_birth" type="date" class="form-control" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputBirthplace">Birthplace</label>
                                <input name="col_bplace" id="col_bplace" type="text" class="form-control"  placeholder="e.g. Apas, Cebu City">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="col_address" id="col_address"  class="form-control" placeholder="1234 Main St">
                        </div>
                </div>

                <div class="parents-form">
            
                <h3>Parents Info</h3>
                    
                         <div class="form-group">
                            <label for="inputfirstname_middlename_lastname">Name</label>
                            <input name="col_par_name" id="col_par_name"type="text" class="form-control" >
                        </div>
                         <div class="form-group">
                            <label for="inputtelnumber">TelephoneNumber / CellphoneNumber</label>
                            <input name="col_par_contact" id="col_par_contact"type="text" class="form-control" >
                        </div>
                         <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="col_par_address" id="col_par_address" class="form-control"  placeholder="1234 Main St">
                        </div>

                        <div class="form-group">
                            <label for="inputemail">Email</label>
                            <input name="col_par_email" id="col_par_email" type="text" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-dark border-0 bg-black">Submit</button>
                    </form>
                </div>
            </div>
    </div>
@endsection