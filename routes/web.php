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

Route::get('/', 'PagesController@index');

Route::get('blade', 'PagesController@blade');

Route::group(['middleware' => ['authenticated']], function () {
    Route::get('profile', 'PagesController@profile');

    Route::get('settings', 'PagesController@settings');

    Route::get('users', 'UsersController@index');
});



Route::get('users/create', 'UsersController@create');

Route::post('users', ['uses' => 'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
