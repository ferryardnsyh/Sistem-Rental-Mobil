<?php

namespace App\Controllers;

use App\Models\MobilModel;

class Customer extends BaseController
{
    protected $mobil;

    public function __construct()
    {
        $this->mobil = new MobilModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'mobil' => $this->mobil
                            ->where('status','Tersedia')
                            ->findAll()
        ];

        return view('customer/home', $data);
    }
}