<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>



</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">HOME</a> </li>
            <li><a href="{{route('prime')}}" class="nav-link">Prime</a> </li>
            <li><a href="{{route('series')}}" class="nav-link">Series</a> </li>
            <li><a href="{{route('passwordGenerator')}}" class="nav-link">Password Generator</a> </li>
        </ul>

    </div>
</nav>

@yield('body')




<script src="{{asset('/js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>
</body>
</html>
