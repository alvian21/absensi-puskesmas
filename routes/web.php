<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@login')->name('login');


Route::get('/', function(){
    return redirect('/login');
});

Route::group(['middleware' => ['auth:web,pegawai']], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::post('logout', 'AuthController@logout')->name('logout');
});

Route::group(['middleware' => ['auth:web']], function () {
    Route::resource('laporan', 'LaporanController');
    Route::resource('divisi', 'DivisiController');
    Route::resource('pegawai', 'PegawaiController');

});
Route::group(['middleware' => ['auth:pegawai']], function () {
    Route::resource('absensi', 'AbsensiController');

});
