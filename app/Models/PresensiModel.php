<?php

namespace App\Models;

use CodeIgniter\Model;

class PresensiModel extends Model
{
    protected $table = "presensi";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['id', 'user_presensi','tanggal','keterangan'];
}
