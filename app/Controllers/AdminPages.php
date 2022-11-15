<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\AlertError;
use App\Models\PegawaiModel;

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
}