
@extends('template.dashboard')


@section('content')
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card mt-2">
              <div class="card-header">
                <h3 class="card-title">Projects</h3>
      
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                                Date 
                            </th>
                            <th style="width: 15%">
                                firstname
                            </th>
                            <th style="width: 15%">
                                lastname
                            </th>
                            <th style="with:10%">
                                Gender
                            </th>
                            <th style="width: 10%">
                                Grade
                            </th>
                            <th style="width: 10%">
                                Contact No.
                            </th>
                            <th style="width:10%">
                              Email 
                            </th>
                            <th style="width: 20%">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                5/20/2020
                            </td>
                            <td>
                     
                                    John
                                
                             
                            </td>
                            <td>
                               
                                    Quiachon
                                  
                               
                            </td>
                            <td >
                                Male
                            </td>
                            <td >
                                Grade1
                            </td>
                            <td >
                               2312812
                            </td>
                            <td >
                                rjohnquia@yahoo.com
                             </td>
                            <td >
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                     
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
          </section>
@endsection