<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $session = session();

        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        // Username tidak ditemukan
        if (!$user) {
            return redirect()->back()->with('error', 'Username tidak ditemukan.');
        }

        // Password salah
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah.');
        }

        // Simpan Session
        $session->set([
            'id'        => $user['id'],
            'nama'      => $user['nama'],
            'username'  => $user['username'],
            'role'      => $user['role'],
            'logged_in' => true,
        ]);

        // Redirect berdasarkan role
        if ($user['role'] == 'admin') {

            return redirect()->to('/dashboard');

        } elseif ($user['role'] == 'customer') {

            return redirect()->to('/customer');

        }

        // Jika role tidak dikenali
        session()->destroy();

        return redirect()->to('/login')
                         ->with('error', 'Role pengguna tidak valid.');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        $model = new UserModel();

        if ($this->request->getPost('password') != $this->request->getPost('konfirmasi_password')) {

            return redirect()->back()->with('error', 'Konfirmasi password tidak sesuai.');

        }

        if ($model->where('username', $this->request->getPost('username'))->first()) {

            return redirect()->back()->with('error', 'Username sudah digunakan.');

        }

        if ($model->where('email', $this->request->getPost('email'))->first()) {

            return redirect()->back()->with('error', 'Email sudah digunakan.');

        }

        $model->save([

            'nama'      => $this->request->getPost('nama'),

            'username'  => $this->request->getPost('username'),

            'email'     => $this->request->getPost('email'),

            'no_telp'   => $this->request->getPost('no_telp'),

            'password'  => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),

            'role'      => 'customer'

        ]);

        return redirect()->to('/login')
                        ->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}