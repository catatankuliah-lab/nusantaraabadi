<?php

namespace App\Controllers\Direktur;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;

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
            'aktif4' => '',
        ];
        $data['datanya'] = $this->model->findAll();
        return view('direktur/karyawan', $data);
    }

    public function detail($id)
    {
        return json_encode($this->model->find($id));
    }

}
