<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Logout extends BaseController
{

    protected $request;
    protected $session;

    public function __construct()
    {
        $session = \Config\Services::session();
        $this->session = $session;
    }

    public function process()
    {
        $this->session->remove('login_status');
        $this->session->remove('admin_email');

        return redirect('login');
    }
}
