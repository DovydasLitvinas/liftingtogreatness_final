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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', 'PagesController@index');
// Route::get('/paslaugos', 'PagesController@paslaugos');
Route::get('/kontaktai', 'PagesController@kontaktai');
Route::get('/apie', 'PagesController@apie');
Route::get('/login2', 'PagesController@login2');

//paslaugos
Route::get('/mityba', 'PagesController@mityba');
Route::get('/sporto-programos', 'PagesController@sportoProgramos');
Route::get('/apranga', 'PagesController@apranga');

Auth::routes();
Route::get('/', 'PagesController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
