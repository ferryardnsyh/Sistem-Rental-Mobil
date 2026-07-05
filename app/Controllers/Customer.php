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
    public function detail($id)
    {
        $mobilModel = new \App\Models\MobilModel();

        $mobil = $mobilModel->find($id);

        if (!$mobil) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('customer/detail', [
            'title' => 'Detail Mobil',
            'mobil' => $mobil
        ]);
    }
    public function booking($id)
    {
        $mobilModel = new \App\Models\MobilModel();

        $mobil = $mobilModel->find($id);

        if (!$mobil) {
            return redirect()->to('/customer');
        }

        return view('customer/booking', [
            'title' => 'Booking Mobil',
            'mobil' => $mobil
        ]);
    }
    public function simpanBooking()
    {
        $bookingModel = new \App\Models\BookingModel();

        $tanggalSewa = $this->request->getPost('tanggal_sewa');
        $tanggalKembali = $this->request->getPost('tanggal_kembali');

        $lama = (strtotime($tanggalKembali) - strtotime($tanggalSewa)) / (60 * 60 * 24);

        if ($lama < 1) {

            return redirect()->back()->with('error', 'Tanggal kembali harus lebih besar dari tanggal sewa.');

        }

        $harga = $this->request->getPost('harga_sewa');

        $bookingModel->insert([

            'user_id' => session()->get('id'),

            'mobil_id' => $this->request->getPost('mobil_id'),

            'tanggal_sewa' => $tanggalSewa,

            'tanggal_kembali' => $tanggalKembali,

            'lama_sewa' => $lama,

            'total_harga' => $lama * $harga,

            'status' => 'Menunggu'

        ]);

        return redirect()->to('/customer/bookingSaya')
                        ->with('success', 'Booking berhasil dibuat.');
    }
    public function bookingSaya()
    {
        $bookingModel = new \App\Models\BookingModel();

        $booking = $bookingModel
            ->select('booking.*, mobil.nama_mobil, mobil.gambar')
            ->join('mobil', 'mobil.id = booking.mobil_id')
            ->where('booking.user_id', session()->get('id'))
            ->orderBy('booking.id', 'DESC')
            ->findAll();

        return view('customer/booking_saya',[
            'title'   => 'Booking Saya',
            'booking' => $booking
        ]);
    }
}