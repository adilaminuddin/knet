<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('header', function () {
    return view('frontpart.header');
});
Route::get('footer', function () {
    return view('frontpart.footer');
});

Route::get('/', 'FrontController@index');
Route::get('/about','AboutController@index');
Route::get('/portofolio','PortofolioController@index');
Route::get('/career','CareerController@index');
Route::get('/contact','ContactController@index');
Route::get('/legal','FrontController@legal');
Route::get('/artikel','ArticleController@index');
// Route::get('/','');
// Route::get('','');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
