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
        return View::make('article')->with('n',$n);
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
        $errors = '';
        if (!$name)
        {
            $errors.='Field name is empty! ';
        }

        if (!$message)
        {
            $errors.='Field message is empty!';
        }

        if ($errors)
        {
            return View::make('contactUs')->with('errors', $errors);
        }else
        {
            return Redirect::to("/thank-you")->with("name", $name);
        }
    }

    public function thankYou()
    {
        $name = Session::get('name');
        return View::make('thankYou')->with('name',$name);
    }
}

?>
