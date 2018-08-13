<html>
<head>
    <style type="text/css">


    </style>

    <title>Forum list</title>
    <link rel="stylesheet" href="{{ URL::asset('styles/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('styles/css/my.css') }}" />
</head>
<body>

<div class="container-fluid">
    <div class="header">
        <ul class='nav'>
            @if(Auth::check())
                <li class='nav-item'>
                    Hello, {{Auth::user()->nickname}}
                </li>
                <li class='nav-item'>
                <a id="logout" class="nav-link" href="{{URL::action('AuthController@getLogout')}}">Log Out</a>
                </li>
            @else
                <li class='nav-item'>
                    <a id="login" class="nav-link" href="{{URL::action('AuthController@getLoginForm')}}">Log In</a>
                </li>
                <li class='nav-item'>
                    <a id="register" class="nav-link" href="{{URL::action('AuthController@getRegisterForm')}}">Register</a>
                </li>
            @endif
        </ul>
    </div>

    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>

