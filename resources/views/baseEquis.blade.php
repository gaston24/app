<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equis @yield('pageTitle')</title>
    <link rel="icon" href="{{ url('/') }}/public/img/icono.ico">
    
    
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/css/fixedHeader.dataTables.min.css">
    
    	
</head>
<body>

    

    <div class="container">

        @yield('content')
        
    </div>


    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/jquery-3.4.1.min.js" ></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/bootstrap.bundle.min.js" ></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/buttons.flash.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/jszip.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/pdfmake.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/vfs_fonts.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/buttons.html5.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/buttons.print.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/dataTables.select.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/public/js/plugins/dataTables.fixedHeader.min.js"></script>

	<script type="text/javascript" src="{{ url('/') }}/public/js/main/equis.js"></script>

</body>
</html>