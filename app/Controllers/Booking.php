<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\MobilModel;

class Booking extends BaseController
{
    protected $booking;
    protected $mobil;

    public function __construct()
    {
        $this->booking = new BookingModel();
        $this->mobil = new MobilModel();

        if (!session()->get('logged_in')) {
            exit(redirect()->to('/login'));
        }
    }

    public function index()
    {
        $builder = $this->booking
            ->select('booking.*, users.nama, mobil.nama_mobil')
            ->join('users', 'users.id = booking.user_id')
            ->join('mobil', 'mobil.id = booking.mobil_id');

        // Customer hanya melihat booking miliknya
        if (session()->get('role') == 'customer') {
            $builder->where('booking.user_id', session()->get('id'));
        }

        $data = [
            'title'   => 'Data Booking',
            'booking' => $builder->findAll()
        ];

        return view('booking/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Booking Mobil',
            'mobil' => $this->mobil
                ->where('status', 'Tersedia')
                ->findAll()
        ];

        return view('booking/tambah', $data);
    }

    public function simpan()
    {
        $this->booking->save([

            'user_id' => session()->get('id'),

            'mobil_id' => $this->request->getPost('mobil_id'),

            'tanggal_sewa' => $this->request->getPost('tanggal_sewa'),

            'tanggal_kembali' => $this->request->getPost('tanggal_kembali'),

            'lama_sewa' => $this->request->getPost('lama_sewa'),

            'total_harga' => $this->request->getPost('total_harga'),

            'status' => 'Menunggu'

        ]);

        return redirect()->to('/booking')
            ->with('success', 'Booking berhasil dibuat.');
    }

    public function setujui($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('/dashboard')
                ->with('error', 'Akses ditolak.');
        }

        $booking = $this->booking->find($id);

        if (!$booking) {
            return redirect()->back()
                ->with('error', 'Booking tidak ditemukan.');
        }

        $this->booking->update($id, [
            'status' => 'Disetujui'
        ]);

        $this->mobil->update($booking['mobil_id'], [
            'status' => 'Disewa'
        ]);

        return redirect()->to('/booking')
            ->with('success', 'Booking berhasil disetujui.');
    }

    public function tolak($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('/dashboard')
                ->with('error', 'Akses ditolak.');
        }

        $booking = $this->booking->find($id);

        if (!$booking) {
            return redirect()->back()
                ->with('error', 'Booking tidak ditemukan.');
        }

        $this->booking->update($id, [
            'status' => 'Dibatalkan'
        ]);

        return redirect()->to('/booking')
            ->with('success', 'Booking berhasil ditolak.');
    }

    public function selesai($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('/dashboard')
                ->with('error', 'Akses ditolak.');
        }

        $booking = $this->booking->find($id);

        if (!$booking) {
            return redirect()->back()
                ->with('error', 'Booking tidak ditemukan.');
        }

        // Update status booking
        $this->booking->update($id, [
            'status' => 'Selesai'
        ]);

        // Mobil tersedia kembali
        $this->mobil->update($booking['mobil_id'], [
            'status' => 'Tersedia'
        ]);

        return redirect()->to('/booking')
            ->with('success', 'Booking telah selesai.');
    }
}