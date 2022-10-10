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
        return view('pages/dashboard');
    }

    public function login()
    {
        return view('pages/signin');
    }
}
