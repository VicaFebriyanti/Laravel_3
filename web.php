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

Route::get('/vica', function () {
    return view('vica');
});

Route::get('/ind', function () {
    return view('indonesia');
});

Route::get('/rpl', function () {
    return view('rpl');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/intro', function () {
    echo '<h1>Hello Everybody !</h1>';
    echo '<p>Let me introduce myself. My name is Vica Pebriyanti Jatnika. 
    <br> Class 12 RPL 1, from SMKN 1 Subang. 
    <br> Nice to meet you, all.</p>';
});

Route::get('/siswa/{nama}', function ($nama) {
    return "Tampilkan data siswa dengan nomor absen $nama";
});

Route::get('/siswa/absen/{absen}', function ($absen) {
    return "Tampilkan data siswa dengan nomor absen $absen";
})->where('absen', '[0-9]+');