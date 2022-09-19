<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = "karyawan";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_lengkap', 'jenis_kelamin', 'nomor_telepon', 'tanggal_masuk', 'posisi'];

    public function jumlah()
    {
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT COUNT(id) FROM karyawan");
        return $query;
    }
}
