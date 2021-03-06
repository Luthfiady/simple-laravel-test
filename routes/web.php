<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('user');
// });

Route::get('/', 'HomeController@index');
Route::get('/user', 'UserController@index');
Route::post('/addUser', 'UserController@add');
Route::post('/checkExist', 'UserController@checkExist');
Route::get('/getListUser', 'UserController@getList');
