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
	return View::make('resources/index');
});
Route::get('documents',function()
{
    return View::make('resources.documents');
});Route::get('audios',function()
{
    return View::make('resources.audios');
});Route::get('videos',function()
{
    return View::make('resources.videos');
});
