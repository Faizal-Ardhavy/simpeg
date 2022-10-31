<?php

namespace App\Controllers;
use App\Models\PegawaiModel;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function presensi()
    {
        return view('pages/presensi');
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
        $userModel = new PegawaiModel();

        $data['data'] = $userModel->where('username', $session->get('username'))->first();

        return view('pages/profile', $data);
    }
    
    public function payroll()
    {
        $session = session();
        $userModel = new PegawaiModel();

        $data['data'] = $userModel->where('username', $session->get('username'))->first();

        return view('pages/payroll', $data);
    }

    public function paymentMethod()
    {
        $session = session();
        $id        = $session->get('username');
        $bank    = $this->request->getPost('bank');
        $card    = $this->request->getPost('card');
        $exp    = $this->request->getPost('exp');

        $data = [
            'bank' => $bank,
            'rekening' => $card,
            'tgl_kadaluarsa' => $exp,
        ];
        $userModel = new PegawaiModel();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return redirect()->to('payroll');
        } else {
            echo "Something went wrong";
        }
    }

    public function login()
    {
        return view('pages/login');
    }
    public function updateProfile()
    {
        $session = session();
        $id		= $session->get('username');
		$name	= $this->request->getPost('name');
		$date	= $this->request->getPost('date');
		$kelamin		= $this->request->getPost('kelamin');
		$address		= $this->request->getPost('address');
		$email		= $this->request->getPost('email');
		$phone		= $this->request->getPost('phone');

		$data = [
            'name' => $name,
            'tgl_lahir' => $date,
            'kelamin' => $kelamin,
            'alamat' => $address,
            'email' => $email,	
            'no_telp' => $phone,	
		];
        $userModel = new PegawaiModel();

		$result =  $userModel->update($id, $data);
		if($result) {
			return redirect()->to('profile');
		} else {
			echo "Something went wrong";
		}
    }

    public function signup()
    {
        return view('pages/register');
    }
}
