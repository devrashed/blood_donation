@extends('layout.admin.default'
)@section('title', 'New User Create')
@section('content')

<!-- <h1> ssssssssssssssss</h1> -->




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">New User Create</div>

@if(session()->get('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}  
</div><br />
@endif


                <div class="panel-body">
<form class="form-horizontal" action="{{URL::to('/usercreate')}}"  method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
<div class="form-group">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" required autofocus>                             
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" required>

    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">User Type</label>
     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="usertype">
        <option selected>Choose...</option>
        <option value="admin">Admin</option>
        <option value="contribute">Contribute</option>
     </select>


    </div>

</div>

 <div class="form-group">
        <label for="password" class="col-md-4 control-label">Password</label>

       <div class="col-md-6">
       <input id="password" type="password" class="form-control" name="password" required>

                </div>
            </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="copassword" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
