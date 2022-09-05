<?php

namespace App\Controllers\Direktur;

use App\Controllers\BaseController;
use App\Models\PenilaianModel;
use App\Models\KaryawanModel;
use App\Models\KriteriaModel;

class PenilaianController extends BaseController
{
    function __construct()
    {
        $this->model = new PenilaianModel();
        $this->kriteria = new KriteriaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'SPK | CV Nusantara Abadi',
            'halaman' => 'Penilaian',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active',
        ];
        $karyawan = new KaryawanModel();
        $kriteria = new KriteriaModel();
        $data['datakaryawan'] = $karyawan->findAll();
        $data['datakriteria'] = $kriteria->findAll();
        return view('direktur/penilaian', $data);
    }

    public function detail($id)
    {
        $query = $this->model->pilih($id);
        $data = ($query->getResult());

        return json_encode($data);
    }
}
