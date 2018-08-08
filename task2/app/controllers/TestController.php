<?php

class TestController extends BaseController
{
    public function artists()
    {
        $artists = Artist::all();
        return View::make('artists')->with('artists',$artists);
    }
    
    public function artist($id)
    {
        $artist = Artist::get($id);
        return View::make('album')->with('album',$artists);
        
    }


    public function getForm()
    {
        return View::make('form');
    }

    public function postForm()
    {
        $name = Input::get('name');
        return "$name OK";
    }
}

?>
