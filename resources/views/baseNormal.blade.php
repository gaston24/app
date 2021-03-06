<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="icon" href="{{ url('/') }}/public/img/icono.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   
    	
</head>
<body>

    

    <div class="container">

        @yield('content')
        
    </div>

    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/jquery-3.4.1.min.js" ></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="{{ url('/') }}/public/js/main/ventas.js"></script>




</body>
</html>