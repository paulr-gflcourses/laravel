<?php

class Task1Controller extends BaseController
{
    public function home()
    {
        return View::make('home');
    }

    public function articles()
    {
        return View::make('articles');
    }

    
    public function about()
    {
        return View::make('about');
    }

    public function contactUs()
    {
        return View::make('contactUs');
    }

    public function contactUsPost()
    {

    }
    public function thankYou()
    {
        return View::make('thankYou');
    }
    //public function showHello()
    //{
       //return "Test !!!!"; 
    //}

    //public function getForm()
    //{
        //return View::make('form');
    //}

    //public function postForm()
    //{
        //$name = Input::get('name');
        //return "$name OK";
    //}
}

?>
