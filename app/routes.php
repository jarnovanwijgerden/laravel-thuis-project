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

// hier kun je aangeven welke file die moet weergeven bij de index
Route::get('/', function()
{
	$title = "L4 Basics";
	return View::make('home.index')
	->with('title', $title);
});

Route::get('about', function()
{
	$title = "About";
	return View::make('home.about')
	->with('title', $title);
});