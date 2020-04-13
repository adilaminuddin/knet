<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontController@index');
Route::get('/about','AboutController@index');
Route::get('/portofolio','PortofolioController@index');
Route::get('/career','CareerController@index');
Route::get('/contact','ContactController@index');
// Route::get('/','');
// Route::get('','');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
