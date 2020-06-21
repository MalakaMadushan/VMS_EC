@extends('layouts.mainlayout')
@section('title',"RecievedRequest page")

@section('content')

        
<div class="container-fluid">
<div class="card" >
  <div class="card-header" style="text-align-center">
    <strong> රාජකාරි ගමන් යාම සඳහා වාහනයක් ඉල්ලුම් කිරීම</strong>
  </div>
  <div>
    <form class="tblform">
        <table class="table reqtbl" id="mdatatable">
      <thead class="thead-dark">
          <tr>
          <th scope="col">ID</th>
          <th scope="col">Date</th>
          <th scope="col">User</th>
          <th scope="col">Branch</th>
          <th scope="col">Location</th>
          <th scope="col">Status</th>
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
                
              @if (($data->status) ==='Pending')
                      <button type="button" class="btn btn-sm btn-warning" disabled>{{$data->status}}&nbsp;&nbsp;&nbsp;</button>
              @elseif (($data->status) ==='Approved')
                      <button type="button" class="btn btn-sm btn-success" disabled>{{$data->status}}</button>
              @else
                      <button type="button" class="btn btn-sm btn-danger" disabled>{{$data->status}}&nbsp;&nbsp;&nbsp;</button>
              @endif
                
              
              </td>
              <td>
              <a href=""  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_request" data-requestid="{{$data->id}}" >View</i></a>&nbsp;
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
  

<!-- Modal -->
<div class="modal fade"  id="viewModal_request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">Vehicle Request Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <label id="req_id" name="req_id" style="display:none;" class="form-control"></label>

      <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
        <label for="txt_aplicant_name">අයදුම්කරුගේ නම</label>
        <!-- <input type="text" class="form-control" name="txt_aplicant_name" id="txt_aplicant_name"> -->
        <label id="txt_aplicant_name"class="form-control"></label>
        <!-- <h3 id="idid"></h3> -->
       </div>

       <div class="row" style="padding-right: 20px; padding-left: 20px;">
      <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="dt_req_date">වාහනය අවශ්‍ය දිනය</label>
        <!-- <input type="date" name="dt_req_date" id="dt_req_date" max="3000-12-31" min="1000-01-01" class="form-control"> -->
        <label id="dt_req_date" class="form-control"></label>
        
      </div>
      </div>

      <!-- <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="tm_req_time">වේලාව</label>
        <input type="time" name="tm_req_time" id="tm_req_time" class="form-control">
        </div>
      </div> -->
      <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="txt_destination">ගමන් කරන ස්ථානය </label>
        <!-- <input type="text" class="form-control" name="txt_destination" id="txt_destination"> -->
        <label id="txt_destination"class="form-control"></label>
     </div>
     <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="txta_duty">ඉටු කිරීමට ඇති රාජකාරියේ ස්භාවය</label>
        <!-- <textarea class="form-control" id="txta_duty"  name="txta_duty" rows="3"></textarea> -->
        <label id="txta_duty"class="form-control"></label>
    </div>

    <div class="form-group col-md-6" style="padding-right: 20px; padding-left: 20px;">
            <label for="op_req_duration">අවශ්‍ය කාල පරාසය</label>
            <!-- <select class="form-control" id="op_req_duration" name="op_req_duration">
            <option value="" selected disabled hidden>Choose here</option>
            </select> -->
            <label id="op_req_duration"class="form-control" ></label>
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
        <label for="txt_driver">Driver name </label>
        <input type="text" class="form-control" name="txt_driver" id="txt_driver">
        <!-- <label id="txt_driver"class="form-control" ></label> -->

        <label for="txt_destination">Vehicle Number </label>
        <input type="text" class="form-control" name="txt_vehicle" id="txt_vehicle">
        <div style="padding-top: 20px; padding-left: 7px;">
         <button class="btn btn-success" type="button" id="btn_approve_save">Save </button>
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
          <label for="txta_reason">Reason </label>
          <textarea class="form-control" id="txta_reason"  name="txta_reason" rows="2"></textarea>
          <div style="padding-top: 20px; padding-left: 7px;">
           <button class="btn btn-danger " type="button" id="btn_not_approve_save">Save </button>
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

<!---------load data to request_details_model------------------------------------------>
@push('scripts')
    <script>
  $('#viewModal_request').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget) 
    var m_id = button.data('requestid') 
    $('#req_id').text(m_id);
    var modal = $(this)

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type:'POST',
        url:'/requestdetails_view',
        data: {m_id:m_id},

       

        success:function(Databranch){
           //alert("okkkk"); 
           //console.log("ok");
          // document.getElementById("idid").innerHTML = Databranch[0].id;
          $('#txt_aplicant_name').text(Databranch[0].name);
          $('#dt_req_date').text(Databranch[0].need_datetime);
          $('#txt_destination').text(Databranch[0].location);
          $('#txta_duty').text(Databranch[0].duty);
          $('#op_req_duration').text(Databranch[0].duration);
          //$('#txt_driver').text(Datadriversname[0].name);
          
          
        },
        error:function(Databranch){
          //console.log("erorr");
            alert("noo");

        }

        });
})
//-----------------in the request view model approved process (approve button click event)------------------------------------
$("#btn_approve_save").click(function(){
    // console.log("ok");
    //alert("btn ok");
  var driver=$('#txt_driver').val();
  var vehicle=$('#txt_vehicle').val();
  var m_id=$('#req_id').text();


    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        //alert(m_id);
        $.ajax({
        type:'PUT',
        url:'/update_responce',
        //data: $('#agency_add_form').serialize(),
        data: {m_id:m_id,driver:driver,vehicle:vehicle},

        success:function(response){
           alert("responce updated Successfully"); 
           location.reload();
            
        },
        error:function(response){
            alert("Please Try again Later");
            location.reload();

        }
    });

});



//-----------------in the request view model NOT approved process (not approve button click event)------------------------------------
$("#btn_not_approve_save").click(function(){
    // console.log("ok");
    //alert("btn ok");
  var reason=$('#txta_reason').val();
  var m_id=$('#req_id').text();


    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        //alert(m_id);
        $.ajax({
        type:'PUT',
        url:'/update_responce_as_notapproved',
        //data: $('#agency_add_form').serialize(),
        data: {m_id:m_id,reason:reason},

        success:function(response){
           alert("responce updated Successfully"); 
           location.reload();
            
        },
        error:function(response){
            alert("Please Try again Later");
            location.reload();
        }
    });

});

$(document).ready(function(){
  $('#mdatatable').DataTable();
})
</script>
      @endpush

      
    </div>
</div>   
</div>   



@endsection

