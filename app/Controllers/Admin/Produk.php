<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\mProduct;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Files\File;

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

        $product_image = $this->request->getFile('product_image');
        $product_image_name = $product_image->getRandomName();

        $product_image->move('images/', $product_image_name);

        $data = [
            'product_name'          => $product_name,
            'product_price'         => $product_price,
            'product_description'   => $product_description,
            'product_image'         => $product_image_name
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

    public function edit($id_product)
    {
        $mProduct = new mProduct();
        $product_row = $mProduct->where('id_product', $id_product)->first();

        $data = [
            'product_row' => $product_row,
        ];

        return view('admin/edit_produk', $data);
    }

    public function update($id_product)
    {

        $product_name           = $this->request->getVar('product_name');
        $product_price          = $this->request->getVar('product_price');
        $product_description    = $this->request->getVar('product_description');

        $data = [
            'product_name'          => $product_name,
            'product_price'         => $product_price,
            'product_description'   => $product_description
        ];

        if(!empty($_FILES['product_image']['names'])) {
            $product_image = $this->request->getFile('product_image');
        $product_image_name = $product_image->getRandomName();

        $product_image->move('images/', $product_image_name);

        $data['product_image'] = $product_image_name;

        }

        $mProduct = new mProduct();
        $mProduct = $mProduct->where('id_product', $id_product)->set($data)->update();

        return redirect('admin/manajemen_produk');
    }
}
