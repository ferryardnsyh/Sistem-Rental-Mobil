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

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}