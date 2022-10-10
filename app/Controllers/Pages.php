<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function dashboard()
    {
        $session = session();
        $name['name'] = $session->get('pegawai_name');
        return view('pages/dashboard', $name);
    }

    public function login()
    {
        return view('pages/signin');
    }

    public function signup()
    {
        return view('pages/signup');
    }
}
