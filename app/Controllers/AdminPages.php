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
group by year(created_at)
order by yyyy");
		$year = array();
		$jumlah = array();
		foreach ($q->getResult() as $row) {
			array_push($jumlah, (int)$row->jumlah);
			array_push($year, $row->yyyy);
		}
		
		if(count($year) < 2){
			$peningkatan = 0;
		}else{
			$l = count($year);
			$peningkatan = $jumlah[$l - 1] - $jumlah[$l - 2];
		}

		$data['year'] = $year;
		$data['jumlah'] = $jumlah;
		$data['peningkatan'] = $peningkatan;
		$data['jumlah_pegawai'] = array_sum($jumlah);
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
		// $user = $userModel->where([
		// 	'username' => $this->request->getPost('id'),
		// ])->delete();
		$userModel->delete($id);
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
			'jabatan' => $jabatan,
			'gaji' => $gaji,
		];

		$jabatan = new JabatanModel();

		$result =  $jabatan->update($id, $data);

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
		// $data['data'] = $id;
		$userModel = new PegawaiModel();
		$data['name'] = $session->get('username');
		// $data['employee'] = $userModel->where('username',$data['name'])->find();
		$data = [
			'data' => $id,
			'employee' => $userModel->where('username',$id)->get()->getRowArray(),
		];
		// dd($data);
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
		$jab = new JabatanModel();
		$userModel = new PegawaiModel();
		$data=[
			'data' => $id,
			'jabatan'=> $jab->where('user',$id)->get()->getRowArray(),
		];
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

	public function laporanJabatan(){
		$session  = session();
		if ($session->role != 'admin') {
			echo "<script type='text/javascript'>alert('Anda bukan admin');</script>";
			return redirect()->back();
		}
		$db = db_connect();
		$q = $db->query("select jabatan as jab,
       count(user) as jumlah
from jabatan
group by jabatan
order by jab");
		$jabatan = array();
		$jumlah = array();
		foreach ($q->getResult() as $row) {
			array_push($jumlah, (int)$row->jumlah);
			array_push($jabatan, $row->jab);
		}
		$data['jabatan'] = $jabatan;
		$data['jumlah'] = $jumlah;

		return view('admin/pages/laporan/jabatan', $data);
	}
}