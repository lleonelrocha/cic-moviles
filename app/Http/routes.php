<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//login
Route::get('login',     ['as'=>'login','uses'=>'LoginController@getLogin']);
Route::post('postLogin',['as'=>'post_login','uses'=>'LoginController@postLogin']);


Route::group(['middleware' => ['auth']], function() {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@getIndex']);

    require_once(__DIR__.'\Routes\route.php');
    require_once(__DIR__ . '\Routes\PersonasRoute.php');
    require_once(__DIR__ . '\Routes\DispositivosRoute.php');
    require_once(__DIR__ . '\Routes\FuncionesRoute.php');
    require_once(__DIR__ . '\Routes\GruposRoute.php');
    require_once(__DIR__ . '\Routes\OperativoRoute.php');

    //logout
    Route::get('logout',['as'=>'logout','uses'=>'LoginController@getLogout']);

});

