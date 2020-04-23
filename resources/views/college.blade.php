@extends('template/app')

@section('content')
 <div class="basiced-container">

        <div class="basiced-header">
            <h1>COLLEGE EDUCATION</h1>
        </div>

            <div class="basiced-regform">
                <div class="students-form">
                    <h3>Student Info</h3>
                    <form>
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputfirstname_middlename">Firstname and Middlename
                                </label>
                                <input name="fnam_mname" type="text" class="form-control" id="inputtext">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputlastname">Lastname</label>
                                <input name="lname" input type="text" class="form-control" id="inputlastname" >                                    
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputgender">Gender
                                </label>
                                <select input name="gender" type="text" class="form-control" id="inputtext">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputcourse">Course</label>
                                <select name="course" input type="text" class="form-control" id="inputcourse" > 
                                    <option>Bachelor of Arts in Theology</option>
                                    <option>Bachelor of Arts in Religious Education</option> 
                                </select> 
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputbirthday">Birthday
                                </label>
                                <input name="bday" type="date" class="form-control" id="inputdate">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputBirthplace">Birthplace</label>
                                <input name="bplace" type="text" class="form-control" id="inputBirthplace" placeholder="e.g. Apas, Cebu City">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <button type="button" class="btn btn-dark">Submit</button>
                    </form>
                </div>
                <div class="parents-form">
                <h3>Parents Info</h3>
                    <form>
                         <div class="form-group">
                            <label for="inputfirstname_middlename_lastname">Name</label>
                            <input name="name" type="text" class="form-control" id="inputname">
                        </div>
                         <div class="form-group">
                            <label for="inputtelnumber">TelephoneNumber / CellphoneNumber</label>
                            <input name="telnumber" type="text" class="form-control" id="inputtelnumber">
                        </div>
                         <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="form-group">
                            <label for="inputemail">Email</label>
                            <input name="email" type="text" class="form-control" id="inputemail">
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection