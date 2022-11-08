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
                if($dataUser->role=="admin"){
                    session()->set([
                        'username' => $dataUser->username,
                        'admin' => TRUE,
                        'logged_in' => false,
                    ]);
                    return redirect()->to(base_url('dashboardAdmin'));
                }else{
                    session()->set([
                        'username' => $dataUser->username,
                        'logged_in' => TRUE,
                        'admin' => false
                    ]);
                    return redirect()->to(base_url('dashboard'));
                }


                
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