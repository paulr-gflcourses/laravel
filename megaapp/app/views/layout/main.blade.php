<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title></title>
    
</head>

<body>
<div class="header">
@if(Auth::check())
    Hello, {{Auth::user()->nickname}}
    <a href="{{URL::action('AuthController@getLogout')}}">Logout</a>
@else
    <a href="{{URL::action('AuthController@getLoginForm')}}">Log in</a>
    <a href="{{URL::action('AuthController@getRegisterForm')}}">Register</a>
@endif
</div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
