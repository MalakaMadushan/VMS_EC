@extends('layouts.mainlayout')
@section('title',"Dashboard page")


@php 
        $user = session()->get('users'); 
        @endphp
@section('content')


        <h1> Dashboard Page</h1>

        <div class="row" style="margin-left: 20px;">
        
        <div class="col-md-3 content-center"  >
        <a type="button" id="bt_all_request" name="bt_all_request">
          <div class="card  text-white bg-primary " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">All Requests</h5>
                <h1> 5/16</h1>
             </div>
          </div>
        </a>
        </div>
        <div class="col-md-3 justify-content-center" >
        <a type="button" id="bt_all_pending" name="bt_all_pending">
          <div class="card  text-white bg-info " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">Pending Requests</h5>
                <h1> 5/16</h1>
        </div>
        </div>
        </a>
        </div>

        <div class="col-md-3 justify-content-center"  >
        <a type="button" id="bt_all_approved" name="bt_all_approved">
          <div class="card  text-white bg-success " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">Approved Requests</h5>
                <h1> 5/16</h1>
        </div>
        </div>
        </a>
        </div>

        <div class="col-md-3 justify-content-center" >
        <a type="button" id="bt_all_not_approved" name="bt_all_not_approved">
          <div class="card  text-white bg-danger " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">Rejected Requests</h5>
                <h1> 5/16</h1>
        </div>
        </div>
        </a>
        </div>
        
        </div>
        
          <!-- dashbord table -->
<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
  <div class="card-header" style="text-align-center">
  <strong> රාජකාරි කටයුතු වෙනුවෙන් ලැබුණ වාහන ඉල්ලීම් </strong>  
  </div>
    <form class="tblform">

<!--------------------------------table----------------------------------------->
<table class="table reqtbl " id="mydatatable">
      <thead class="thead-dark">
          <tr>
          
          <th scope="col">Date</th>
          <th scope="col">Name</th>
          <th scope="col">Location</th>
          <th scope="col">Status</th>
          <th scope="col">View</th>
         
          </tr>
      </thead>
      <tbody>


      </tbody>
  </table>

<!----------------------------------------MODEL------------------------------------------------------------->


<!-- Modal -->
<div class="modal fade"  id="viewModal_requestByUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">Responce Of Vehicle Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <!-- <label id="res_id" name="res_id" style="display:none;" class="form-control"></label> -->

      <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
        <label for="txt_driver_name">රියදුරුගේ නම</label>
        <!-- <input type="text" class="form-control" name="txt_aplicant_name" id="txt_aplicant_name"> -->
        <label id="txt_driver_name"class="form-control"></label>
        <!-- <h3 id="idid"></h3> -->
       </div>

       <div class="row" style="padding-right: 20px; padding-left: 20px;">
      <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="dt_driver_mobile">රියදුරුගේ දුරකථන අංකය</label>
        <!-- <input type="date" name="dt_req_date" id="dt_req_date" max="3000-12-31" min="1000-01-01" class="form-control"> -->
        <label id="dt_driver_mobile" class="form-control"></label>
        
      </div>
      </div>

      <!-- <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="tm_req_time">වේලාව</label>
        <input type="time" name="tm_req_time" id="tm_req_time" class="form-control">
        </div>
      </div> -->
      <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="vehi_no">වාහන අංකය</label>
        <!-- <input type="text" class="form-control" name="txt_destination" id="txt_destination"> -->
        <label id="vehi_no"class="form-control"></label>
     </div>
     <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="vehi_type">වාහන වර්ගය</label>
        <!-- <textarea class="form-control" id="txta_duty"  name="txta_duty" rows="3"></textarea> -->
        <label id="vehi_type"class="form-control"></label>
    </div>

    <div class="form-group col-md-6" style="padding-right: 20px; padding-left: 20px;">
            <label for="sheet_no">ආසන ගණන</label>
            <!-- <select class="form-control" id="op_req_duration" name="op_req_duration">
            <option value="" selected disabled hidden>Choose here</option>
            </select> -->
            <label id="sheet_no"class="form-control" ></label>
            </div>
      </div>

      <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="rejected_reason" class="text-danger ">ප්‍රතික්ෂේප වීමට හේතුව</label>
        <!-- <textarea class="form-control" id="txta_duty"  name="txta_duty" rows="3"></textarea> -->
        <label id="rejected_reason"class="form-control text-white bg-danger"></label>
    </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
   </div>
 </div>
</div>






</form>







<!-------------------------------------------------------------------->
@push('scripts')
<script>
        var reqData=[];

        $(document).ready(function(){

         
        $('#mydatatable').DataTable();



         // -------------------------------------------------------
        var op ="";
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type:'get',
        url: '/dashboard_load',
        success: function(data){
        reqData=data;
        for(var i=0;i<data.length;i++){
        op+='<tr>';
        op+='<td>'+data[i].datetime+'</td>'
        op+='<td>'+data[i].name+'</td>'
        op+='<td>'+data[i].location+'</td>'

        if(data[i].status ==='Pending')
        { op+='<td><button type="button" class="btn btn-sm btn-warning" disabled>'+data[i].status+'</button></td>'}

        else if(data[i].status ==='Approved')
        { op+='<td><button type="button" class="btn btn-sm btn-success" disabled>'+data[i].status+'</button></td>'}
        else
        {op+='<td><button type="button" class="btn btn-sm btn-danger" disabled>'+data[i].status+'</button></td>'}
        
        op+='<td><a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_requestByUser" data-responceid="'+data[i].responce_id+'" >View</i></a></td>'
        
        op+='</tr>';

        }
        $("#mdatatable tbody").append(op);
        
        },
        error: function(data){
                alert("error");
        
        }
        });
        // -------------------------------------------------------------

});

