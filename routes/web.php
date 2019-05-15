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

Route::get('/inredning', function () {
    return view('inredning');
});

Route::get('/mode', function () {
    return view('mode');
});

Route::get('/horoskop', function () {
    return view('horoskop');
});

Route::get('/traning', function () {
    return view('traning');
});

Route::get('/kost', function () {
    return view('kost');
});