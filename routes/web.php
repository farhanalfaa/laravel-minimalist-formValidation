<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/tambah', [MahasiswaController::class, 'tambah']);
Route::post('/store', [MahasiswaController::class, 'store']);
Route::get('/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/update', [MahasiswaController::class, 'update']);
Route::get('/hapus/{id}', [MahasiswaController::class, 'hapus']);
