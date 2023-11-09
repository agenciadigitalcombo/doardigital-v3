<?php

namespace App\Controllers;

class Auth extends BaseController
{
    
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $username = trim($this->request->getPost('username'));
        $password = trim($this->request->getPost('password'));

        if ($username == 'admin@themesbrand.com' && $password == '123456') {
            $session = session();
            $session->set('isLoggedIn', 1);
            return redirect()->to('/painel');
        } else {
            return redirect()->back()->with('error', 'These credentials do not match our records.');
        }
    }

    public function teste()
    {
        return view('painel/teste');
    }

    public function logout()
    {
        $session = session();
        $session->remove('isLoggedIn');
        return redirect()->to('/painel');
    }

}
