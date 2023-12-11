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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/5026221072', function () {
    return view('5026221072');
});

Route::get('/alerts', function () {
    return view('alerts');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('blog', 'App\Http\Controllers\DosenController@showBlog');

Route::get('/employee/{nama}', 'App\Http\Controllers\DosenController@showNama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

// Route CRUD untuk Latihan tanggal 04/12/2023
Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliahController@index');

// add
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');

Route::post('/nilaikuliah/store', 'App\Http\Controllers\NilaiKuliahController@store');

// Route CRUD untuk harddisk
Route::get('/harddisk', 'App\Http\Controllers\HarddiskController@index');

Route::get('/harddisk/tambah','App\Http\Controllers\HarddiskController@tambah');

Route::post('/harddisk/store', 'App\Http\Controllers\HarddiskController@store');

Route::get('/harddisk/edit/{id}','App\Http\Controllers\HarddiskController@edit');

Route::post('/harddisk/update','App\Http\Controllers\HarddiskController@update');

Route::get('/harddisk/hapus/{id}','App\Http\Controllers\HarddiskController@hapus');

Route::get('/harddisk/cari','App\Http\Controllers\HarddiskController@cari');

Route::get('/harddisk/view/{id}','App\Http\Controllers\HarddiskController@view');

// Route CRUD untuk baju
Route::get('/baju', 'App\Http\Controllers\BajuController@index');
Route::get('/baju/tambah', 'App\Http\Controllers\BajuController@tambah');
Route::post('/baju/store', 'App\Http\Controllers\BajuController@store');
Route::get('/baju/edit/{id}', 'App\Http\Controllers\BajuController@edit');
Route::post('/baju/update', 'App\Http\Controllers\BajuController@update');
Route::get('/baju/hapus/{id}', 'App\Http\Controllers\BajuController@hapus');
Route::get('/baju/cari', 'App\Http\Controllers\BajuController@cari');
Route::get('/baju/view/{id}', 'App\Http\Controllers\BajuController@view');

// Route mahasiswa (EAS)
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/edit/{NRP}', 'App\Http\Controllers\MahasiswaController@edit');
Route::post('/mahasiswa/update', 'App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/cari', 'App\Http\Controllers\MahasiswaController@cari');
Route::get('/mahasiswa/view/{NRP}', 'App\Http\Controllers\MahasiswaController@view');
