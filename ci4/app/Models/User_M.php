<?php

namespace App\Models;

use CodeIgniter\Model;

class User_M extends Model
{
    protected $table = 'tbluser';
    protected $allowedFields = ['user', 'email', 'password', 'level', 'aktif'];
    protected $primaryKey = 'iduser';
}
