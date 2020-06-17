@extends('layouts.mainlayout')
@section('title',"Dashboard page")


                @php 
                  $user = session()->get('users'); 
                  @endphp
@section('content')


        <h1> Dashboard Page</h1>

        <div class="row" style="margin-left: 20px;">
        <div class="col-md-3 content-center"  >
          <div class="card  text-white bg-primary " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">All Requests</h5>
                <h1> 5/16</h1>
        </div>
        </div>
        </div>
        <div class="col-md-3 justify-content-center" >
          <div class="card  text-white bg-info " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">Pending Requests</h5>
                <h1> 5/16</h1>
        </div>
        </div>
        </div>

        <div class="col-md-3 justify-content-center"  >
          <div class="card  text-white bg-success " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">Approved Requests</h5>
                <h1> 5/16</h1>
        </div>
        </div>
        </div>

        <div class="col-md-3 justify-content-center" >
          <div class="card  text-white bg-danger " style="width: 14rem;">
             <div class="card-body">
                <h5 class="card-title">Rejected Requests</h5>
                <h1> 5/16</h1>
        </div>
        </div>
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
      @foreach($Data as $data)
      @if(($data->user_id)===($user[0]->id))
        <tr> 
              <td>{{$data->datetime}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->location}}</td>
              <td>
                
              @if (($data->status) ==='Pending')
                      <button type="button" class="btn btn-sm btn-warning" disabled>{{$data->status}}</button>
              @elseif (($data->status) ==='Approved')
                      <button type="button" class="btn btn-sm btn-success" disabled>{{$data->status}}</button>
              @else
                      <button type="button" class="btn btn-sm btn-danger" disabled>{{$data->status}}</button>
              @endif
                
              
              </td>
              <td>
              <a href=""  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_request" data-requestid="{{$data->id}}" >View</i></a>&nbsp;
              </td>
          </tr>
        @endif
        @endforeach

      </tbody>
  </table>

</form>
</div>
</div>

@push('scripts')
<script>

$(document).ready(function(){
  $('#mydatatable').DataTable();

  $(window).scroll(function(){ 
                $('.header').css("opacity", 1- $(window).scrollTop() / 700) 
            }) 
})
</script>

@endpush

@endsection

