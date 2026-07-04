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

    $model = new \App\Models\UserModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = $model->where('username', $username)->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Username tidak ditemukan.');
    }

    if (!password_verify($password, $user['password'])) {
        return redirect()->back()->with('error', 'Password salah.');
    }

    $session->set([
        'id'        => $user['id'],
        'nama'      => $user['nama'],
        'username'  => $user['username'],
        'role'      => $user['role'],
        'logged_in' => true,
    ]);

    return redirect()->to('/dashboard');
}

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}