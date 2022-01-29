<div id="smoothmenu2" class="ddsmoothmenu-v">
<ul>

	<li><a href="#">Home</a></li>
	<li><a href="#">Founder Member</a>
   <ul>
            <li><a href="{!! url('/createfounder'); !!}">Add New Member</a></li>
            <li><a href="{!! url('/viewFounder'); !!}">View Member</a></li> 
   </ul> 

	</li>
	<li><a href="#">Photogallery</a>
       
  <ul>
    <li><a href="{!! url('/createphoto'); !!}">Add New Photo</a></li>
    <li><a href="{!! url('/viewphoto'); !!}">View All Photo</a></li> 
  </ul> 

	</li>

    <li><a href="#">Donar List</a>

  <ul>
    <li><a href="{!! url('/createdoner'); !!}">Add New Donar</a></li>
    <li><a href="{!! url('/viewdonar'); !!}">View All Donar</a></li> 
    <li><a href="{!! url('/donarequest'); !!}">New Donar Request</a></li> 
  </ul>


    </li>

    <li><a href="{!! url('/donarsearch'); !!}">Donar Search</a></li>
    
    <li><a href="#">User Information</a>
          
       <ul>
          <li><a href="{!! url('/createuser'); !!}">Create New User</a></li>
          <li><a href="{!! url('/viewuser'); !!}">Show All User</a></li>
       </ul> 

    </li>    

    <li><a href="{!! url('/changepassword'); !!}">Change Password</a></li>    


</ul>


</div>
