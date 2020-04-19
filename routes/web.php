<?php

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('hdrx','FrontController@hdr');
// Route::get('ftrx','FrontController@ftr');

Route::get('/', 'FrontController@index');
Route::get('/about','AboutController@index');
Route::get('/portofolio','PortofolioController@index');
Route::get('/career','CareerController@index');
Route::get('/contact','ContactController@index');
Route::get('/legal','FrontController@legal');
Route::get('/artikel','ArticleController@index');
Route::get('/artikel/{slug}','ArticleController@detail')->name('artikel.detail');
Route::get('/artikel/category/{slug}','ArticleController@postByCategory')->name('artikel.category');
Route::get('/artikel/tag/{slug}','ArticleController@postByTag')->name('artikel.tag');
// Route::get('/','');
// Route::get('','');

Auth::routes(['register' => false]);
//Route::get('/','HomeController@index');

// rute khusus admin login logout 
Route::get('admin/login', 'Auth\AdminLoginController@showLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login');
Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::group(array('prefix'=>'admin','namespace'=>'admin'), function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
});
