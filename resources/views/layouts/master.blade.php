<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">

</head>
<body>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
    <script src="{{URL::to('js/jquery-1.10.2.min.js')}}" ></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('js/jquery-migrate.min.js')}}"></script>
    <script src="{{URL::to('js/myScript.js')}}"></script>
</body>
</html>