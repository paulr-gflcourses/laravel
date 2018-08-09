
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Track info</title>

</head>
<body>
    <h1>Description of the track "{{$track->Name}}"</h1>
    <div>
        <p>Artist: {{$artist->Name}}</p>
        <p>Album: {{$album->Title}}</p>
    </div>
<hr/>
    <div>
        <p>Name: {{$track->Name}}</p>
        <p>Genre: {{$track->genre->Name}}</p>
        <p>Composer: {{$track->Composer}}</p>
        <p>Time: {{$track->Milliseconds}} ms</p>
        <p>Size: {{$track->Bytes}} bytes</p>
        <p>Price: {{$track->UnitPrice}} $</p>
    </div>
</body>

</html>
