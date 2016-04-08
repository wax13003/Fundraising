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

Route::get('/', function () {
    return view('projectdiscover');
});

Route::get('/show', function () {
    return view('projectshow');
});

Route::get('/form', function () {
    return view('projectForm');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('logout','loginAuthController@logout');

Route::post('login','loginAuthController@doLogin');

Route::post('/signup','signupController@create');
