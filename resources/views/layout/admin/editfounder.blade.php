@extends('layout.admin.default')
@section('title', 'Update Founder Member Information')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Founder Member Information</div>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
    
     <div class="panel-body"> 
     
<form class="form-horizontal" action="{{url('update', [$data->id])}}" method="post">

                                {{ csrf_field() }}
                 
<div class="form-group">
    <label for="fullname" class="col-md-4 control-label">Full Name</label>
    <div class="col-md-6">
        <input id="fullname" type="text" class="form-control" name="fullname" 
        value="{{$data['faname']}}">    
    </div>
</div>

<div class="form-group">
    <label for="address" class="col-md-4 control-label">Designation</label>
    <div class="col-md-6">
        <input id="address" type="text" class="form-control" name="designation" 
    value="{{$data['designation']}}">
    </div>
</div>

<div class="form-group">
    <label for="picture" class="col-md-4 control-label">Picture</label>
    <div class="col-md-6">
<input type="file" class="form-control" name="image"> <img src="{{URL::to('/')}}/public/upload/{{$data['fpicture']}}" width="100" height="100"> 

    </div>
</div>


            <div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection