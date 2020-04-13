<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
