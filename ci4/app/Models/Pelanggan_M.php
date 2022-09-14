<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelanggan_M extends Model
{
    protected $table = 'tblpelanggan';

    protected $allowedFields = ['aktif'];

    protected $primaryKey = 'idpelanggan';

    // protected $validationRules  = [
    //     'kategori'     => 'alpha_numeric_space|min_length[3]|is_unique[tblkategori.kategori]',
    // ];

    // protected $validationMessages  = [
    //     'kategori' => [
    //         'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
    //         'min_length' => 'Minimal 3 huruf',
    //         'is_unique' => 'Ada data yang sama'
    //     ]
    // ];
}
