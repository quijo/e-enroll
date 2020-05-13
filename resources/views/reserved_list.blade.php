
@extends('template.dashboard')



@section('content')

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


    {{-- ####################################################################################################################### --}}
    {{-- #######################################THIS PAGE CONTAIN RESERVEATION LIST############################################# --}}
    {{-- ####################################################################################################################### --}}

    {{-- ############################ Star tab ############################### --}}
        <div class="card m-2 " style="overflow: hidden">
            <div class="card-header">
                Resereved Info
            </div>


            {{-- TAB LINKS STUDENTS AND PARENTS --}}
            <ul class="nav nav-tabs m-2" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent" role="tab" aria-controls="parent" aria-selected="false">Parents</a>
                </li>
            </ul>

            <div class="tab-content  " id="myTabContent" >
                <div class="tab-pane fade show active m-2" id="student" role="tabpanel" aria-labelledby="student-tab">
                    <!--student tab content-->
                 
                     @if($remarks < 0)
                         {{$remarks->Id}}
                     
                     @endif
                  

                    <table class="table table-striped " id="datatable">

                        <thead>
                            <tr>
                                <th style="width: 5%">Id</th>
                                <th style="width: 5%"> Posted </th>
                                <th style="width: 25%">Firstname </th>
                                <th style="width: 25%"> Lastname</th>
                                <th style="width: 5%"> Gender </th>
                                <th style="width: 10%"> Grade</th>
                                <th style="width: 5%"> Contact</th>
                                <th style="width: 10%"> Email </th>
                                <th style="width:">Remarks</th>
                                <th style="width: 5%">Status</th>
                                <th style="width: 5%">Change</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($reserveds as $reserved)
                                <tr>
                                    <td>{{$reserved->id}}</td>
                                    <td>{{$reserved->created_at->format('d.M.y')}}</td>
                                    <td>{{$reserved->First_Name}}</td>
                                    <td>{{$reserved->Last_Name}}</td>
                                    <td>{{$reserved->Gender}}</td>
                                    <td>{{$reserved->Grade_Level}}</td>
                                    <td>{{$reserved->Parents_Contact}}</td>
                                  
                                   
                                    <td><a href="mailto:{{$reserved->Parents_Email}}">{{$reserved->Parents_Email}}</td>
                                  

                                   
                                      
                                   
                                      
                                   

                                    @if ($reserved->status == 'pending')
                                        <td style="color:red">{{$reserved->status}}</td>
                                    @elseif($reserved->status == 'Canceled')
                                        <td style="color:red">{{$reserved->status}}</td>
                                    @else
                                    <td style="color:green">{{$reserved->status}}</td>
                                    @endif
                                    

                                    <td> 
                                      {{-- <i class="fas fa-edit text-success" > </i>--}}
                                          <a href="#"  class="btn btn-warning edit btn-sm" > Status  </a>
                                     
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
           
                    <!--end student tab content-->
                </div> <!--end student tab pane-->

                <!--parent tab pane-->
                <div class="tab-pane fade" id="parent" role="tabpanel" aria-labelledby="parent-tab">

                        <table class="table table-striped  ">
                            <thead>
                                <tr> 
                                    <th> Date </th>
                                    <th> Fullname </th>
                                    <th> Contact </th>
                                    <th> Address </th>
                                    <th> Email </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($reserveds as $reserved)
                                    <tr>
                                        <td>{{$reserved->created_at->format('d/m/Y')}}</td>
                                        <td>{{$reserved->Parents_Name}}</td>
                                        <td>{{$reserved->Parents_Contact}}</td>
                                        <td>{{$reserved->Parents_Address}}</td>
                                        <td>{{$reserved->Parents_Email}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!--end parent tab pane-->
            </div><!--tab content-->
        </div> <!--card main wrap-->
    {{-- ############################ End of Tab ############################### --}}
















     {{-- ############################ Start Reserved Appproved Modal ############################### --}}
        <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                
                
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div><!--/modal-header-->

                {{-- Start Modal Body --}}
                <div class="modal-body">




                    <form action="/students" method="POST" id="edit_status_form" >
                      @csrf
                      @method('PUT')



                      {{-- <div class="form-group">
                        <label >Id</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Enter Id" >
                      </div> --}}

                        {{-- <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="created_at">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label>First Name</label>
                            <input type="text"  class="form-control" name="First_Name" id="First_Name" placeholder="First Name">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Last Name">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label >Gender</label>
                            <input type="text"  class="form-control" name="Gender" id="Gender" placeholder="Gender">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label >Grade</label>
                            <input type="text"  class="form-control" name="Grade_Level" id="Grade_Level" placeholder="Grade Levelr">
                        </div> --}}


                        {{-- <div class="form-group">
                            <label >Contact</label>
                            <input type="text"  class="form-control" name="Parents_Contact" id="Parents_Contact" placeholder="Parents Contact">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label>Email</label>
                            <input type="text"  class="form-control" name="Parents_Email" id="Parents_Email" placeholder="Parents Email">
                        </div> --}}

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="Status" value="pending"  id="Status" >
                            <label class="form-check-label" for="Status" >
                              Pending
                            </label> 
                        </div>

                          <div class="form-check">
                            <input type="radio" class="form-check-input" name="Status"  value="approved" id="Status"  >
                            <label class="form-check-label" for="Status">
                              Approved
                            </label>
                          </div>

                          <div class="form-check">
                            <input type="radio" class="form-check-input" name="Status"  value="Canceled" id="Status"  >
                            <label class="form-check-label" for="Status">
                              Cancel
                            </label>
                        </div>

                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Update</button>
                        </div>
                       
                    </form>
                  

                  </div><!--/modal body-->
                {{-- End Modal Body --}}


                </div><!--modal content-->
            </div><!--modal dialog-->
        </div> <!--end main modal-->
     {{-- ############################ End Reserved Appproved Modal ############################### --}}




@endsection

