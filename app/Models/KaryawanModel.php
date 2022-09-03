<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = "karyawan";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_lengkap', 'jenis_kelamin','nomor_telepon','tanggal_masuk','posisi'];
}