<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::Auth();

// Route::middleware('auth')->group(function () {

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/idea', 'Front\IdeaController@index')->name('idea');

	Route::get('/event/{id}/{name}', 'Front\EventController@showEvent')->name('event');

	Route::get('/events', 'Front\EventController@index')->name('events');

	Route::get('/teammembers', 'Front\TeammemberController@index')->name('teammembers');

	Route::get('/teammember/{id}/{name}', 'Front\TeammemberController@showTeammember')->name('teammember');

	Route::get('/admin/home', 'HomeController@index');

	Route::resource('admin/idea', 'IdeaController');

	Route::resource('admin/event', 'EventController');

	Route::resource('admin/teammember', 'TeammemberController');

	Route::post('/newsletter', 'NewsletterController@store')->name('newsletter.store');
// });
