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
    return view('front/inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/registro', 'front/registro')->name('registro');
Route::view('/ingreso', 'front/ingreso')->name('ingreso');
