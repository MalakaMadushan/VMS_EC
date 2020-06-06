@extends('layouts.mainlayout')
@section('title',"agency page")

@section('content')
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
        <div class="card-header" style="text-align-center">
        <strong> <span class="fa fa-home fa-fw mr-3"></span>  Add Agencies </strong>
        </div>
  <div>
    <form>

    <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_vehi_type">Agency Catagory</label>
            <select class="form-control" id="op_vehi_type" name="op_vehi_type">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">Ministry</option>
            <option value="2">Department</option>
            <option value="3">Commission</option>
            <option value="1">bureau</option>
            <option value="2">Authority</option>
            </select>
     </div>

     <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="txt_agencyname">Agency Name</label>
         <input type="text" class="form-control" name="txt_agencyname" id="txt_agencyname" placeholder="Enter Agency Name">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="txt_agency_address1">Address 1</label>
         <input type="text" class="form-control" name="txt_agency_address1" id="txt_agency_address1" placeholder="Enter Agency Address 1">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 5px;">
         <label for="txt_agency_address2">Address 2</label>
         <input type="text" class="form-control" name="txt_agency_address2" id="txt_agency_address2" placeholder="Enter Agency Address 2">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="agency_phone_no">Telephone Number</label>
         <input type="text" class="form-control" name="agency_phone_no" id="agency_phone_no" placeholder="Enter Agency Telephone Number">
        </div>

        <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="agencyEmail">Email address</label>
         <input type="email" class="form-control" id="agencyEmail" placeholder="name@example.com">
        </div>

        <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
         <button type="submit" class="btn btn-primary" id="btn_req_submit" name="btn_req_submit"><span class="fa fa-save fa-fw mr-2"></span>Save </button>
        </div>

    </form>
</div>
</div>
</div>
@endsection

