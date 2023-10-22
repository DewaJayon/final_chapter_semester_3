<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Libraries\Main;

class Login extends BaseController
{

    protected $request;
    protected $session;

    public function __construct()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();
        $this->request = $request;
        $this->session = $session;
    }
    public function index(): string
    {
        Main::check_login();
        return view('auth/login',);
    }

    public function process()
    {

        $akun_email = 'dewajayon3@gmail.com';
        $akun_password = 'password';

        $input_email = $this->request->getVar('email');
        $input_password = $this->request->getVar('password');

        if ($akun_email == $input_email && $akun_password == $input_password) {
            $this->session->set('login_status', TRUE);
            $this->session->set('admin_email', $akun_email);
            return redirect('admin');
        } else {
            return redirect('login');
        }
    }
}
