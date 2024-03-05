<?php

use App\Http\Controllers\HelloController;
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
