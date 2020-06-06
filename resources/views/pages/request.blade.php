

@extends('layouts.mainlayout')
@section('title',"Request page")

@section('content')

<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
  <div class="card-header" style="text-align-center">
  
  <strong> රාජකාරි ගමන් යාම සඳහා වාහනයක් ඉල්ලුම් කිරීම</strong>
      
  </div>
  <div>
    <form>
    <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
        <label for="txt_aplicant_name">අයදුම්කරුගේ නම</label>
        <input type="text" class="form-control" name="txt_aplicant_name" id="txt_aplicant_name">
        
    </div>
    <div class="row" style="padding-right: 20px; padding-left: 20px;">
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="dt_req_date">වාහනය අවශ්‍ය දිනය</label>
        <input type="date" name="dt_req_date" id="dt_req_date" max="3000-12-31" min="1000-01-01" class="form-control">
        
    </div>

    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="tm_req_time">වේලාව</label>
        <input type="time" name="tm_req_time" id="tm_req_time" class="form-control">
        </div>

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px;">
            <label for="op_req_duration">අවශ්‍ය කාල පරාසය</label>
            <select class="form-control" id="op_req_duration" name="op_req_duration">
            <option value="" selected disabled hidden>Choose here</option>
            <option>පැය 1</option>
            <option>පැය 2</option>
            <option>පැය 3</option>
            <option>දින 1</option>
            <option>දින 2</option>
            <option>දින 3</option>
            </select>
            </div>

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px;">
            <label for="op_req_branch">ශාඛාව</label>
            <select class="form-control" id="op_req_branch" name="op_req_branch">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="1">ආයතන</option>
            <option value="2">ගිණුම්</option>
            <option value="3">පාර්ලිමේන්තු</option>
            <option value="1">පළාත් පාළන</option>
            <option value="1">ලේඛම්</option>
            <option value="1">තොරතුරු තාක්ෂණ</option>
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
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="dt_apply_date"> දිනය</label>
        <input type="date" name="dt_apply_date" id="dt_apply_date" max="3000-12-31" min="1000-01-01" class="form-control">
        
    </div>

    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="tm_apply_time">වේලාව</label>
        <input type="time" name="tm_apply_time" id="tm_apply_time" class="form-control">
        </div>
    
    </div>
    <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
    <button type="submit" class="btn btn-primary" id="btn_req_submit" name="btn_req_submit">Request Vehicle</button>
    </div>
    </form>
    </div>
</div>   
</div>   
@endsection