

@extends('layouts.mainlayout')
@section('title',"Request page")

@section('content')

<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
  <div class="card-header" style="text-align-center">
  
  <strong> රාජකාරි ගමන් යාම සඳහා වාහනයක් ඉල්ලුම් කිරීම</strong>
      
  </div>
  <div>
  <form id="request_form" name="request_form" onSubmit="return false;" >
    {{csrf_field()}}
    <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
        <label for="txt_aplicant_name">අයදුම්කරුගේ නම</label>
        <input type="text" class="form-control" name="txt_aplicant_name" id="txt_aplicant_name" required>
        
    </div>
    <div class="row" style="padding-right: 20px; padding-left: 20px;">
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="dt_req_date">වාහනය අවශ්‍ය දිනය හා වේලාව</label>
        <input type="datetime-local" name="dt_req_date" id="dt_req_date" max="3000-12-31" min="1000-01-01" class="form-control">
        
    </div>

    <!-- <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="tm_req_time">වේලාව</label>
        <input type="time" name="tm_req_time" id="tm_req_time" class="form-control">
        </div> -->

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px;">
            <label for="op_req_duration">අවශ්‍ය කාල පරාසය</label>
            <input type="text" name="op_req_duration" id="op_req_duration" class="form-control">
            <!-- <select class="form-control" id="op_req_duration" name="op_req_duration">
            <option value="" selected disabled hidden>Choose here</option>
            <option>පැය 1</option>
            <option>පැය 2</option>
            <option>පැය 3</option>
            <option>දින 1</option>
            <option>දින 2</option>
            <option>දින 3</option>
            </select> -->
            </div>

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px;">
            <label for="op_req_branch">ශාඛාව</label>
            <select class="form-control" id="op_req_branch" name="op_req_branch">
            <option value="" selected disabled hidden>Choose here</option>
            @foreach($Data as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach
            </select>
            </div>
    
    </div>
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="txt_destination">ගමන් කරන ස්ථානය </label>
        <input type="text" class="form-control" name="txt_destination" id="txt_destination">
        
    </div>
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="txta_duty">ඉටු කිරීමට ඇති රාජකාරියේ ස්භාවය</label>
        <textarea class="form-control" id="txta_duty"  name="txta_duty" rows="3"></textarea>
        
    </div>
    
    <div class="row" style="padding-right: 20px; padding-left: 20px;">
    <!-- <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="dt_apply_date"> දිනය</label>
        <input type="date" name="dt_apply_date" id="dt_apply_date" max="3000-12-31" min="1000-01-01" class="form-control">
        
    </div> -->

    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
    <label for="dt_apply_date">අයදුම් කරන දිනය හා වේලාව</label>
        <input type="datetime-local" name="dt_apply_date" id="dt_apply_date" value="" max="3000-12-31" min="1000-01-01" class="form-control">
        </div>
    
    </div>
    <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
    <button type="submit" class="btn btn-primary" id="btn_req_submit" name="btn_req_submit">Request Vehicle</button>
    </div>
    </form>
    </div>
</div>   
</div>   

<!------------------------------------------ADD request form data to database using ajax--------------------------------->

@push('scripts')
<script>
    
    let today = new Date();
    //document.querySelector("#dt_apply_date").value = today;
   // document.querySelector("#dt_apply_date").valueAsDate = new Date();

    //btn request-------------------------------------------------

    $("#btn_req_submit").click(function () {
       // alert("okkkk");
       $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type:'POST',
        url:'/submit_request',
        data: $('#request_form').serialize(),

       

        success:function(response){
           alert("1 record added"); 
            
        },
        error:function(response){
            alert("error");

        }

        });
        
    });

</script>


@endpush

@endsection