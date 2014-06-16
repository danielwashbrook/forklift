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

  \Debugbar::enable();

Route::get('/', function()
{

  Debugbar::error("Error!");
  Debugbar::warning('Watch out..');
  Debugbar::addMessage('Another message', 'mylabel');

	return View::make('index');
});

  Route::group(array('prefix' => 'debug'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('features', 'FeaturesController',
      array('only' => array('index', 'store', 'destroy')));
  });

// =============================================
// API ROUTES ==================================
// =============================================
  Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'CommentController',
      array('only' => array('index', 'store', 'destroy')));
  });

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
  App::missing(function($exception)
  {
    Debugbar::error("Catch all route!");
    return View::make('index');
  });