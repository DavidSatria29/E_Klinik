<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
    <link href="{{ asset('asset/img/logo6.png') }}" rel="icon">
    <title>@yield('title')</title>

</head>
<body>

    @yield('content')
    <script src="asset/js/Query.js"></script>
    @include('sweetalert::alert')
</body>
</html>