@extends('layouts.mainlayout')
@section('title',"Dashboard page")


                @php 
                  $user = session()->get('users'); 
                  @endphp
@section('content')

       

<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
  <div class="card-header" style="text-align-center">
  <strong> රාජකාරි ගමන් යාම සඳහා වාහනයක් ඉල්ලුම් කිරීම</strong>  
  </div>
    <form>




<!--------------------------------table----------------------------------------->
<table class="table " id="mdatatable">
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



@endsection

