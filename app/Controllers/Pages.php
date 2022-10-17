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

    public function profile()
    {
        $session = session();
        $name['name'] = $session->get('pegawai_name');
        return view('pages/profile', $name);
    }

    public function login()
    {
        return view('pages/login');
    }

    public function signup()
    {
        return view('pages/register');
    }
}
