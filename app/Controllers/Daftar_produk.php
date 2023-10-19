<?php

namespace App\Controllers;

class Daftar_produk extends BaseController
{
    public function index(): string
    {
        return view('daftar_produk');
    }
}
