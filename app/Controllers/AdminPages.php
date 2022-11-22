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
	public function laporan(){
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		return view('admin/pages/laporan');
	}

	public function laporanPresensi(){
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}

		$userModel = new PegawaiModel();
		$data['total'] = $userModel->countAllResults();

		$userModel = new PresensiModel();
		for ($i = 1; $i <= 12; $i++) {
			$c = 0;
			$temp = $userModel->where('YEAR(tanggal)', date('2022'))->where('MONTH(tanggal)', date($i))->findAll();
			foreach ($temp as $t) {
				if ($t->keterangan == 'hadir') {
					$c++;
				}
			}
			$presensi[$i] = $c;
		}

		$data['presensi'] = $presensi;

		// dd($data);
		return view('admin/pages/laporan/presensi', $data);
	}

	public function laporanGaji(){
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		return view('admin/pages/laporan/gaji');
	}
}