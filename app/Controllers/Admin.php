<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('admin/home');
    }
    public function manajemen_produk(): string
    {
        return view('admin/manajemen_produk');
    }
}
