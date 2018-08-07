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

    public function article($n)
    {
        return View::make('article');
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
        $name = Input::get('name');
        $message = Input::get('message');
        $errors = "";
        if (!$name)
        {
            $errors.='Field name is empty!';
        }

        if (!$message)
        {
            $errors.='Field message is empty!';
        }

        if ($errors)
        {
            return View::make('contactUs');
        }else
        {
            return $this->thankYou();
        }
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
