<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;

class Admin extends BaseController
{
    public function index(): string
    {
        Main::check_admin();
        return view('admin/home', []);
    }
}
