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
    <div class="header row">
        <ul class='col-lg-2 menu nav nav-pills'>
            @if(Auth::check())
                <div class="user">
                    Hello, {{Auth::user()->nickname}}
                </div>
                <li role="presentation">
                <a id="logout"  href="{{URL::action('AuthController@getLogout')}}">Log Out</a>
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
        <h1 class="col-lg-6 col-lg-offset-2">MegaApp Forum</h1>
    </div>

    <div class="content row">
        @yield('content')
    </div>
</div>

</body>
</html>

