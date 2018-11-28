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
    return view('base1');
});
Route::get('/file', function () {
    return view('file');
});
Route::get('/chara', function () {
    return view('chara');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/gallery_create', function () {
    return view('gallery_create');
});
Route::get('/chara_create', function () {
    return view('chara_create');
});
Route::get('/file_create', function () {
    return view('file_create');
});
Route::get('/quotes_create', function () {
    return view('quotes_create');
});
Route::get('/quotes', function () {
    return view('quotes');
});
Route::get('/file_play', function () {
    return view('file_play');
});

Route::resource('file','fileController');
Route::resource('chara','charaController');
Route::resource('gallery','galleryController');
Route::resource('quotes','quotesController');
