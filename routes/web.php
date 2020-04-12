<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','PublicController@index')->name('publik');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
