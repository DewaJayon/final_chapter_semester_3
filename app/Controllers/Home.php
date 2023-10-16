<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function daftar_produk(): string
    {
        return view('daftar_produk');
    }

    public function kontak_kami(): string
    {
        return view('kontak_kami');
    }
    public function tentang_kami(): string
    {
        return view('tentang_kami');
    }
}
