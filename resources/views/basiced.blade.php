@extends('template.app')



@section('content')

    <div class="basiced-container">
            <div class="basiced-header">
                <h1>BASIC EDUCATION</h1>
            </div>

        <form method="POST"  action="{{}}">
            @csrf
            <div class="basiced-regform">

                    <div class="students-form">
                        <h3>Student Info</h3>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputfirstname_middlename">Firstname and Middlename
                                    </label>
                                    <input name="fnam_mname" type="text" class="form-control border-0" id="inputtext">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputlastname">Lastname</label>
                                    <input name="lname" input type="text" class="form-control  border-0 " id="inputlastname" >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputgender">Gender
                                    </label>
                                    <select input name="gender" type="text" class="form-control  border-0" id="inputtext">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputgradelevel">Grade Level</label>
                                    <select input name="gradelevel" type="text" class="form-control  border-0" id="inputgradelevel" >
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
                                    <input name="bday" type="date" class="form-control  border-0" id="inputdate">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputBirthplace">Birthplace</label>
                                    <input name="bplace" type="text" class="form-control  border-0" id="inputBirthplace" placeholder="e.g. Apas, Cebu City">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input name="address" type="text" class="form-control  border-0" id="inputAddress" placeholder="1234 Main St">
                            </div>



                    </div><!--student form-->

                    <div class="parents-form">
                        <h3>Parents Info</h3>

                            <div class="form-group">
                                <label for="inputfirstname_middlename_lastname">Name</label>
                                <input name="name" type="text" class="form-control  border-0" id="inputname">
                            </div>
                            <div class="form-group">
                                <label for="inputtelnumber">TelephoneNumber / CellphoneNumber</label>
                                <input name="telnumber" type="text" class="form-control  border-0" id="inputtelnumber">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control  border-0" id="inputAddress" placeholder="1234 Main St">
                            </div>

                            <div class="form-group">
                                <label for="inputemail">Email</label>
                                <input name="email" type="text" class="form-control  border-0" id="inputemail">
                            </div>

                              <button type="submit" class="btn btn-dark  border-0" style="background-color:black;">Submit</button>
                    </div><!--parents form -->
            </div><!--basiced regestration form-->
            </form>
    </div><!--basiced maincontainer-->
@endsection
