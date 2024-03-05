<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::any('/halo', function () {
//     return 'halo dunia';
// });

Route::match(['post', 'get'],'/halo', function () {
    return 'halo dunia';
});

Route::get('/halo/{nama}', function ($nama) {
    return 'halo ' . $nama;
});

Route::get('/buku', [BukuController::class, 'daftar']);

Route::post('/buku', [BukuController::class, 'tambah']);
