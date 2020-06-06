@extends('layouts.mainlayout')
@section('title',"driver page")

@section('content')
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
   <div class="card">
        <div class="card-header" style="text-align-center">
        <strong><span class="fa fa-user fa-fw mr-3"></span>  Add Driver </strong>
        </div>
   <div>
    <form>
       <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="txt_drivername">Driver Full Name</label>
         <input type="text" class="form-control" name="txt_drivername" id="txt_drivername" placeholder="Enter Driver Name">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="txt_address1">Address 1</label>
         <input type="text" class="form-control" name="txt_address1" id="txt_address1" placeholder="Enter Yor Address 1">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 5px;">
         <label for="txt_address2">Address 2</label>
         <input type="text" class="form-control" name="txt_address2" id="txt_address2" placeholder="Enter Your Address 2">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="driver_mobile">Mobile Number</label>
         <input type="text" class="form-control" name="driver_mobile" id="driver_mobile" placeholder="Enter Your Mobile Number">
        </div>

        <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="driver_nic">NIC Number</label>
         <input type="text" class="form-control" name="driver_nic" id="driver_nic" placeholder="Enter Your NIC Number">
        </div>

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_agency">Agency</label>
            <select class="form-control" id="op_agency" name="op_agency">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">Election Commission</option>
            <option value="2">Other</option>
            
            </select>
        </div>
        </div>

        <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="driver_license_no">Driving License Number & Catagory </label>
         <input type="text" class="form-control" name="driver_license_no" id="driver_license_no" placeholder="Enter Your Driving Licence Number">
        </div>

        
        <div class="form-check form-check-inline" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
         <label class="form-check-label" for="inlineRadio1">Light Vehicle</label>
        </div>

        <div class="form-check form-check-inline" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Heavy Vehicle</label>
       
        </div>
        </div>

       
        
        <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
         <button type="submit" class="btn btn-primary" id="btn_req_submit" name="btn_req_submit"><span class="fa fa-save fa-fw mr-2"></span>Save </button>
        </div>

    </form>
</div>
</div>
</div>
@endsection

