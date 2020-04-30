<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome.min.css">
   
    {{-- <link rel="stylesheet" href="css/adminlte.min.css"> --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></script>

   
    <title>e-enroll</title>


</head>
<body>
    
            <nav class="navbar navbar-expand-md nav-bg  sticky-top  justify-content-end menu">
                <div class="container" id="main-container">
                <div class="logo">
                <a class="navbar-brand" href="#">VNBC</a>
                </div>
                
              {{-- <button class="btn btn-success ml-auto mr-1">Always Show</button> --}}
                <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    
                        <ul class="navbar-nav text-right mr-2">
                                                {{--underlined link when its active--}}
                            <li  class="nav-item {{ Request::is('/*') ? 'active-link' : '' }}">
                                <a class="nav-link" href="{{url('/')}}">HOME</a>
                            </li>
                            <li class="nav-item {{ Request::is('basiced*') ? 'active-link' : '' }}">
                                <a class="nav-link" href="{{url('basiced')}}">BASIC ED</a>
                            </li>
                            <li class="nav-item {{ Request::is('college*') ? 'active-link' : '' }}">
                                <a class="nav-link" href="{{url('college')}}">COLLEGE</a>
                            </li>
                            <li class="nav-item {{ Request::is('payment*') ? 'active-link' : '' }}">
                                <a class="nav-link" href="{{url('payment')}}">PAYMENT</a>
                            </li>
                            <li class="nav-item {{ Request::is('contact*') ? 'active-link' : '' }}">
                                <a class="nav-link" href="{{url('contact')}}">CONTACT</a>
                            </li>
                
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('login')}}">ADMIN</a>
                            </li>
                        </ul>
                    </div>
                      
                </div>

            </nav>
   
    
    
    <div class="container">
      @yield('content')
    </div>


{{-- <div class="up"style="width:50px;height:50px; background:green;position:fixed ; right:0; bottom:50px; right:20px; z-index:1000;visibility:hidden; " ></div> --}}
<footer>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
             <div class="theme">
                <h3>"MENTORING TRANSFORMATIONAL GRADUATES"</h3>
            </div>
        </div>
       <div class="col-sm-6">
            <div class="facebook">
                <a href="https://www.facebook.com/VNBCBED/"> <i class="fab fa-facebook "></i> <span class="ml-2">Facebook Account</span></p></a>
            </div>
            <div class="email">
                <a href="mailto:principal@vnbc.edu.ph"><i class="fas fa-envelope "></i> <span class="ml-2">Contact Principal</span></a>
            </div>
            <div class="world">
                <a href="https://www.vnbc.edu.ph"  style="margin-left:-3;"><i class="fas fa-globe"></i><span class="ml-2">vnbc.edu.ph</a>
            </div>
       </div>
        
    </div>
        
</div>
</footer>
   


<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll >70) {
	    $(".menu").css("background" , "rgb(10, 161, 217, 0.9)");
        $(".menu").css("transition" , "0.2s");
        $(".up").css("visibility", "visible");
        $(".up").css("transition" , "0.2s");
        
	  }
	  else{
		  $(".menu").css("background" , "#0aa1d9"); 
          $(".up").css("visibility", "hidden") ;
          $(".up").css("transition" , "0.2s");
           
	  }
  })
})
</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
