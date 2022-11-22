<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\PresensiModel;

class Pages extends BaseController
{
    private function checkRole()
    {
        $session = session();
        if ($session->role == 'pegawai') {
            return true;
        } else {
            echo "<script type='text/javascript'>alert('Anda bukan pegawai');</script>";
            return false;
        }
    }
    public function index()
    {
        return view('welcome_message');
    }
    public function presensi()
    {
        if (!$this->checkRole()) {
            return redirect()->back();
        }
        $session = session();
        $userModel = new PresensiModel();
        $data['data'] = $userModel->where('user_presensi', $session->get('username'))->findAll();
        // dd($data['data']);
        return view('pages/presensi', $data);
    }
    public function dashboard()
    {
        if (!$this->checkRole()) {
            return redirect()->back();
        }
        $session = session();
        $name['name'] = $session->get('pegawai_name');
        return view('pages/dashboard', $name);
    }

    public function profile()
    {
        if (!$this->checkRole()) {
            return redirect()->back();
        }
        $session = session();
        $userModel = new PegawaiModel();

        $data['data'] = $userModel->where('username', $session->get('username'))->first();

        return view('pages/profile', $data);
    }

    public function payroll()
    {
        if (!$this->checkRole()) {
            return redirect()->back();
        }
        $session = session();
        $userModel = new PegawaiModel();

        $data['data'] = $userModel->where('username', $session->get('username'))->first();

        return view('pages/payroll', $data);
    }

    public function paymentMethod()
    {
        if (!$this->checkRole()) {
            return redirect()->back();
        }
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
    public function laporan(){
        if (!$this->checkRole()) {
            return redirect()->back();
        }
        return view('pages/laporan');
    }

	public function laporanPresensi(){
        if (!$this->checkRole()) {
            return redirect()->back();
        }

        $session = session();

        $userModel = new PegawaiModel();
        $data['profile'] = $userModel->where('username', $session->get('username'))->first();

        $userModel = new PresensiModel();
        for($i = 1; $i<=12; $i++) {
            $c = 0;
            $temp = $userModel->where('user_presensi', $session->get('username'))->where('YEAR(tanggal)', date('2022'))->where('MONTH(tanggal)', date($i))->findAll();
            foreach($temp as $t){
                if($t->keterangan == 'hadir'){
                    $c++;
                }
            }
            $presensi[$i] = $c;
        }

        $data['presensi'] = $presensi;

        // dd($data);
        return view('pages/laporan/presensi', $data);
    }

	public function laporanGaji(){
        if (!$this->checkRole()) {
            return redirect()->back();
        }

        $session = session();

        $userModel = new PegawaiModel();
        $data['profile'] = $userModel->where('username', $session->get('username'))->first();

        $userModel = new PresensiModel();
        $data['presensi'] = $userModel->where('user_presensi', $session->get('username'))->findAll();

        return view('pages/laporan/gaji', $data);
    }

    public function login()
    {
        return view('pages/login');
    }
    public function updateProfile()
    {
        if (!$this->checkRole()) {
            return redirect()->back();
        }
        $session = session();
        $id        = $session->get('username');
        $name    = $this->request->getPost('name');
        $date    = $this->request->getPost('date');
        $kelamin        = $this->request->getPost('kelamin');
        $address        = $this->request->getPost('address');
        $email        = $this->request->getPost('email');
        $phone        = $this->request->getPost('phone');

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
        if ($result) {
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
