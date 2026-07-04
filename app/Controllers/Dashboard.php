<?php

namespace App\Controllers;

use App\Models\MobilModel;
use App\Models\UserModel;
use App\Models\BookingModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $mobilModel   = new MobilModel();
        $bookingModel = new BookingModel();
        $userModel    = new UserModel();

        // Total Mobil
        $totalMobil = $mobilModel->countAllResults();

        // Total Booking
        $totalBooking = $bookingModel->countAllResults();

        // Total Customer
        $totalCustomer = $userModel
                            ->where('role', 'customer')
                            ->countAllResults();

        // Total Pendapatan (booking selesai)
        $pendapatan = $bookingModel
                        ->selectSum('total_harga')
                        ->where('status', 'Selesai')
                        ->first();

        // Booking Terbaru
        $bookingTerbaru = $bookingModel
            ->select('booking.*, users.nama, mobil.nama_mobil')
            ->join('users', 'users.id = booking.user_id')
            ->join('mobil', 'mobil.id = booking.mobil_id')
            ->orderBy('booking.id', 'DESC')
            ->limit(5)
            ->find();

        $data = [

            'title' => 'Dashboard',

            'totalMobil' => $totalMobil,

            'totalBooking' => $totalBooking,

            'totalCustomer' => $totalCustomer,

            'pendapatan' => $pendapatan['total_harga'] ?? 0,

            'bookingTerbaru' => $bookingTerbaru

        ];

        return view('dashboard/index', $data);
    }
}