@extends('layouts.mainlayout')
@section('title',"vehicle page")

@section('content')
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
        <div class="card-header" style="text-align-center">
        <strong><span class="fa fa-car fa-fw mr-3"></span> Add Vehicles </strong>
        </div>
  <div>
    <form  id="vehi_form" name="vehi_form" onSubmit="return false;">
    {{csrf_field()}}
    <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
     <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_vehi_type">Vehicle Type</label>
            <select class="form-control" id="op_vehi_type" name="op_vehi_type">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">Car</option>
            <option value="2">Van</option>
            <option value="3">Jeep</option>
            <option value="4">Cab</option>
            <option value="5">Crew Cab</option>
            <option value="6">Three-wheel</option>
            </select>
     </div>

     
      <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="vehi_reg_no">Vehicle Register Number </label>
         <input type="text" class="form-control" name="vehi_reg_no" id="vehi_reg_no" placeholder="Enter Your Vehicle Register No">
     </div>


     <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="vehi_chassis_no">Vehicle Chassis Number </label>
         <input type="text" class="form-control" name="vehi_chassis_no" id="vehi_chassis_no" placeholder="Enter Your Vehicle Chassis No">
       </div>
     </div>

     <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
     
     <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="vehi_model">Vehicle Make/Model </label>
         <input type="text" class="form-control" name="vehi_model" id="vehi_model" placeholder="Toyota">
       </div>

       <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="vehi_name">Vehicle Name </label>
         <input type="text" class="form-control" name="vehi_name" id="vehi_name" placeholder="HiLux">
       </div>

       <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="manufac_year">Manufacture Year</label>
         <input type="text" class="form-control" name="manufac_year" id="manufac_year" placeholder="2019">
       </div>
     
     </div>


     <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
     
     <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
         <label for="vehi_color">Vehicle Colour </label>
         <input type="text" class="form-control" name="vehi_color" id="vehi_color" placeholder="Enter Your Vehicle  Color">
       </div>

       <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_capacity">Passenger Capacity</label>
            <select class="form-control" id="op_capacity" name="op_capacity">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">2 seat</option>
            <option value="2">3 seat</option>
            <option value="1">4 seat</option>
            <option value="2">5 seat</option>
            <option value="1">10 seat</option>
            <option value="2">12 seat</option>
            <option value="1">15 seat</option>
            </select>
        </div>

     </div>

     <div class="row" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
     
     <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_fuel_type">Fuel Type</label>
            <select class="form-control" id="op_fuel_type" name="op_fuel_type">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">Petrol</option>
            <option value="2">Diesel</option>
            </select>
        </div>
        
        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_condition">Conditions</label>
            <select class="form-control" id="op_condition" name="op_condition">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">A/C</option>
            <option value="2">Non A/C</option>
            </select>
        </div>
     </div>

     <div class="form-group col-md-4 " style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_agency">Agency</label>
            <select class="form-control" id="op_agency" name="op_agency">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">Election Commission</option>
            <option value="2">Other</option>
            
            </select>
        </div>

        <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
         <button type="submit" value="Submit" class="btn btn-primary" id="btn_add_vehi" name="btn_add_vehi"><span class="fa fa-save fa-fw mr-2"></span>Save </button>
        </div>
       
    </form>
</div>
</div>
</div>


@push('scripts')
<script>

$("#btn_add_vehi").click(function(){
    // console.log("ok");
    // alert("btn ok");

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type:'POST',
        url:'/addvehicles',
        data: $('#vehi_form').serialize(),


        success:function(response){
           alert("Vehicle Added Successfully"); 
            
        },
        error:function(response){
            alert("Please Try again Later");

        }
    });

});
</script>


@endpush




@endsection

