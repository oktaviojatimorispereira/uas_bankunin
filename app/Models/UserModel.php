<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'bankunin';
    protected $primaryKey = 'id_user';
    protected $returnType = 'array';
    protected $allowedFields = ['no_rekening', 'status', 'total_tabungan'];
}
