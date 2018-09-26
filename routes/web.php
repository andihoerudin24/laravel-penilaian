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
// Route::get('/tampilan', function () {
//     return view('layouts.backend');
// });

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/laporan','HomeController@cetak')->name('laporan')->middleware('verified');
Route::group(['middleware'=>'auth'], function() {
Route::get('/api/datatable/siswa','SiswaController@dataTable')->name('api.datatable.siswa');
Route::get('/api/datatable/pelanggaran','PelanggaranController@data')->name('api.datatable.pelanggaran');
Route::get('/api/datatable/penilaian','PenilaianController@data')->name('api.datatable.penilaian');
Route::resource('siswa', 'SiswaController');
Route::resource('pelanggaran', 'PelanggaranController');
Route::resource('penilaian', 'PenilaianController');

});
