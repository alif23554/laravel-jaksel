<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    //
    public function index()
    {
        return view('kontak'); // Akan memanggil view profile.blade.php
    }
}
