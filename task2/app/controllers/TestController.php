<?php

class TestController extends BaseController
{
    public function artists()
    {
        $artists = Artist::all();
        return View::make('artists')->with('artists',$artists);
    }

    public function albums($id)
    {
        $artist = Artist::find($id);
        $albums = $artist->albums; 
        $data = ['albums'=>$albums, 'artist'=>$artist];
        return View::make('albums', $data);
    }

    public function tracks($id)
    {
        $album = Album::find($id);
        $artist = $album->artist;
        $tracks = $album->tracks; 
        $data = ['artist'=>$artist, 'tracks'=>$tracks];
        return View::make('tracks', $data);
    }

    public function trackInfo($id)
    {
        $track = Track::find($id);
        $album = $track->album;
        $artist = $album->artist;
        $tracks = $album->tracks; 
        $data = ['artist'=>$artist,'album'=>$album, 'track'=>$track];
        return View::make('trackInfo', $data);
    }
}

?>
