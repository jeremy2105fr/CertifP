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
Route::post('/upMusic', 'NavController@uMusic');

Route::post('/addMusic', 'ActionController@newMusic');
Route::post('/updateMusic', 'ActionController@musicUpdated');
Route::post('/deleteMusic', 'ActionController@deleteMusic');



/*Route::get('/addGenre', 'NavController@addGenre');

Route::post('addGenre', 'ActionController@newGenre');*/
