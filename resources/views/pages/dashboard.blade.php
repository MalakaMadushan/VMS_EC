@extends('layouts.mainlayout')
@section('title',"Dashboard page")

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
        
          <!-- <div class="col-md-1"></div>
          <div class="card col-md-2 text-white bg-dark " style="width: 18rem;">
             <div class="card-body">
                <h5 class="card-title">Pending Request</h5>
                <h1> 5/16</h1>
          </div>
          </div>
          <div class="col-md-1"></div>
          <div class="card col-md-2 text-white bg-success" style="width: 18rem;">
             <div class="card-body">
                <h5 class="card-title">Approved Request</h5>
                <h1> 5/16</h1>
          </div>
          </div>
          <div class="col-md-1"></div>
          <div class="card col-md-2 text-white bg-danger" style="width: 18rem;">
             <div class="card-body">
                <h5 class="card-title">Rejected Requests</h5>
                <h1> 5/16</h1>
          </div>
          </div>
          <div class="col-md-1"></div>
        </div> -->
        
@endsection

