@extends('layouts.mainlayout')
@section('title',"RecievedRequest page")

@section('content')
        
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
  <div class="card-header" style="text-align-center">
  
  <strong> රාජකාරි ගමන් යාම සඳහා වාහනයක් ඉල්ලුම් කිරීම</strong>
      
  </div>
  <div>
    <form>
        <!-- drop down -->
        <div class="row">
        <div class="input-group mb-4" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;" >
                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected>Choose Status...</option>
                <option value="1">Pending</option>
                <option value="2">Approve</option>
                <option value="3">Reject</option>
                </select>
                <!-- <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Button</button>
                </div> -->
        </div>
        </div>


         <!-- drop down end -->
    <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
    <button type="submit" class="btn btn-primary">Request Vehicle</button>
    </div>

    
<!--  -->
<table class="table " id="mdatatable">
      <thead class="thead-dark">
          <tr>
          <th scope="col">ID</th>
          <th scope="col">Date</th>
          <th scope="col">User</th>
          <th scope="col">Branch</th>
          <th scope="col">Location</th>
          <th scope="col">View</th>
         
          </tr>
      </thead>
      <tbody>
      @foreach($Data as $data)
          <tr>
          
              <td>{{$data->id}}</td>
              <td>{{$data->datetime}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->branch}}</td>
              <td>{{$data->location}}</td>
              
              <td>
                <a href=""  type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#viewModal">View</i></a>&nbsp;
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>

<!-- Modal -->
<div class="modal fade"  id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">Vehicle Request Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
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
      </div>
      <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="txt_destination">ගමන් කරන ස්ථානය </label>
        <input type="text" class="form-control" name="txt_destination" id="txt_destination">
     </div>
     <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="txta_duty">ඉටු කිරීමට ඇති රාජකාරියේ ස්භාවය</label>
        <textarea class="form-control" id="txta_duty"  name="txta_duty" rows="3"></textarea>
    </div>

    <div class="form-group col-md-6" style="padding-right: 20px; padding-left: 20px;">
            <label for="op_req_duration">අවශ්‍ය කාල පරාසය</label>
            <select class="form-control" id="op_req_duration" name="op_req_duration">
            <option value="" selected disabled hidden>Choose here</option>
            </select>
            </div>
      </div>

<!-- approve button -->
  <div class="card">
    <div class="card-header" style="text-align-center">
      <button class="btn btn-success block" type="button" data-toggle="collapse" data-target="#collapsebtn1" aria-expanded="false" aria-controls="collapseExample">
        Approve
      </button>
    </div>
   
    <div class="collapse" id="collapsebtn1">
      <div class="card card-body">
        <label for="txt_destination">Driver name </label>
        <input type="text" class="form-control" name="txt_destination" id="txt_destination">

        <label for="txt_destination">Vehicle Number </label>
        <input type="text" class="form-control" name="txt_destination" id="txt_destination">
        <div style="padding-top: 20px; padding-left: 7px;">
         <button class="btn btn-primary" type="button">Save </button>
        </div>
      </div>
    </div>
    </div>
<!-- end  approve button -->

    <!-- not approve button  -->
    <div class="card">
      <div class="card-header" style="text-align-center">
        <button class="btn btn-danger block" type="button" data-toggle="collapse" data-target="#collapsebtn2" aria-expanded="false" aria-controls="collapseExample">
          Not Approve
        </button>
      </div>
    
      <div class="collapse" id="collapsebtn2">
        <div class="card card-body">
          <label for="txt_destination">Reason </label>
          <textarea class="form-control" id="txta_duty"  name="txta_duty" rows="2"></textarea>
          <div style="padding-top: 20px; padding-left: 7px;">
           <button class="btn btn-primary " type="button">Save </button>
          </div>
        </div>
       
    </div>
  </div>
<!-- end not approve button -->

      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
   </div>
 </div>
</div>

</form>

    @push('scripts')
      <script>

$( document ).ready(function() {
    
    var op=" ";
   
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type:'POST',
        url:'{!!URL::to('view_request')!!}',
        // data: $('#CheckVoterForm').serialize(),
        success:function(data){
          alert("ok");
            for(var i=0;i<data.length;i++){
                
                op+='<tr>';
                    op+='<th>{{trans('Year')}}</th><td>'+data[i].aDisID+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('SLIN')}}</th><td>'+data[i].districtNameSI+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('NIC')}}</th><td>'+data[i].districtNameEN+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('Full Name')}}</th><td>'+data[i].districtNameEN+'</td>';
                    op+='</tr>';
                    op+='<tr>';
                    op+='<th>{{trans('Gender')}}</th><td>'+data[i].districtNameEN+'</td>';
                    op+='</tr>';
                   

                   
            
            }
            $("#reqtable tbody").append(op);
                

        },
        error:function(){
        //   alert("no");

        }

      });
      
    });
      </script>

      @endpush
    </div>
</div>   
</div>   



@endsection

