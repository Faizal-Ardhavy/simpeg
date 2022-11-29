<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['id', 'user','jabatan','gaji'];
}
