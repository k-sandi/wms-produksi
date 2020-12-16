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
    return view('MainPage.home');
});

Route::prefix('gudang')->group(function(){

    Route::get('/', 'GudangController@index');
    Route::get('/create', 'GudangController@create');
    Route::post('/store', 'GudangController@store');
    Route::get('/edit/{id}', 'GudangController@edit');
    Route::post('/update', 'GudangController@update');
    Route::get('/delete/{id}', 'GudangController@destroy');

});