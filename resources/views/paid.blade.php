@extends('template.dashboard')





@section('content')
<div class="card mt-2 ">
    <div class="card-header">
        Resereved Info
    </div>

   
<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student</a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent" role="tab" aria-controls="parent" aria-selected="false">Parent</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pending-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="false">Pending</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="approved-tab" data-toggle="tab" href="#approved" role="tab" aria-controls="approved" aria-selected="false">Approved</a>
      </li> --}}
  </ul>
  <div class="tab-content  m-2" id="myTabContent">

    <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
        <!--student tab content-->
        <table class="table table-striped  "  id="datatable">
            <thead>
                <tr>
                    <th style="width: 10%"> Date  </th>
                    <th style="width: 20%"> Name</th>
                    <th style="width: 20%"> Amount </th>
                    <th style="width: 10%">Proof Of Payment</th>
                    <th style="width: 10%"> Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pay as $paid)
                <tr>
                    <td>{{$paid->created_at->format('d/m/Y')}}</td>
                    <td>{{$paid->Name}}</td>
                    <td>PHP {{number_format($paid->Amount),3}}</td>
                    <td><img src="/images/{{$paid->Upload}}" width="100"></td>
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
</div>
</div>

@endsection()