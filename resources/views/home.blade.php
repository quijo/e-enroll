
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
          {{-- @foreach($students_count as $count)

          @endforeach --}}
        
            <h3>{{$counts}}</h3>
          
            
            <p>Total ReReserved</p>
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
            <h3>{{$counts}}</h3>

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
            <h3>0</h3>

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

@section('barChart')
  
<script>
  //by chartjs.org
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Preschool','Grade1', 'Grade2', 'Grade3', 'Grade4', 'Grade5','Grade6','Grade7','Grade8','Grade9','Grade10','Grade11','Grade12',],
          datasets: [{
              label: 'Reservation',
              data: [{{$counts}},{{$grade1}},{{$grade2}},{{$grade3}},{{$grade4}}, {{$grade5}},{{$grade6}},{{$grade7}},{{$grade8}},{{$grade9}},{{$grade10}},{{$grade11}},{{$grade12}}],
              backgroundColor: [
                  'rgba(255, 99, 132,1 )',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255,1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(255, 99, 132,1 )',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255,1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(255, 99, 132,1 )',
                  'rgba(54, 162, 235, 1)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(255, 99, 132,1 )',
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }

              }]
          }
      }
  });
  </script>
@endsection