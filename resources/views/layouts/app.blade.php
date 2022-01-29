<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{asset('asset/fornt/css/styles.css')}}" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


<script src="{{asset('asset/fornt/js/script.js')}}"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>


    <title>@yield('title')</title>

</head>
<body>
  <div id="wrapper"> 
 
   <div class="topbar"> 

     <div class="row"> 

         <div class="col-md-2"> 
    
                <div id="Menus">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i>  </a></li>
                    <li> <a href="#"> <i class="fab fa-youtube"></i>  </a></li> 
                </div>

          </div>
         <div class="col-md-9"></div>

     </div>


   </div> <!-- END THE TOPBAR -->
 <div class="clr"> </div>  
 <div class="topmenu"> 

   
 <div class="row"> 

      <div class="col-md-3"> <img class="logo" src='././public/upload/logo.png'> </div>      
      <div class="col-md-9"> 


        <div id='cssmenu'>
            <ul>
                <li><a href="{!! url('/'); !!}">Home</a></li>
                <li class='active'><a href="{!! url('/about'); !!}">About us</a> </li>
                <li><a href="{!! url('/founder'); !!}">Founder Member</a></li>
                <li><a href="{!! url('/photogallery'); !!}">Photogallery</a></li>
                <li><a href="{!! url('/donarjoin'); !!}">Donar Join</a></li>
                <li><a href="{!! url('/contact'); !!}">Contact Us</a></li>
            </ul>
        </div>
       </div>
      </div> 

  </div> <!-- END THE MENU -->


 <div class="contentbody"> @yield('content') </div>


  <footer> </footer> <!-- END THE footer -->


  </div> <!-- END THE WRAPPER --> 
</body>
</html>
