@extends('layout.admin.default')
@section('title', 'Donar Request')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fullname</th>
      <th scope="col">Gender</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Phone</th>
      <th scope="col">Distrcit</th>
      <th scope="col">Thana</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
   <tbody>

<!--   {{$donarrequest}} -->
   

 @foreach($donarrequest as $applyname)

    <tr>
      <th scope="row">1</th> 
      <td>{{$applyname['fullname']}}</td>
      <td>{{$applyname['address']}}</td>
      <td>{{$applyname['gender']}}</td>
      <td>{{$applyname['bgroup']}}</td>
      <td>{{$applyname['phonenumber']}}</td>
      <td>{{$applyname['altePhone']}}</td>
      <td>{{$applyname['district']}}</td>
      <td>{{$applyname['thanaid']}}</td>
      <td>{{$applyname['status']}}</td>
    </tr> 

   @endforeach


   </tbody> 
</table>

@endsection
