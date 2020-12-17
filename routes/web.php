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

Route::prefix('produk')->group(function(){

    Route::get('/', 'ProdukController@index');
    Route::get('/create', 'ProdukController@create');
    Route::post('/store', 'ProdukController@store');
    Route::get('/show/{id}', 'ProdukController@show');
    Route::get('/edit/{id}', 'ProdukController@edit');
    Route::post('/update', 'ProdukController@update');
    Route::get('/delete/{id}', 'ProdukController@destroy');

});

Route::prefix('stok')->group(function(){

    Route::get('/', 'ProdukController@index');
    Route::get('/create', 'ProdukController@create');
    Route::post('/store', 'ProdukController@store');
    Route::get('/show/{id}', 'ProdukController@show');
    Route::get('/edit/{id}', 'ProdukController@edit');
    Route::post('/update', 'ProdukController@update');
    Route::get('/delete/{id}', 'ProdukController@destroy');

});