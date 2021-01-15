<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>XL Extra Large - Login</title>

    <link rel="icon" href="{{ url('/') }}/public/img/icono.ico">
    <link href="{{ url('/') }}/public/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ url('/') }}/public/js/jquery-3.4.1.min.js" defer></script>

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
