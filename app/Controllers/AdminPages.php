<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use CodeIgniter\Exceptions\AlertError;
use App\Models\PegawaiModel;
use App\Models\PresensiModel;

class AdminPages extends BaseController
{
	public function dashboard()
	{
		$session = session();
		if ($session->role != 'admin') {
			return redirect()->back();
		}
		$db = db_connect();
		$q = $db->query("select year(created_at) as yyyy,
       count(username) as jumlah
from pegawai
WHERE role = 'pegawai'
group by year(created_at)
order by yyyy");
		$year = array();
		$jumlah = array();
		foreach ($q->getResult() as $row) {
			array_push($jumlah, (int)$row->jumlah);
			array_push($year, $row->yyyy);
		}
		$data['year'] = $jumlah;
		$data['jumlah'] = $year;
		$data['name'] = $session->get('pegawai_name');
		return view('admin/pages/dashboard', $data);
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
		$id        = $this->request->getPost('id');
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
		// dd($data);
		$userModel = new PegawaiModel();

		$result =  $userModel->update($id, $data);
		if ($result) {
			return redirect()->to('AdminEmployee');
		} else {
			echo "Something went wrong";
		}
	}

	public function deleteEmployee($id)
	{
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$userModel = new PegawaiModel();
		$user = $userModel->where([
			'username' => $this->request->getPost('id'),
		])->delete();
		return redirect()->to(previous_url());
	}

	public function payroll()
	{
		$session = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$userModel = new PegawaiModel();
		$jabat = new JabatanModel();
		$dataAll['dataAll'] = [
			$name = $session->get('username'),
			$employee = $userModel->find(),
			$jabatan = $jabat->find()

        ];
		// dd($dataAll);
		return view('admin/pages/payroll', $dataAll);
	}

	public function updatePayroll()
	{
		$session = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$id        = $this->request->getPost('id');
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
			return redirect()->to('AdminPayroll');
		} else {
			echo "Something went wrong";
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

	public function editEmployee($id)
	{
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$data['data'] = $id;
		return view('admin/pages/editEmployee', $data);
		// dd($data);
	}

	public function editPayroll($id)
	{
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}

		$data['data'] = $id;
		return view('admin/pages/editPayroll', $data);
	}
	public function report(){
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		return view('admin/pages/laporan');
	}
}