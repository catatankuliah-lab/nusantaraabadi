<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;

class KriteriaController extends BaseController
{
    function __construct()
	{
		$this->model = new \App\Models\KriteriaModel();
	}

    public function index()
    {
        $data = [
            'judul' => 'SPK | CV Nusantara Abadi',
            'halaman' => 'Kriteria',
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'aktif4' => '',
        ];
        $model = new KriteriaModel();
        $data['datanya'] = $model->findAll();
        return view('manager/kriteria', $data);
    }

    public function detail($id)
    {
        return json_encode($this->model->find($id));
    }

    public function edit($id)
    {
        $validasi  = \Config\Services::validation();
		$aturan = [
			'nama_kriteria' => [
				'label' => 'Nama Kriteria',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
            'bobot' => [
				'label' => 'Bobot',
				'rules' => 'required|min_length[1]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 1 karakter'
				]
			]
		];
        
        $validasi->setRules($aturan);

        $isDataValid = $validasi->withRequest($this->request)->run();

        if($isDataValid){
            $this->model->update($id, [
                "nama_kriteria" => $this->request->getPost('nama_kriteria'),
                "bobot" => $this->request->getPost('bobot')
            ]);

            $hasil['sukses'] = true;
			$hasil['error'] = false;

        } else {

            $hasil['sukses'] = false;
			$hasil['error'] = $validasi->listErrors();

        }

		return json_encode($hasil);

        
    }
}
