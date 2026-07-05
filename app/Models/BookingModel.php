<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';

    protected $primaryKey = 'id';

    protected $allowedFields = [

        'user_id',

        'mobil_id',

        'tanggal_sewa',

        'tanggal_kembali',

        'lama_sewa',

        'total_harga',

        'metode_pembayaran',

        'status'

    ];

    protected $useTimestamps = true;
}