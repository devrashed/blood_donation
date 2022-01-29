<!DOCTYPE html>
<html>
<head>

<link href="{{asset('asset/admin/css/style.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('asset/admin/css/bootstrap.min.css')}}">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="{{asset('asset/admin/js/popper.min.js')}}"></script>
<script src="{{asset('asset/admin/js/bootstrap.min.js')}}"></script>

<!-- Menu -->
<link href="{{asset('asset/admin/css/ddsmoothmenu.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('asset/admin/css/ddsmoothmenu-v.css')}}" rel="stylesheet" type="text/css">

<script type="text/javascript" src="{{asset('asset/admin/js/ddsmoothmenu.js')}}"></script>


<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>


<title>@yield('title')</title>

</head>
<body>
<div id="wrapper">
  
 

<div class="header">  @include('layout.admin.header') </div>


<div class="sidebar"> @include('layout.admin.sidebar')  </div>


<div class="content"> @yield('content') </div> 


<div class="footer">  @include('layout.admin.footer')  </div>


   

</div> <!-- END THE WRAPPER -->

</body>
</html>