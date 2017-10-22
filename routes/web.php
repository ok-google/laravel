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
    return view('layouts/header');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/siswa/add', 'SiswaController@add')->name('siswa.add');
Route::post('/siswa/store', 'SiswaController@store')->name('siswa.store');
Route::get('/siswa/{nis}/edit', 'SiswaController@edit')->name('siswa.edit');
Route::patch('/siswa/{nis}/edit', 'SiswaController@update')->name('siswa.update');
Route::get('/siswa/{nis}/hapus', 'SiswaController@hapus')->name('siswa.hapus');
