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
Route::get('/','StaticController@home');
Route::get('/statistic','StaticController@statistic');
Route::get('/review','StaticController@review');
Route::post('/review/send', 'ReviewController@send');