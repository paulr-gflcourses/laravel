
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Tracks</title>

</head>
<body>
    <h1>Tracks of the Artist {{$artist->Name}}</h1>
    <ul>
        @foreach ($tracks as $track)
            <li><a href="{{URL::route('track', array('id'=>$track->TrackId))}}">{{$track->Name}}</a></li>
        @endforeach
    </ul>

</body>

</html>
