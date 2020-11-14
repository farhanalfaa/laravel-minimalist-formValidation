<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HitungController;
use App\Http\Controllers\MahasiswaController;


Route::get('/', [HitungController::class, 'formulir']);
Route::post('/hitung', [HitungController::class, 'hitung']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus']);
