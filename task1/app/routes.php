<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/', function()
{
    return Redirect::to('/home');
});


Route::get('/home', array('as'=>'home', 'uses'=>'Task1Controller@home'));
Route::get('/articles', 'Task1Controller@articles');
Route::get('/article/{n}', 'Task1Controller@article')->where('n','[0-9]+');
Route::get('/about', 'Task1Controller@about');
Route::get('/contact-us', 'Task1Controller@contactUs');
Route::post('/contact-us', 'Task1Controller@contactUsPost');
//Route::get('/about', 'Task1Controller@about');
//Route::get('/contact-us', 'Task1Controller@contactUs');
//Route::post('/contact-us', 'Task1Controller@contactUsPost');
Route::get('/thank-you', 'Task1Controller@thankYou');

//Route::get('/hello/{name?}', function ($name='user')
//{
    //return "Hello, $name";
//})->where('name','[a-zA-Z]+');
//Route::get('/hello/{name?}', function($name="user"){
    //return "Hello again, $name";
//});


//Route::get('/redirect', function(){
    //return Redirect::to('http://google.com');
//});

//Route::get('/test1', 'TestController@showHello');
//Route::get('/post-form', array('as'=>'form', 'uses'=>'TestController@getForm'));
//Route::post('/test/form', array('as'=>'pform', 'uses'=>'TestController@postForm'));

Route::get('/test', 'HomeController@showTest');

