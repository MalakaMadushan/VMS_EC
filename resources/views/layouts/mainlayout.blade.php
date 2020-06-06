<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECVMS - @yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{{ csrf_token() }}" /> 
    <!---------STYLES----------->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body> 

    <!----javascript in boostrap--->
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>


            <!----------include side bar--------->
            @include('partials.header')
            <!-----------include header bar------>
            @include('partials.sidebar')
        
        
            <div class="col">
                <!----include main responsible content---->
                @yield('content')
            </div></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <!----include the footer--->
                    @include('partials.footer')

                 </div>

                 <!-- jQuery -->
                <script src="//code.jquery.com/jquery.js"></script>
                <!-- DataTables -->
                 <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
                 <!-- Bootstrap JavaScript -->
                 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                 <!-- App scripts -->
                 @stack('scripts')
            </div>

           </body>
</html>