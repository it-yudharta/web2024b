<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function daftar(Request $request)
    {
        return [
            'Buku Matematika',
            'Bahasa Indonesia'
        ];
    }

    public function tambah(Request $request)
    {
        $data = $request->data;

        return $data;
    }
}
