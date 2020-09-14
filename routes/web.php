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

Route::get('/wishlist', 'wishListController@index');
Route::get('/wishlist/create', 'wishListController@create');
Route::post('/wishlist/','wishListController@store');

Route::get('/wishlist/{itemid}', 'wishListController@show');

Route::get('/wishlist/{itemid}/edit', 'wishListController@edit');

Route::patch('/wishlist/{itemid}', 'wishListController@update');
Route::delete('/wishlist/{itemid}', 'wishListController@delete');

Route::get('/admin', 'wishListController@index1');



Route::get('/login', 'UserController@index');
Route::post('/login/checklogin', 'UserController@checklogin');
Route::get('login/logout', 'UserController@logout');

Route::view('/register', 'register');
Route::post('/register/store', 'UserController@store');
