
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Albums</title>

</head>
<body>
    <h1>Albums of the Artist {{$artist->Name}}</h1>
    <ul>
        @foreach ($albums as $album)
            <li><a href="{{URL::route('album', array('id'=>$album->AlbumId))}}">
{{$album->Title}} </a></li>
        @endforeach
    </ul>

</body>

</html>
