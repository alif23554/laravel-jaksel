<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index()
    {
        return view('berita'); // Akan memanggil view profile.blade.php
    }
}
