<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        @yield('title','Student Management')
    </title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="{{route('index')}}">#</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('create')}}">Create</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-right">

            @if(Auth::check())
                <li><a class="nav-link" href="{{route('home')}}">Dashboard</a></li>
            @else
                <li><a class="nav-link" href="{{route('register')}}">Register</a></li>
                <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
            @endif
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
</body>
</html>
