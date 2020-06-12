
@extends('layouts.loginlayout')
@section('title',"login page")

@section('content')



<!-- <div id="logindiv" >
            
            <form class="form-signin">
                <div class="form-group text-center col-md-4 " >
                    <label ><strong>Login</strong></label>
                   
                </div>
                <div class="form-group col-md-4 ">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username"required autofocus>
                </div>
                <div class="form-group col-md-4">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="Password" required >
                </div>
                <div class="form-group col-md-4">
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                    <label class="form-check-label" for="dropdownCheck2">
                        Remember me
                    </label>
                    </div>
                </div>
                <div class="form-group col-md-4 text-center">
                <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
                </div>
            </form> -->


<div class="container-fluid body-wrapper">

<div class="row">
    <div class="col-md-12">
        <div class="container col-xs-10 col-sm-6 col-md-6 col-lg-4 col-centered wr-content wr-login col-centered">
            <div>
                <h2 class="wr-title uppercase blue-bg padding-double white boarder-bottom-blue margin-none">
                     Sign In
                </h2>
            </div>
            
            <div class="boarder-all ">
                <div class="clearfix"></div>
                <div class="padding-double login-form">
                    
                                    
            <form  action="/vmsLogin" method="post" id="loginForm" >
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
            <label for="inputuser">Username</label>
            <input id="inputuser" name="inputuser" type="text" class="form-control" tabindex="0" placeholder="" required>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
            <label for="inputPassword">Password</label>
            <input id="inputPassword" name="inputPassword" type="password" class="form-control" placeholder="" autocomplete="off">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">

            </div>
            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input type="hidden" name="sessionDataKey" value='952dd54e-789a-40fa-a559-a4e277255d6d'/>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
            <div class="form-actions">
                <button
                        class="wr-btn grey-bg col-xs-12 col-md-12 col-lg-12 uppercase font-extra-large margin-bottom-double"
                        type="submit" >
                        Sign In
                </button>
            </div>
            </div>
            </div>

            <div class="clearfix"></div>

            </form>
                    
        <div class="clearfix"></div>

    </div>
     </div>
           

        </div>
    </div>

@endsection