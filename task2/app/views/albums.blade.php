
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Albums</title>

</head>
<body>
    <h1>Albums of the Artist {{$artist->Name}}({{$artist->ArtistId}})</h1>
    <ul>
        @foreach ($albums as $album)
            <li><a href="album/{{$album->AlbumId}}">{{$album->Title}} ({{$album->AlbumId}})</a></li>
        @endforeach
    </ul>

</body>

</html>
