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

Route::resource('/shop', 'ProductsController');

Route::get('/cart','OrdersController@cart');
Route::get('add-to-cart/{id}', 'OrdersController@addToCart');

Route::patch('update-cart', 'OrdersController@update');

Route::delete('remove-from-cart', 'OrdersController@remove');
Route::get('/checkout', 'OrdersController@checkout');

Route::resource('blog', 'BlogController');

Route::get('/detials', function () {
    return view('bio');
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
