<?php

use App\Http\Controllers\AnggotaController;

Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/anggota/tambah', [AnggotaController::class, 'tambah']);
Route::post('/anggota/store/', [AnggotaController::class, 'store']);
Route::get('/anggota/home', function () {
    return view('home');
});
Route::get('/anggota/struktur', function () {
    return view('struktur');
});
Route::get('/anggota/proker', function () {
    return view('proker');
});