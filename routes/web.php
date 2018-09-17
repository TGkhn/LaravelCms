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

Route::get('/', 'HomeGetController@getIndex' );
Route::get('/index', 'HomeGetController@getIndex' );
Route::get('/home', 'HomeGetController@getIndex' );
Route::get('/anasayfa', 'HomeGetController@getIndex' );

Route::get('/iletisim', 'HomeGetController@getContact');



Route::group(['prefix'=>'admin'],function (){
    Route::get('/','AdminGetController@getIndex');

    Route::get('/settings','AdminGetController@getSettings');
    Route::post('/settings','AdminPostController@postSettings');



});

