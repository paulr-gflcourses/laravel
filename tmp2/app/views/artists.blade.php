<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Artists</title>

</head>
<body>
    <h1>Artists</h1>
    <ul>
        @foreach ($artists as $artist)
            <li><a href="artist/{{$artist->ArtistId}}">{{$artist->Name}} ({{$artist->ArtistId}})</a></li>
        @endforeach
    </ul>

</body>

</html>
