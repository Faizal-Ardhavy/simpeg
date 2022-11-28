<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Login extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }
    public function process()
    {
        $users = new PegawaiModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                    session()->set([
                        'username' => $dataUser->username,
                        'role' => $dataUser->role,
                        'logged_in' => true,
                    ]);
                    return redirect()->to(base_url('Dashboard'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url() . '/login');
    }
}