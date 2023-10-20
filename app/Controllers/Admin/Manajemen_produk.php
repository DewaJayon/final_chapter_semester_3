<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\mProduct;

class Manajemen_produk extends BaseController
{
    public function index()
    {

        $mProduct = new mProduct();
        $product_list = $mProduct->findAll();

        $data = [
            'product_list' => $product_list
        ];

        return view('admin/manajemen_produk', $data);
    }
}
