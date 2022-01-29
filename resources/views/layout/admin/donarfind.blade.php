@extends('layout.admin.default')
@section('title', 'Find Your Donar')

@section('content')


<!-- @foreach($donars as $donarinfo)

<strong>District :</strong> {{$donarinfo->districName}}

<strong>Thana :</strong> {{$donarinfo->thana}} 

<strong>Blood Group :</strong> {{$donarinfo->bgroup}} 

@endforeach  -->

<h4>Donar Find </h4>

</br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">How Many Days</th>
      <th scope="col">Last Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Phone </th>
      <th scope="col">Alternate Phone </th>
    </tr>
  </thead>

<?php   $i=1; ?>

@foreach($donars as $donarinfo)

 <?php 
     $cdate1=date("Y-m-d");
     $clast= $donarinfo->lastdate;
     $date2=date_create($clast);
     $cdate=date_create($cdate1);
     $diff=date_diff($date2, $cdate);
     $datediff=$diff->format("%R%a");
     ?>


  <tbody>
    <tr>
      <th scope="row">{{ $i++ }}</th>

     @if ($datediff < "+90")
      <td style="color:#FF0000;">{{$donarinfo->fullname}}</td>
        @else
       <td>{{$donarinfo->fullname}}</td>
      @endif
      <td>

     <?php 
     $cdate1=date("Y-m-d");
     $clast= $donarinfo->lastdate;
     $date2=date_create($clast);
     $cdate=date_create($cdate1);
     $diff=date_diff($date2, $cdate);
     echo $diff->format("%R%a days");
     ?>


      </td>
 
     <td>{{$donarinfo->lastdate}}</td>
      

      <td>{{$donarinfo->gender}}</td>
      <td>{{$donarinfo->address}}</td>
      <td>{{$donarinfo->phonenumber}}</td>
      <td>{{$donarinfo->altePhone}}</td>
    </tr>

  </tbody>


@endforeach 




</table>






   



@endsection