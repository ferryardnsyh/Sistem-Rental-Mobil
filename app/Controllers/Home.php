<?php

namespace App\Controllers;

use App\Models\MobilModel;

class Home extends BaseController
{
    public function index()
    {
        $mobilModel = new MobilModel();

        $data = [
            'title' => 'Home',
            'mobil' => $mobilModel
                ->where('status', 'Tersedia')
                ->findAll()
        ];

        return view('customer/home', $data);
    }
}