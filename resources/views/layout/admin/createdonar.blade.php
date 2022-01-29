@extends('layout.admin.default')
@section('title', 'Create the Donar List')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Donar Information</div>
    
    @if(session()->get('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}  
    </div><br />
    @endif

 <div class="panel-body">
 
   <form  action="{{URL::to('/newdonarinsert')}}" method="post">
                          {{csrf_field()}}
                                
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
    <label for="email" class="col-md-4 control-label">Blood Group</label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="blgroup">
        <option selected>--Blood Group--</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
    </select>
    </div>
</div>


<div class="form-group">
    <label for="password" class="col-md-4 control-label">Phone Number</label>
 <div class="col-md-6">
    <input id="text" type="text" class="form-control" name="phonenumber" required>
  </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-md-4 control-label">Alternate Phone Number</label>
    <div class="col-md-6">
        <input id="phonenumber" type="text" class="form-control" name="alternetphone" required>
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">Select District Name   </label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="district" name="district">
        <option selected>Select District Name</option>
          @foreach($dis as $dis)   
          <option value="{{$dis['id']}}"> {{$dis['districName']}}</option>           

          @endforeach
      
    </select>
    </div>
</div>

<div class="form-group">
    <label for="thana" class="col-md-4 control-label">Select Thana Name</label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="thana" name="thana">
        <option selected>Select Thana Name</option>
 
      </select>
    </div>
</div>

<div class="form-group">
 <div class="col-md-6">       
       <input id="address" type="hidden" class="form-control" name="status" value="1" required>
    </div>
</div>


<div class="form-group">
    <label for="thana" class="col-md-4 control-label">Last Date of Donet Blood</label>     
    <div class="col-md-6">       
        <input id="phonenumber" type="Date" class="form-control" name="lastdate" required>
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

 <script type="text/javascript">
     
     $('#district').on('change',function(e){

       var district_id = e.target.value;  

       var url =  '<?php echo URL::to('ajax-subcat'); ?>/';

       $.get(url + district_id, function(data){
            
             console.log(data);

    $('#thana').empty(); 
    $.each(data, function(createdoner, subcatObj){       
               $('#thana').append('<option value="'+subcatObj.tid+'">'+subcatObj.thana+'</option>');

            } );           

    $('#thana');
         })
     });

 </script>






@endsection
