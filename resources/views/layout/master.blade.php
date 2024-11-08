<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduFun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('extra-css')
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')
</body>

@yield('extra-js')
@include('layout.categoryJs')

</html>
