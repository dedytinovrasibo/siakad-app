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
Route::get('/',function(){
    return view('dashboard-dosen');
});

Route::resource('tahunAkademik','TahunAkademiController');
Route::resource('jurusan','JurusanController');
Route::resource('program','ProgramController');
Route::resource('kurikulum','KurikulumController');
Route::resource('dosen','DosenController');
Route::resource('matakuliah', 'MatkulController');
Route::resource('mahasiswa','MahasiswaController');