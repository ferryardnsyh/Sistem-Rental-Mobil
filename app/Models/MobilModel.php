<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
    protected $table = 'mobil';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_mobil',
        'merk',
        'plat_nomor',
        'tahun',
        'transmisi',
        'harga_sewa',
        'status',
        'gambar'
    ];

    protected $useTimestamps = true;
}