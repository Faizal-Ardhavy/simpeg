<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\AlertError;

class AdminPages extends BaseController
{
	public function dashboard()
	{
		$session = session();
		if($session->role!='admin'){
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
		$name['name'] = $session->get('pegawai_name');
		return view('admin/pages/employee', $name);
	}
}