<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PublikController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
