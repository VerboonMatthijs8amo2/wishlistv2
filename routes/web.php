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

Route::get('/', function () {
    return view('home');
});
//Route::get('/wishlist', function () {
//    return view('wishlist');
//});
//Route::get('/admin', function () {
//    return view('admin');
//});

Route::get('/wishlist', 'WishlistController@index');
Route::get('/wishlist/create', 'WishlistController@create');
Route::post('/wishlist/','WishlistController@store');

Route::get('/wishlist/{itemid}', 'WishlistController@show');

Route::get('/wishlist/{itemid}/edit', 'WishlistController@edit');

Route::patch('/wishlist/{itemid}', 'WishlistController@update');
Route::delete('/wishlist/{itemid}', 'WishlistController@delete');

Route::get('/admin', 'WishlistController@admin');



Route::get('/login', 'UserController@index');
Route::post('/login/checklogin', 'UserController@checklogin');
Route::get('login/logout', 'UserController@logout');

Route::view('/register', 'register');
Route::post('/register/store', 'UserController@store');

Route::view('admin/register', 'registeradmin');
Route::post('admin/register/storeadmin', 'UserController@storeadmin');
