@extends('layouts.mainlayout')
@section('title',"users page")

@section('content')
        
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
        <div class="card-header" style="text-align-center">
        <strong> <span class="fa fa-plus fa-fw mr-3"></span>  Add User</strong> 
        </div>
  <div>
  <form id="users_add_form" name="users_add_form" onSubmit="return false;">
    {{csrf_field()}}
        
        <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="txt_username">Username</label>
         <input type="text" class="form-control" name="txt_username" id="txt_username">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="user_password">Password</label>
         <input type="password" class="form-control" id="user_password" name="user_password">
        </div>

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_user_role">User Role</label>
            <select class="form-control" id="op_user_role" name="op_user_role">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">Administrator</option>
            <option value="2">Chief Clark</option>
            <option value="3">User</option>
            </select>
        </div>

        </div>
        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="txt_fullname">Full Name</label>
         <input type="text" class="form-control" name="txt_fullname" id="txt_fullname"placeholder="Enter Your Full Name">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="InputEmail">Email address</label>
         <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="name@example.com">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="user_mobile">Mobile Number</label>
         <input type="text" class="form-control" name="user_mobile" id="user_mobile" placeholder="Enter Your Mobile Number">
        </div>

        <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="user_nic">NIC Number</label>
         <input type="text" class="form-control" name="user_nic" id="user_nic" placeholder="Enter Your NIC Number">
        </div>

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="user_regid">Register ID</label>
         <input type="text" class="form-control" name="user_regid" id="user_regid" placeholder="Enter Your Register ID">
        </div>
        </div>
        <div class="form-group col-md-6" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_user_branch">Branch Name</label>
            <select class="form-control" id="op_user_branch" name="op_user_branch">
            <option value="" selected disabled hidden>Choose here</option>
            @foreach($Data as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach
            <!-- <option value="1">Establishment branch</option>
            <option value="2">ICT branch</option>
            <option value="3">Account branch</option>
            <option value="1">Parliment branchr</option>
            <option value="2">procument branch</option>
            <option value="3">Transport branch</option> -->
            </select>
        </div>
        <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
         <button type="submit" class="btn btn-primary" value="Submit" id="btn_req_submit" name="btn_req_submit"><span class="fa fa-save fa-fw mr-2"></span>Save </button>
        </div>
    </form>
</div>
</div>
</div>


<!-----------------------------pass data to end point using ajax------------------>
@push('scripts')
<script>

$("#btn_req_submit").click(function(){
    // console.log("ok");
    //alert("btn ok");

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type:'POST',
        url:'/add_user',
        data: $('#users_add_form').serialize(),


        success:function(response){
           alert("User Added Successfully");
           location.reload(); 
            
        },
        error:function(response){
            alert("Please Try again Later");
            location.reload();

        }
    });

});
</script>


@endpush















@endsection

