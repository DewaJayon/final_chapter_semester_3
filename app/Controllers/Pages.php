<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/daftar_produk');
    }
    public function ddd()
    {
        return view('pages/daftar_produk2');
    }
}
