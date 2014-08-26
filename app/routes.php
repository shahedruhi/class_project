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


Route::get('/attendances', function()
{
	return View::make('attendances/index');
});
Route::get('/attendances/documents',function()
{
    return View::make('attendances.documents');
});Route::get('/attendances/audios',function()
{
    return View::make('attendances.audios');
});Route::get('/attendances/videos',function()
{
    return View::make('attendances.videos');
});
