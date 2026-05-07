<?php

namespace App\Http\Controllers;

use App\Models\kategori;

class kategoriController extends Controller
{
    //
    public function index()
    {
        $query = kategori::all();

        return view('kategori', compact('query'));
    }

    public function admin()
    {
        $query = kategori::all();

        return view('admin-kategori', compact('query'));
    }
}
