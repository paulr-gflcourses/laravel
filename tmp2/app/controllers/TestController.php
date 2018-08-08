<?php

class TestController extends BaseController
{
    public function artists()
    {
        $artists = Artist::all();
        //var_dump($artists);
        return View::make('artists')->with('artists',$artists);
    }
    public function showHello()
    {
       return "Test !!!!"; 
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
