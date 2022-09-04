<?php

namespace App\Controllers\Manager;

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
        return view('manager/penilaian', $data);
    }

    public function detail($id)
    {
        $query = $this->model->pilih($id);
        $data = ($query->getResult());

        return json_encode($data);
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

        if ($isDataValid) {
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

    public function tambah($bulan, $tahun)
    {

        $query = $this->model->seleksi($bulan, $tahun);
        $data['datapenilaian'] = ($query->getResult());
        $data['datakriteria'] = $this->kriteria->findAll();
        return json_encode($data);
    }

    public function tambahPenilaian()
    {
        $this->model->insert([
            "bulan" => $this->request->getPost('bulan'),
            "tahun" => $this->request->getPost('tahun'),
            "id_karyawan" => $this->request->getPost('id_karyawan'),
            "c1" => $this->request->getPost('c1'),
            "c2" => $this->request->getPost('c2'),
            "c3" => $this->request->getPost('c3'),
            "c4" => $this->request->getPost('c4'),
            "c5" => $this->request->getPost('c5'),
            "total" => $this->request->getPost('total')
        ]);

        $hasil['sukses'] = true;
        $hasil['error'] = false;
        $hasil['id'] = $this->request->getPost('id_karyawan');

        return json_encode($hasil);
    }
}
