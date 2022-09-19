<?php

namespace App\Controllers\Direktur;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    function __construct()
    {
        $this->karyawan = new \App\Models\KaryawanModel();
        $this->manager = new \App\Models\UserModel();
    }


    public function index()
    {
        $data = [
            'judul' => 'SPK | CV Nusantara Abadi',
            'halaman' => 'Dashboard',
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => '',
        ];
        $query = $this->karyawan->jumlah();
        $data['karyawan'] = $query->getRow();
        $query = $this->manager->jumlah();
        $data['manager'] = $query->getRow();
        return view('direktur/dashboard', $data);
    }
}
