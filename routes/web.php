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

    Route::get('/', 'StokController@index');
    Route::get('/show/{id}', 'StokController@show');
    Route::get('/create', 'StokController@create');
    Route::post('/store', 'StokController@store');

});

Route::prefix('produksi')->group(function(){

    Route::get('/', 'ProduksiController@index');
    Route::get('/create', 'ProduksiController@create');
    Route::post('/store', 'ProduksiController@store');
    Route::get('/show/{id}', 'ProduksiController@show');
    Route::get('/edit/{id}', 'ProduksiController@edit');
    Route::post('/update', 'ProduksiController@update');
    Route::get('/delete/{id}', 'ProduksiController@destroy');

});