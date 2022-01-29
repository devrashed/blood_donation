@extends('layout.admin.default')
@section('title', 'Insert The Photo Gallery')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Photo</div>
   
        @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div><br />
        @endif
    
 
      <div class="panel-body">
 <form class="form-horizontal"  action="{{URL::to('/insertphoto')}}" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                
<div class="form-group">
    <label for="fullname" class="col-md-4 control-label">Photo Caption</label>
    <div class="col-md-6">
     <input id="fullname" type="text" class="form-control" name="photocaption" required autofocus>    
    </div>
</div>


<div class="form-group">
    <label for="picture" class="col-md-4 control-label">Event Pic</label>
    <div class="col-md-6">
        <input type="file" class="form-control" name="image">
    </div>
</div>

            <div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Submit
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