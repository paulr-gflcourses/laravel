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

Route::get('/', 'TestController@artists');

//Route::get('/hello/{name?}', function ($name='user')
//{
    //return "Hello, $name";
//})->where('name','[a-zA-Z]+');
//Route::get('/hello/{name?}', function($name="user"){
    //return "Hello again, $name";
//});


//Route::get('/db', function ()
//{
    ////$sql = 'select * from Artist limit 1';
    ////$res = DB::select($sql);

    ////$res = DB::table('Artist')->take(1)->get();
    ////$res = DB::table('Artist')->whereBetween('ArtistId', array(10, 15))->get();
    ////$res = DB::table('Artist')->where('ArtistId', 10)->get();
    ////$res = DB::table('Artist')->where('name', 'AC/DC')->get();
    ////$res = DB::table('Artist')->whereName('name','like','AC/DC')->get();
    ////$res = DB::table('Artist')->whereIn('ArtistId', array(10, 15))->get();

    //$res = Artist::find(1);
    //$res = Artist::where('name', 'Metallica')->first();
    //$albums = $res->albums;
    //foreach ($albums as $album) {
        //echo $album->Title.PHP_EOL;
    //}

    //$album = Album::find(10);
    ////var_dump($album);
    //var_dump($album->artist->Name);

    //$track = Track::find(1);
    //var_dump($track->genre->Name);

    ////var_dump($res);
//});

//Route::get('/redirect', function(){
    //return Redirect::to('http://google.com');
//});

//Route::get('/test1', 'TestController@showHello');
//Route::get('/post-form', array('as'=>'form', 'uses'=>'TestController@getForm'));
//Route::post('/test/form', array('as'=>'pform', 'uses'=>'TestController@postForm'));

Route::get('/test', 'HomeController@showTest');

