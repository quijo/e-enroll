@extends('template.dashboard')


@section('content')
@foreach ($reserved_colleges as $reserve )


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
                        <th style="width: 5%">Status</th>
                        <th style="width: 5%">Change</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($reserved_colleges as $reserved)
                        <tr>
                            <td>{{$reserved->id}}</td>
                            <td>{{$reserved->created_at->format('d.M.y')}}</td>
                            <td>{{$reserved->firstname}}</td>
                            <td>{{$reserved->lastname}}</td>
                            <td>{{$reserved->Gender}}</td>
                            <td>{{$reserved->course}}</td>
                            <td>{{$reserved->parents_contact}}</td>
                            <td><a href="mailto:{{$reserved->email}}">{{$reserved->email}}</td>

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
                        @foreach($reserved_colleges as $reserved)
                            <tr>
                                <td>{{$reserved->created_at->format('d/m/Y')}}</td>
                                <td>{{$reserved->parents_name}}</td>
                                <td>{{$reserved->parents_contact}}</td>
                                <td>{{$reserved->parents_address}}</td>
                                <td>{{$reserved->email}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <!--end parent tab pane-->
    </div><!--tab content-->
</div> <!--card main wrap-->
{{-- ############################ End of Tab ############################### --}}

    
@endforeach
@endsection