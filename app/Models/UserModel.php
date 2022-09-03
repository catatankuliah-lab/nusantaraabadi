<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['email', 'password', 'nama_lengkap', 'nomor_telepon'];
}