<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }} "> </script>

    <title>Document</title>
</head>
<body>
    @include('dashboard.secciones.nav-header')

    
    <div class="container mt-3 mb-3">
        @include('dashboard.secciones.session-flash-status')
        @yield('content')
    </div>



</body>
</html>