<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function landing()
    {
        return view('landing');
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function obrigado()
    {
        return view('obrigado');
    }




    public function root($path = '')
    {
        if ($path !== '') {
            if(@file_exists(APPPATH.'Views/'.$path.'.php')) {
                return view($path);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            echo 'Page Not Found.';
        }
    }
}
