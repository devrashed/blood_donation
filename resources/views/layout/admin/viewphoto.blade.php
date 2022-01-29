@extends('layout.admin.default')
@section('title', 'View ALL PhotoGallery')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">View All Founder Member Information</div>
</div>

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Caption </th>
      <th scope="col">Pic</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

      @foreach($photos as $photo)
    <tr>
      <th scope="row"></th>
      <td>{{$photo['photocaption']}}</td>
      <td>{{$photo['eventpic']}}</td>
      <td></td>
      <td></td>
    </tr>
     @endforeach
    </tbody>

</table>



@endsection