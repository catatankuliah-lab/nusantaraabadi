<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;

class KaryawanController extends BaseController
{
	function __construct()
	{
		$this->model = new \App\Models\KaryawanModel();
	}

	public function index()
	{
		$data = [
			'judul' => 'SPK | CV Nusantara Abadi',
			'halaman' => 'Karyawan',
			'aktif1' => '',
			'aktif2' => '',
			'aktif3' => 'active',
			'aktif4' => ''
		];
		$data['datanya'] = $this->model->findAll();
		return view('manager/karyawan', $data);
	}

	public function create()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'nama_lengkap' => [
				'label' => 'Nama Lengkap',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'jenis_kelamin' => [
				'label' => 'Jenis Kelamin',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
			'nomor_telepon' => [
				'label' => 'Nomor Telepon',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'tanggal_masuk' => [
				'label' => 'Tanggal Masuk',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'posisi' => [
				'label' => 'Posisi',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
		];

		$validasi->setRules($aturan);

		$isDataValid = $validasi->withRequest($this->request)->run();

		if ($isDataValid) {
			$this->model->insert([
				"nama_lengkap" => $this->request->getPost('nama_lengkap'),
				"jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
				"nomor_telepon" => $this->request->getPost('nomor_telepon'),
				"tanggal_masuk" => $this->request->getPost('tanggal_masuk'),
				"posisi" => $this->request->getPost('posisi')
			]);

			$hasil['sukses'] = true;
			$hasil['error'] = false;
		} else {

			$hasil['sukses'] = false;
			$hasil['error'] = $validasi->listErrors();
		}

		return json_encode($hasil);
	}

	public function detail($id)
	{
		return json_encode($this->model->find($id));
	}

	public function edit($id)
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'nama_lengkap' => [
				'label' => 'Nama Lengkap',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'jenis_kelamin' => [
				'label' => 'Jenis Kelamin',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
			'nomor_telepon' => [
				'label' => 'Nomor Telepon',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'tanggal_masuk' => [
				'label' => 'Tanggal Masuk',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'posisi' => [
				'label' => 'Posisi',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
		];

		$validasi->setRules($aturan);

		$isDataValid = $validasi->withRequest($this->request)->run();

		if ($isDataValid) {
			$this->model->update($id, [
				"nama_lengkap" => $this->request->getPost('nama_lengkap'),
				"jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
				"nomor_telepon" => $this->request->getPost('nomor_telepon'),
				"tanggal_masuk" => $this->request->getPost('tanggal_masuk'),
				"posisi" => $this->request->getPost('posisi')
			]);

			$hasil['sukses'] = true;
			$hasil['error'] = false;
		} else {

			$hasil['sukses'] = false;
			$hasil['error'] = $validasi->listErrors();
		}

		return json_encode($hasil);
	}

	public function delete($id)
	{
		$this->model->delete($id);
	}
}
