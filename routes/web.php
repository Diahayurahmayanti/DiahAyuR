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
    return view('welcome');
});

Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::POST('/mahasiswa/create','App\Http\Controllers\MahasiswaController@create');
Route::get('/mahasiswa/{id}/edit','App\Http\Controllers\MahasiswaController@edit');
Route::POST('/mahasiswa/{id}/update','App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/{id}/delete','App\Http\Controllers\MahasiswaController@delete');
Route::get('/mahasiswa/{id}/detail','App\Http\Controllers\MahasiswaController@detail');
