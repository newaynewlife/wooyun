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

Route::any("signin","UserController@signin");
Route::any("signup","UserController@signup");
Route::any("signout","UserController@signout");
Route::get("geetest","UserController@getGeetest");
Route::controller("/","HomeController");
