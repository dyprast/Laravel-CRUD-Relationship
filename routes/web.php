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
    return redirect(url('home'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info', 'HomeController@info')->name('info');

Route::prefix('gudang')->group(function(){
	Route::get('/', 'GudangController@index')->name('gudang_home');
	Route::get('/tambahGudang', 'GudangController@add');
	Route::post('/simpanGudang', 'GudangController@save')->name('gudang_save');
	Route::get('/editGudang/{id}', 'GudangController@edit');
	Route::post('/updateGudang/{id}', 'GudangController@update')->name('gudang_update');
	Route::get('/hapusGudang/{id}', 'GudangController@delete')->name('gudang_delete');
});

Route::prefix('barang')->group(function(){
	Route::get('/', 'BarangController@index')->name('barang_home');
	Route::get('/tambahBarang', 'BarangController@add');
	Route::post('/simpanBarang', 'BarangController@save')->name('barang_save');
	Route::get('/editBarang/{id}', 'BarangController@edit');
	Route::post('/updateBarang/{id}', 'BarangController@update')->name('barang_update');
	Route::get('/hapusBarang/{id}', 'BarangController@delete')->name('barang_delete');
});
