<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Manajemen_produk extends BaseController
{
    public function index(): string
    {
        return view('admin/manajemen_produk');
    }
}
