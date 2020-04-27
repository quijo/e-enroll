
@extends('template.dashboard')

@section('content')
<!-- Main content -->
<div class="card mt-2">
  <div class="card-header"><h2>Dashboard</h2></div>

  <div class="container-fluid p-2">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>
            <p>Reserved</p>
          </div>
          <div class="icon">
            <i class="fas fa-save"></i>
          </div>
          <a href="{{url('reserved_list')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53</h3>

            <p>Basic Education</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{url('reserved_list')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-12">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>College</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{url('reserved_list')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      {{-- <div class="col-lg-3 col-12">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Hiigh School</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col --> --}}
    </div>
    <!-- /.row -->
     <!--per level-->
      <div class="row">
        <div class="col-sm-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 card-title>Quick Counts</h3>
            </div>
            <div class="card-body">
              <canvas id="myChart" width="600" height="200"></canvas>
            </div>
            
          </div>
        </div> <!--col12-->
      </div>
      <!--/per level-->
    </div><!--Container fluid-->
</div><!--main Card-->

{{-- ###################################################### --}}




@endsection

