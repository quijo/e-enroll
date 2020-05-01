
@extends('template.dashboard')


@section('content')
        <!-- Main content -->
        <section class="content">

            {{-- <!-- Default box -->
            <div class="card mt-2">
              <div class="card-header">
                <h3 class="card-title">Reserved List</h3>
      
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body p-0">
                --}}


{{-- ############################ tab ############################### --}}
<div class="card mt-2 ">
    <div class="card-header">
        Resereved Info
    </div>

   
<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent" role="tab" aria-controls="parent" aria-selected="false">Parent</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pending-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="false">Pending</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="approved-tab" data-toggle="tab" href="#approved" role="tab" aria-controls="approved" aria-selected="false">Approved</a>
      </li>
  </ul>
  <div class="tab-content " id="myTabContent">

    <div class="tab-pane fade show active " id="student" role="tabpanel" aria-labelledby="student-tab">
        <!--student tab content-->
        <table class="table table-striped  ">
            <thead>
                <tr>
                    <th style="width: 10%">
                        Date 
                    </th>
                    <th style="width: 20%">
                        firstname
                    </th>
                    <th style="width: 20%">
                        lastname
                    </th>
                    <th style="with:10%">
                        Gender
                    </th>
                    <th style="width: 10%">
                        Grade
                    </th>
                    <th style="width: 10%">
                        Contact
                    </th>
                    <th style="width:10%">
                      Email 
                    </th>
                    <th>Status</th>
                    <th style="width: 10%">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($reserveds as $reserved)
                <tr>
                    <td>{{$reserved->created_at->format('d/m/Y')}}</td>
                    <td>{{$reserved->stud_fname_field}}</td>
                    <td>{{$reserved->stud_lname_field}}</td>
                    <td>{{$reserved->stud_gender_field}}</td>
                    <td>{{$reserved->stud_grade_field}}</td>
                    <td>{{$reserved->par_contact_field}}</td>
                    <td>{{$reserved->par_email_field}}</td>
                    <td>{{$reserved->status}}</td>
                    <td >
                        <a  href="#">
                            <i class="fas fa-trash text-danger">
                            </i>
                        </a>
                         <a  href="#">
                            <i class="fas fa-edit text-success">
                            </i>
                        </a>
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
                        <th style="width: 10%">
                            Date 
                        </th>
                        <th style="width: 20%">
                            Fullname
                        </th>
                        <th style="width: 20%">
                            Contact
                        </th>
                        <th style="with:10%">
                            Address
                        </th>
                        <th style="width: 10%">
                            Email
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reserveds as $reserved)
                    <tr>
                        <td>{{$reserved->created_at->format('d/m/Y')}}</td>
                        <td>{{$reserved->par_name_field}}</td>
                        <td>{{$reserved->par_contact_field}}</td>
                        <td>{{$reserved->par_address_field}}</td>
                        <td>{{$reserved->stud_email_field}}</td>
                       
                        <td >
                            <a  href="#">
                                <i class="fas fa-trash text-danger">
                                </i>
                            </a>
                             <a  href="#">
                                <i class="fas fa-edit text-success">
                                </i>
                            </a>
                        </td>
                       
                    </tr>
                @endforeach
                 
                </tbody>
            </table>
   
    </div>
    <!--end parent tab pane-->

    <!-- Penting status-->
    <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
        
        
        <table class="table table-striped  ">
            <thead>
                <tr>
                    <th style="width: 10%">
                        Date 
                    </th>
                    <th style="width: 20%">
                        firstname
                    </th>
                    <th style="width: 20%">
                        lastname
                    </th>
                    <th style="with:10%">
                        Gender
                    </th>
                    <th style="width: 10%">
                        Grade
                    </th>
                    <th style="width: 10%">
                        Contact
                    </th>
                    <th style="width:10%">
                      Email 
                    </th>
                    <th>Status</th>
                    <th style="width: 10%">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

          
         
            @foreach($reserveds as $reserved)
          
    
        
                <tr>
                    <td>{{$reserved->created_at->format('d/m/Y')}}</td>
                    <td>{{$reserved->stud_fname_field}}</td>
                    <td>{{$reserved->stud_lname_field}}</td>
                    <td>{{$reserved->stud_gender_field}}</td>
                    <td>{{$reserved->stud_grade_field}}</td>
                    <td>{{$reserved->par_contact_field}}</td>
                    <td>{{$reserved->par_email_field}}</td>
                    <td> {{$reserved->status}} </td>
                   
                    <td >
                        <a  href="#">
                            <i class="fas fa-trash text-danger">
                            </i>
                        </a>
                         <a  href="#">
                            <i class="fas fa-edit text-success">
                            </i>
                        </a>
                    </td>
                   
                </tr>
              
            @endforeach
          
            </tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="approved" role="tabpanel" aria-labelledby="approved-tab">All Approved Status</div>
  </div>

</div> <!--card-->
{{-- ############################ tab ################################ --}}
























              {{-- </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --> --}}
      
          </section>
@endsection