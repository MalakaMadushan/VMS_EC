@extends('layouts.mainlayout')
@section('title',"agency page")

@section('content')
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
        <div class="card-header" style="text-align-center">
        <strong> <span class="fa fa-home fa-fw mr-3"></span>  Add Agencies </strong>
        </div>
  <div>
    <!-- <form id="agency_add_form" name="agency_add_form" action="{!! url('/add_agency') !!}" method="POST" enctype="multipart/form-data" > -->
    <form id="agency_add_form" name="agency_add_form" onSubmit="return false;">
    {{csrf_field()}}

    <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px; padding-top: 10px;">
            <label for="op_vehi_type">Agency Catagory</label>
            <select class="form-control" id="op_vehi_type" name="op_vehi_type">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="Ministry">Ministry</option>
            <option value="Department">Department</option>
            <option value="Commission">Commission</option>
            <option value="Bureau">bureau</option>
            <option value="Authority">Authority</option>
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
         <input type="email" class="form-control" id="agencyEmail" name="agencyEmail" placeholder="name@example.com">
        </div>

        <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
         <button type="submit" class="btn btn-primary" value="Submit" id="btn_agency_submit" name="btn_agency_submit"><span class="fa fa-save fa-fw mr-2"></span>Save </button>
        </div>

    </form>
</div>
</div>
</div>

<!-----------------------------pass data to end point using ajax------------------>
@push('scripts')
<script>

$("#btn_agency_submit").click(function(){
    // console.log("ok");
    //alert("btn ok");

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type:'POST',
        url:'/add_agency',
        data: $('#agency_add_form').serialize(),


        success:function(response){
           alert("Agency Added Successfully");
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

