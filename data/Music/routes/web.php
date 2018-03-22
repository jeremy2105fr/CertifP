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

Auth::routes();

Route::get('/', 'ActionController@showMusic');
Route::get('/home', 'HomeController@index');
Route::get('/addMusic', 'NavController@addMusic');
Route::get('/updateMusic', 'NavController@updateMusic');

Route::post('/addMusic', 'ActionController@newMusic');
