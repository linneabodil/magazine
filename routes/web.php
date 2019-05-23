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
    return view('welcome');
});

Route::get('/inredning', 'ArticleController@inredning');
Route::get('/mode', 'ArticleController@mode');
Route::get('/horoskop', 'ArticleController@horoskop');
Route::get('/traning', 'ArticleController@traning');
Route::get('/kost', 'ArticleController@kost');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/admin', 'ArticleController@admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articles', 'ArticleController@articleEdit');
Route::resource('/articles','ArticleController');
Route::resource('/articles/{id}', 'ArticleController@show');
