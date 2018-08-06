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
    return View::make('hello');
});

Route::get('/hello/{name?}', function ($name='user')
{
    return "Hello, $name";
})->where('name','[a-zA-Z]+');
Route::get('/hello/{name?}', function($name="user"){
    return "Hello again, $name";
});


Route::get('/redirect', function(){
    return Redirect::to('http://google.com');
});

Route::get('/test1', 'TestController@showHello');
Route::get('/post-form', array('as'=>'form', 'uses'=>'TestController@getForm'));
Route::post('/test/form', array('as'=>'pform', 'uses'=>'TestController@postForm'));

Route::get('/test', 'HomeController@showTest');

