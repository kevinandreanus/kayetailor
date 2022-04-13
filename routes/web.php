<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/services/suit', function () {
    return view('services/suit');
});

Route::get('/services/shirt', function () {
    return view('services/shirt');
});

Route::get('/services/batik', function () {
    return view('services/batik');
});

Route::get('/services/cheongsam', function () {
    return view('services/cheongsam');
});

Route::get('/services/trouser', function () {
    return view('services/trouser');
});

Route::get('/services/alteration', function () {
    return view('services/alteration');
});



Route::get('/lookbook/wedding', function(){
    return view('look_book.wedding');
});
Route::get('/lookbook/daily', function(){
    return view('look_book.daily');
});
Route::get('/lookbook/casual', function(){
    return view('look_book.casual');
});
Route::get('/lookbook/ceremony', function(){
    return view('look_book.ceremony');
});
