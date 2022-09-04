<?php

namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table = "penilaian";
    protected $primaryKey = "id_p";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['bulan', 'tahun', 'id_karyawan', 'c1', 'c2', 'c3', 'c4', 'c5'];

    public function seleksi($bulan, $tahun)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM penilaian JOIN karyawan ON karyawan.id = penilaian.id_karyawan WHERE bulan = '$bulan' AND tahun = '$tahun'");
        return $query;
    }

    public function pilih($idp)
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM penilaian JOIN karyawan ON karyawan.id = penilaian.id_karyawan WHERE id_p = '$idp'");
        return $query;
    }
}
