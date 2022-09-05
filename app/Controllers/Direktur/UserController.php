<?php

namespace App\Controllers\Direktur;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
	function __construct()
	{
		$this->model = new \App\Models\UserModel();
	}

	public function index()
	{
		$data = [
			'judul' => 'SPK | CV Nusantara Abadi',
			'halaman' => 'Manager',
			'aktif1' => '',
			'aktif2' => 'active',
			'aktif3' => '',
			'aktif4' => '',
		];
		$model = new UserModel();
		$data['datanya'] = $model->findAll();
		return view('direktur/user', $data);
	}

	public function create()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'email' => [
				'label' => 'Email',
				'rules' => 'required|min_length[5]|valid_email',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter',
					'valid_email' => 'Email yang kamu masukkan tidak valid'
				]
			],
			'password' => [
				'label' => 'Password',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'nama_lengkap' => [
				'label' => 'Nama Lengkap',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
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
		];

		$validasi->setRules($aturan);

		$isDataValid = $validasi->withRequest($this->request)->run();

		if ($isDataValid) {
			$model = new UserModel();
			$model->insert([
				"email" => $this->request->getPost('email'),
				"password" => $this->request->getPost('password'),
				"nama_lengkap" => $this->request->getPost('nama_lengkap'),
				"nomor_telepon" => $this->request->getPost('nomor_telepon')
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
			'email' => [
				'label' => 'Email',
				'rules' => 'required|min_length[5]|valid_email',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter',
					'valid_email' => 'Email yang kamu masukkan tidak valid'
				]
			],
			'password' => [
				'label' => 'Password',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'nama_lengkap' => [
				'label' => 'Nama Lengkap',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
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
		];

		$validasi->setRules($aturan);

		$isDataValid = $validasi->withRequest($this->request)->run();

		if ($isDataValid) {
			$model = new UserModel();
			$model->update($id, [
				"email" => $this->request->getPost('email'),
				"password" => $this->request->getPost('password'),
				"nama_lengkap" => $this->request->getPost('nama_lengkap'),
				"nomor_telepon" => $this->request->getPost('nomor_telepon')
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
		$hasil['sukses'] = true;
		$hasil['error'] = false;
		$this->model->delete($id);
	}
}
