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


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/item/index', 'ItemController@index')->name('item.index');
Route::get('/item/detail/{id}', 'ItemController@detail')->name('detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/item/index', 'AdminItemController@index')->name('admin.item.index');
	Route::get('/item/detail/{id}', 'AdminItemController@detail')->name('admin.item.detail');
	Route::post('/item/add', 'AdminItemController@add')->name('admin.item.add');
	Route::get('/item/add-form', 'AdminItemController@showAddForm')->name('admin.item.add-form');
	Route::post('/item/edit/{id}', 'AdminItemController@edit')->name('admin.item.edit');
	Route::get('/item/edit-form/{id}', 'AdminItemController@showEditForm')->name('admin.item.edit-form');
	Route::post('/logout', 'Auth\AdminLogoutController@logout')->name('admin.logout');
});

//twitterログイン関係のルーティング
Route::get('/login/{social}', 'Auth\OAuthLoginController@socialLogin')->where('social', 'twitter');
Route::get('/login/{social}/callback', 'Auth\OAuthLoginController@handleProviderCallback')->where('social', 'twitter');

//facebookログイン関係のルーティング
//Route::get('/login/{social}', 'Auth\OAuthLoginController@socialLogin')->where('social', 'facebook');
//Route::get('/login/{social}/callback', 'Auth\OAuthLoginController@handleProviderCallback')->where('social', 'facebook');
