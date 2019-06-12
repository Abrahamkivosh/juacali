<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('index');

Route::resource('/albums', 'AlbumsController');



Route::get('/events', function () {
    return view('events/index');
});
Route::get('/events/show', function () {
    return view('albums/show');
});

;
Route::get('/photo-gallary', 'PagesController@photos')->name('photos');
Route::get('/video-gallary', 'PagesController@videos')->name('videos');

Route::get('/shop', function () {
    return view('shop.products');
});
Route::get('/cart', function () {
    return view('shop.cart');
});

Route::get('/checkout', function () {
    return view('shop.checkout');
});

Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/blog/show', function () {
    return view('blog.show');
});
Route::get('/detials', function () {
    return view('bio');
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
