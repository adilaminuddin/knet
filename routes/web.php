<?php
Route::get('/', function () {
    return redirect()->route('publik');
});

Route::get('/home', 'FrontController@index')->name('publik');
Route::get('/about','AboutController@index')->name('about');
Route::get('/portofolio','PortofolioController@index')->name('portofolio');
Route::get('/career','CareerController@index')->name('career');
Route::get('/contact','ContactController@index')->name('contact');
Route::get('/legal','FrontController@legal')->name('legal');

Route::get('/category/all','ArticleController@Category')->name('artikel.category');
Route::get('/artikel','ArticleController@index')->name('artikel.index');
Route::get('/artikel/{slug}','ArticleController@detail')->name('artikel.detail');

Route::get('/artikel/category/{slug}','ArticleController@postByCategory')->name('artikel.category');
Route::get('/artikel/tag/{slug}','ArticleController@postByTag')->name('artikel.tag');
//Route::get('/tag/{slug}','PostController@postByTag')->name('tag.posts');
// Route::get('/','');
// Route::get('','');

//Auth::routes(['register' => false]);
Route::get('/search','SearchController@search')->name('search');

Auth::routes();

Route::group(['middleware'=>['auth']], function (){
   Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');
   Route::post('comment/{post}','CommentController@store')->name('comment.store');
});
//Route::get('/','HomeController@index');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');

    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');

    Route::get('/pending/post','PostController@pending')->name('post.pending');
    Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');

    Route::get('/favorite','FavoriteController@index')->name('favorite.index');

    Route::get('authors','AuthorController@index')->name('author.index');
    Route::delete('authors/{id}','AuthorController@destroy')->name('author.destroy');

    Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');

    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');
});

Route::group(['as'=>'pegawai.','prefix'=>'pegawai','namespace'=>'Pegawai','middleware'=>['auth','pegawai']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');

    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');

    Route::resource('post','PostController');
    Route::get('/favorite','FavoriteController@index')->name('favorite.index');
});


// View::composer('layouts.frontend.partial.footer',function ($view) {
//     $categories = App\Category::all();
//     $view->with('categories',$categories);
// });
//admin
// Route::resource('admin', 'DashboardController');
// Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard.index');
