@extends('layout.admin.default')
@section('title', 'View ALL Donar')

@section('content')

<div class="panel panel-default">
 <div class="panel-heading">View Donar Information</div>
</div>


<form class="form-horizontal"  action="{{URL::to('/singledonar')}}" method="get">
  
 <div class="row">

   <div class="col-md-3"> <b>Donar Search Use Phone Number</b> </div>   
   <div class="col-md-3"> 
<input id="phonenumber" type="number" class="form-control" name="phonenumber" required></div>
   <div class="col-md-4">

<button type="submit" class="btn btn-primary"> Search </button>


    </div>


 </div>


</form>
<br>
<br>

<table class="table table-striped">
  <thead>
    <tr>
     <th scope="col">SL</th>
     <th scope="col">Fullname</th>
      <th scope="col">How Many Days</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Last Donate Date</th>
      <th scope="col">Phone</th>
      <th scope="col">Distrcit</th>
      <th scope="col">Thana</th>
      <th scope="col">Status</th>
     

    </tr>
  </thead>
   <tbody>
 
  
    @foreach($personal as $donarview) 

    <div style="display:none;">
    <?php 
     $cdate1=date("Y-m-d");
     $clast= $donarview->lastdate;
     $date2=date_create($clast);
     $cdate=date_create($cdate1);
     $diff=date_diff($date2, $cdate);
     $datediff=$diff->format("%R%a");
     ?>
 </div>
   
    <tr>  
    
      <td>{{$donarview->mid}}</td> 

       @if ($datediff < "+90")
      <td style="color:#FF0000;">{{$donarview->fullname}}</td>
        @else
       <td>{{$donarview->fullname}}</td>
      @endif

      <td>

     <?php 
     $cdate1=date("Y-m-d");
     $clast= $donarview->lastdate;
     $date2=date_create($clast);
     $cdate=date_create($cdate1);
     $diff=date_diff($date2, $cdate);
     echo $diff->format("%R%a days");
     ?>


      </td>
      <td>{{$donarview->address}}</td>
      <td>{{$donarview->gender}}</td>
      <td>{{$donarview->bgroup}}</td>
      <td>{{$donarview->lastdate}}</td>
      <td>{{$donarview->phonenumber}},  {{$donarview->altePhone}}</td>
      <td>{{$donarview->districName}}</td>
      <td>{{$donarview->thana}}</td>

      <th scope="col">

      <a href="./doEdit/{{$donarview->mid}}">Edit</a> / 
      <a href="./delete/{{$donarview->mid}}">Delete</a></th>
      
    </tr> 
   
    @endforeach

   

   </tbody> 
 </table>





 
@endsection
