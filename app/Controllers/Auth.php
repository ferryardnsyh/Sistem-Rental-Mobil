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

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan email
        $user = $model->where('email', $email)->first();

        // Email tidak ditemukan
        if (!$user) {

            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Email tidak ditemukan.');

        }

        // Password salah
        if (!password_verify($password, $user['password'])) {

            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Password salah.');

        }

        // Simpan Session
        $session->set([

            'id'        => $user['id'],
            'nama'      => $user['nama'],
            'username'  => $user['username'],
            'email'     => $user['email'],
            'role'      => $user['role'],
            'logged_in' => true

        ]);

        // Redirect berdasarkan role
        if ($user['role'] == 'admin') {

            return redirect()->to('/dashboard');

        } elseif ($user['role'] == 'customer') {

            return redirect()->to('/customer');

        }

        // Jika role tidak valid
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

        // Konfirmasi password
        if ($this->request->getPost('password') != $this->request->getPost('konfirmasi_password')) {

            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Konfirmasi password tidak sesuai.');

        }

        // Username sudah digunakan
        if ($model->where('username', $this->request->getPost('username'))->first()) {

            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Username sudah digunakan.');

        }

        // Email sudah digunakan
        if ($model->where('email', $this->request->getPost('email'))->first()) {

            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Email sudah digunakan.');

        }

        // Simpan user baru
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