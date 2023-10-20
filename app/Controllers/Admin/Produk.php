<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\mProduct;
use CodeIgniter\HTTP\RequestInterface;

class Produk extends BaseController
{

    protected $request;

    public function __construct()
    {
        $request = \Config\Services::request();
        $this->request = $request;
    }

    public function index()
    {
        $mProduct = new mProduct();
        $product_list = $mProduct->findAll();
        $data = [
            'product_list' => $product_list
        ];

        return view('admin/manajemen_produk', $data);
    }

    public function tambah_produk()
    {
        return view('admin/tambah_produk');
    }

    public function insert()
    {
        $product_name           = $this->request->getVar('product_name');
        $product_price          = $this->request->getVar('product_price');
        $product_description    = $this->request->getVar('product_description');
        $product_image          = $this->request->getVar('product_image');

        $data = [
            'product_name'          => $product_name,
            'product_price'         => $product_price,
            'product_description'   => $product_description,
            'product_image'         => $product_image
        ];

        $mProduct = new mProduct();
        $mProduct->insert($data);

        return redirect(route: 'admin/manajemen_produk');
    }

    public function delete($id_product)
    {
        $mProduct = new mProduct();
        $mProduct->where('id_product', $id_product)->delete();

        return redirect(route: 'admin/manajemen_produk');
    }

    public function update($id_product)
    {
        $mProduct = new mProduct();
        $product_row = $mProduct->where('id_product', $id_product)->first();

        $data = [
            'product_row' => $product_row,
        ];

        return view('admin/edit_produk', $data);
    }
}
