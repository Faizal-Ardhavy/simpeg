<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminPages extends BaseController
{
	public function dashboard()
	{
		$session = session();
		$name['name'] = $session->get('pegawai_name');
		return view('admin/pages/dashboard', $name);
	}

	public function employee()
	{
		$session = session();
		$name['name'] = $session->get('pegawai_name');
		return view('admin/pages/employee', $name);
	}
}