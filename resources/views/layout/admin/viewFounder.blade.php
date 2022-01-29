@extends('layout.admin.default')
@section('title', 'View All Founder Member')

@section('content')

 <div class="panel panel-default">
  <div class="panel-heading">View All Founder Member Information</div>
</div>

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name </th>
      <th scope="col">Designation</th>
      <th scope="col">Pic</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

      @foreach($fumember as $member)
    <tr>
      <th scope="row"></th>
      <td>{{$member['faname']}}</td>
      <td>{{$member['designation']}}</td>
      <td><img src='././public/upload/{{$member['fpicture']}}' width="140" height="100"></td>
      <td><a href="./editf/{{$member['id']}}"> Edit </a> / <a href="./delete/{{$member['id']}}">Delete</a> </td>
    </tr>
     @endforeach
    </tbody>

</table>



@endsection