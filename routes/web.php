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
    return view('frontend.index');
});


Route::group(['prefix'=>'admin'],function (){
    Route::get('/','AdminController@getIndex');

    Route::get('/settings','AdminController@getSettings');
    Route::post('/settings','AdminController@postSettings');



});
