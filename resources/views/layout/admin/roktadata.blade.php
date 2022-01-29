@extends('layout.admin.default')
@section('title', 'Create the Donar List')
@section('content')



 <div class="panel-body">
 <form class="form-horizontal" action="{{URL::to('/newdonarinsert')}}" method="post" >
                                     {{ csrf_field() }}



<div class="form-group">
    <label for="fullname" class="col-md-4 control-label">Full Name</label>

    <div class="col-md-6">
        <input id="fullname" type="text" class="form-control" name="fullname" required autofocus>                        
    </div>
</div>


<div class="form-group">
    <label for="address" class="col-md-4 control-label">Address</label>
    <div class="col-md-6">
        <input id="address" type="text" class="form-control" name="address" required>
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">Gender</label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="gender">
        <option selected>--Gender--</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
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

@endsection