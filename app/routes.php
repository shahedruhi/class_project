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

//Route::resource('attendances','AttendanceController');

Route::get('/attendances', function()
{
	return View::make('attendances/index');
});


Route::get('/page1',function()
{
    return View::make('attendances.page1');

});

Route::get('/page2',function()
{
    return View::make('attendances.page2');

});

Route::get('/page3',function()
{
    return View::make('attendances.page3');
});

Route::get('/page4',function()
{
    return View::make('attendances.page4');
});

Route::resource('attendances','AttendanceController');