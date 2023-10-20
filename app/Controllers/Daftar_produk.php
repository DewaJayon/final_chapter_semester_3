<?php

namespace App\Controllers;

use App\Models\mProduct;

class Daftar_produk extends BaseController
{
    public function index(): string
    {
        $mProduct = new mProduct();
        $product_list = $mProduct->findAll();

        $data = [
            'product_list' => $product_list
        ];

        return view('daftar_produk', $data);
    }
}
