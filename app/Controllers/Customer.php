<?php

namespace App\Controllers;

use App\Models\MobilModel;
use App\Models\BookingModel;
use App\Models\UserModel;

class Customer extends BaseController
{
    protected $mobil;
    protected $user;

    public function __construct()
    {
        $this->mobil = new MobilModel();
        $this->user  = new UserModel();
    }

    // ======================================================
    // HOME
    // ======================================================
    public function index()
    {
        $data = [
            'title' => 'Home',
            'mobil' => $this->mobil
                ->where('status', 'Tersedia')
                ->findAll()
        ];

        return view('customer/home', $data);
    }

    // ======================================================
    // DETAIL MOBIL
    // ======================================================
    public function detail($id)
    {
        $mobil = $this->mobil->find($id);

        if (!$mobil) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('customer/detail', [
            'title' => 'Detail Mobil',
            'mobil' => $mobil
        ]);
    }

    // ======================================================
    // BOOKING
    // ======================================================
    public function booking($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $mobil = $this->mobil->find($id);

        if (!$mobil) {
            return redirect()->to('/customer');
        }

        return view('customer/booking', [
            'title' => 'Booking Mobil',
            'mobil' => $mobil
        ]);
    }

    // ======================================================
    // SIMPAN BOOKING
    // ======================================================
    public function simpanBooking()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        $userId = session()->get('id');

        if (!$userId) {
            session()->destroy();

            return redirect()->to('/login')
                ->with('error', 'Session login telah berakhir.');
        }

        $bookingModel = new BookingModel();

        $mobilId = $this->request->getPost('mobil_id');

        $mobil = $this->mobil->find($mobilId);

        if (!$mobil) {
            return redirect()->back()
                ->with('error', 'Mobil tidak ditemukan.');
        }

        $tanggalSewa     = $this->request->getPost('tanggal_sewa');
        $tanggalKembali  = $this->request->getPost('tanggal_kembali');

        $lama = (strtotime($tanggalKembali) - strtotime($tanggalSewa)) / 86400;

        if ($lama < 1) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Tanggal kembali harus lebih besar dari tanggal sewa.');
        }

        $bookingModel->insert([

            'user_id'           => $userId,
            'mobil_id'          => $mobilId,
            'tanggal_sewa'      => $tanggalSewa,
            'tanggal_kembali'   => $tanggalKembali,
            'lama_sewa'         => $lama,
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'total_harga'       => $lama * $mobil['harga_sewa'],
            'status'            => 'Menunggu'

        ]);

        return redirect()->to('/customer/bookingSaya')
            ->with('success', 'Booking berhasil dibuat.');
    }

    // booking saya
    public function bookingSaya()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $bookingModel = new BookingModel();

        $booking = $bookingModel
            ->select('booking.*, mobil.nama_mobil, mobil.gambar')
            ->join('mobil', 'mobil.id = booking.mobil_id')
            ->where('booking.user_id', session()->get('id'))
            ->orderBy('booking.id', 'DESC')
            ->findAll();

        return view('customer/booking_saya', [
            'title'   => 'Booking Saya',
            'booking' => $booking
        ]);
    }

    // ======================================================
    // ABOUT
    // ======================================================
    public function about()
    {
        return view('customer/about', [
            'title' => 'About Us'
        ]);
    }

    // ======================================================
    // PROFIL
    // ======================================================
    public function profil()
    {
        $user = $this->user->find(session()->get('id'));

        return view('customer/profil', [
            'title' => 'Profil Saya',
            'user'  => $user
        ]);
    }

    // ======================================================
    // EDIT PROFIL
    // ======================================================
    public function editProfil()
    {
        $user = $this->user->find(session()->get('id'));

        return view('customer/edit_profil', [
            'title' => 'Edit Profil',
            'user'  => $user
        ]);
    }

    // ======================================================
    // UPDATE PROFIL
    // ======================================================
    public function updateProfil()
    {
        $userModel = new \App\Models\UserModel();

        $id = session()->get('id');

        $userModel->update($id, [

            'nama'      => $this->request->getPost('nama'),

            'username'  => $this->request->getPost('username'),

            'email'     => $this->request->getPost('email'),

            'no_telp'   => $this->request->getPost('no_telp')

        ]);

        $foto = $this->request->getFile('foto');

        $data = [

            'nama'     => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'no_telp'  => $this->request->getPost('no_telp')

        ];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {

            $namaFoto = $foto->getRandomName();

            $foto->move(FCPATH . 'uploads/profil', $namaFoto);

            $data['foto'] = $namaFoto;
        }

        $userModel->update($id, $data);

        // Update session
        session()->set([

            'nama'      => $this->request->getPost('nama'),

            'username'  => $this->request->getPost('username')

        ]);

        return redirect()->to('/customer/profil')
                        ->with('success', 'Profil berhasil diperbarui.');
    }

    // ======================================================
    // FORM UBAH PASSWORD
    // ======================================================
    public function ubahPassword()
    {
        return view('customer/ubah_password', [
            'title' => 'Ubah Password'
        ]);
    }

    // ======================================================
    // UPDATE PASSWORD
    // ======================================================
    public function updatePassword()
    {
        $id = session()->get('id');

        $user = $this->user->find($id);

        $passwordLama = $this->request->getPost('password_lama');
        $passwordBaru = $this->request->getPost('password_baru');
        $konfirmasi   = $this->request->getPost('konfirmasi_password');

        if (!password_verify($passwordLama, $user['password'])) {

            return redirect()->back()
                ->with('error', 'Password lama tidak sesuai.');

        }

        if ($passwordBaru != $konfirmasi) {

            return redirect()->back()
                ->with('error', 'Konfirmasi password tidak cocok.');

        }

        $this->user->update($id, [

            'password' => password_hash($passwordBaru, PASSWORD_DEFAULT)

        ]);

        return redirect()->to('/customer/profil')
            ->with('success', 'Password berhasil diubah.');
    }
}