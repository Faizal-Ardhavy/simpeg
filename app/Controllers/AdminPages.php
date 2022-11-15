<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\AlertError;
use App\Models\PegawaiModel;
use App\Models\PresensiModel;

class AdminPages extends BaseController
{
	public function dashboard()
	{
		$session = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$name['name'] = $session->get('pegawai_name');
		return view('admin/pages/dashboard', $name);
	}

	public function employee()
	{
		$session = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$userModel = new PegawaiModel();
		$data['name'] = $session->get('username');
		$data['employee'] = $userModel->find();
		return view('admin/pages/employee', $data);
	}
	public function updateProfile()
	{
		$session = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$id        = $session->get('username');
		$name    = $this->request->getPost('name');
		$date    = $this->request->getPost('date');
		$kelamin    = $this->request->getPost('kelamin');
		$address    = $this->request->getPost('address');
		$email    = $this->request->getPost('email');
		$phone    = $this->request->getPost('phone');
		$role    = $this->request->getPost('role');

		$data = [
			'username' => $id,
			'name' => $name,
			'tgl_lahir' => $date,
			'kelamin' => $kelamin,
			'alamat' => $address,
			'email' => $email,
			'no_telp' => $phone,
			'role' => $role,
		];

		$userModel = new PegawaiModel();

		$result =  $userModel->update($id, $data);
		if ($result) {
			return redirect()->to('employee');
		} else {
			echo "Something went wrong";
		}
	}

	public function payroll()
	{
		$session = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$userModel = new PegawaiModel();
		$data['name'] = $session->get('username');
		$data['employee'] = $userModel->find();
		return view('admin/pages/payroll', $data);
	}

	public function updatePayroll()
	{
		$session = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$id        = $session->get('username');
		$jabatan    = $this->request->getPost('jabatan');
		$gaji    = $this->request->getPost('gaji');

		$data = [
			'username' => $id,
			'jabatan' => $jabatan,
			'gaji' => $gaji,
		];

		$userModel = new PegawaiModel();

		$result =  $userModel->update($id, $data);
		if ($result) {
			return redirect()->to('employee');
		} else {
			echo "Something went wrong";
		}
	}

	public function presensi()
	{
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$presensiModel = new PresensiModel();
		$data["data"] = $presensiModel->findAll();
		return view('admin/pages/presensi', $data);
	}

	public function editEmployee()
	{
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$presensiModel = new PresensiModel();
		$data["data"] = $presensiModel->findAll();
		return view('admin/pages/editEmployee', $data);
	}

	public function editPayroll()
	{
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$presensiModel = new PresensiModel();
		$data["data"] = $presensiModel->findAll();
		return view('admin/pages/editPayroll', $data);
	}
}