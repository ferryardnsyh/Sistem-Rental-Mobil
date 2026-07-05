<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama',
        'username',
        'email',
        'no_telp',
        'foto',
        'password',
        'role'
    ];

    protected $useTimestamps = true;
}