$('#viewModal_requestByUser').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) 
  var responce_id = button.data('responceid') 
  
  var modal = $(this)

  $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });
      $.ajax({
      type:'POST',
      url:'/responcedetails_view',
      data: {responce_id:responce_id},

     

      success:function(Datares){
         //alert("okkkk"); 
         //console.log("ok");
        // document.getElementById("idid").innerHTML = Databranch[0].id;
        $('#txt_driver_name').text(Datares[0].name);
        $('#dt_driver_mobile').text(Datares[0].mobile);
        $('#vehi_no').text(Datares[0].reg_no);
        $('#vehi_type').text(Datares[0].vehi_type);
        $('#sheet_no').text(Datares[0].capacity);
        $('#rejected_reason').text(Datares[0].reason);
        
      },
      error:function(Datares){
        //console.log("erorr");
          alert("noo");

      }

      });
});






// filter by pending status--------------------------------------------------------------------------------------------------------

$("#bt_all_pending").click(function(){
  var op="";
$("#mdatatable tbody").empty();

for(var i=0;i<reqData.length;i++)
        { 
                
                if(reqData[i].status=="Pending" )
                {
                        // alert(reqData[i].status);  
                        op+='<tr>';
                        op+='<td>'+reqData[i].datetime+'</td>'
                        op+='<td>'+reqData[i].name+'</td>'
                        op+='<td>'+reqData[i].location+'</td>'

                        op+='<td><button type="button" class="btn btn-sm btn-warning" disabled>'+reqData[i].status+'</button></td>'
                        
                        op+='<td><a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_requestByUser" data-responceid="'+reqData[i].responce_id+'" >View</i></a></td>'
                        
                        op+='</tr>';
                       
                        
                }

               
        }
        $("#mdatatable tbody").append(op);
       

});

//filter by approved status-----------------------------------------------------------------------------------------------------------------

$("#bt_all_approved").click(function(){
  var op="";
$("#mdatatable tbody").empty();

for(var i=0;i<reqData.length;i++)
        { 
                
                if(reqData[i].status=="Approved" )
                {
                        // alert(reqData[i].status);  
                        op+='<tr>';
                        op+='<td>'+reqData[i].datetime+'</td>'
                        op+='<td>'+reqData[i].name+'</td>'
                        op+='<td>'+reqData[i].location+'</td>'

                        op+='<td><button type="button" class="btn btn-sm btn-success" disabled>'+reqData[i].status+'</button></td>'
                        
                        op+='<td><a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_requestByUser" data-responceid="'+reqData[i].responce_id+'" >View</i></a></td>'
                        
                        op+='</tr>';
                       
                        
                }

               
        }
        $("#mdatatable tbody").append(op);
       

});

//filter by Not_approved status-----------------------------------------------------------------------------------------------------------------

$("#bt_all_not_approved").click(function(){
  var op="";
$("#mdatatable tbody").empty();

for(var i=0;i<reqData.length;i++)
        { 
                
                if(reqData[i].status=="Rejected" )
                {
                        // alert(reqData[i].status);  
                        op+='<tr>';
                        op+='<td>'+reqData[i].datetime+'</td>'
                        op+='<td>'+reqData[i].name+'</td>'
                        op+='<td>'+reqData[i].location+'</td>'

                        op+='<td><button type="button" class="btn btn-sm btn-danger" disabled>'+reqData[i].status+'</button></td>'
                        
                        op+='<td><a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_requestByUser" data-responceid="'+reqData[i].responce_id+'" >View</i></a></td>'
                        
                        op+='</tr>';
                       
                        
                }

               
        }
        $("#mdatatable tbody").append(op);
       

});


// All requests by user -----------------------------------------------------------------------------------------------------------------

$("#bt_all_request").click(function(){
  var op="";
$("#mdatatable tbody").empty();

for(var i=0;i<reqData.length;i++)
        { 
                
               
                
        op+='<tr>';
        op+='<td>'+reqData[i].datetime+'</td>'
        op+='<td>'+reqData[i].name+'</td>'
        op+='<td>'+reqData[i].location+'</td>'

        if(reqData[i].status ==='Pending')
        { op+='<td><button type="button" class="btn btn-sm btn-warning" disabled>'+reqData[i].status+'</button></td>'}

        else if(reqData[i].status ==='Approved')
        { op+='<td><button type="button" class="btn btn-sm btn-success" disabled>'+reqData[i].status+'</button></td>'}
        else
        {op+='<td><button type="button" class="btn btn-sm btn-danger" disabled>'+reqData[i].status+'</button></td>'}
        
        op+='<td><a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_requestByUser" data-responceid="'+reqData[i].responce_id+'" >View</i></a></td>'
        
        op+='</tr>';

                       
                        
                

               
        }
        $("#mdatatable tbody").append(op);
       

});


</script>
@endpush


</div>
</div>

@endsection

