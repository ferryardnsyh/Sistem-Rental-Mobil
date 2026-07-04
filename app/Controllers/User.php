<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data = [

            'title' => 'Data User',

            'users' => $this->user->findAll()

        ];

        return view('user/index', $data);
    }

    public function tambah()
    {
        return view('user/tambah');
    }

    public function simpan()
    {
        $this->user->save([

            'nama'      => $this->request->getPost('nama'),

            'username'  => $this->request->getPost('username'),

            'email'     => $this->request->getPost('email'),

            'password'  => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),

            'role'      => $this->request->getPost('role')

        ]);

        return redirect()->to('/user')
                         ->with('success','User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [

            'title' => 'Edit User',

            'user' => $this->user->find($id)

        ];

        return view('user/edit',$data);
    }

    public function update($id)
    {
        $data = [

            'nama' => $this->request->getPost('nama'),

            'username' => $this->request->getPost('username'),

            'email' => $this->request->getPost('email'),

            'role' => $this->request->getPost('role')

        ];

        if($this->request->getPost('password') != ''){

            $data['password'] = password_hash(

                $this->request->getPost('password'),

                PASSWORD_DEFAULT

            );

        }

        $this->user->update($id,$data);

        return redirect()->to('/user')
                         ->with('success','User berhasil diupdate.');
    }

    public function hapus($id)
    {
        $this->user->delete($id);

        return redirect()->to('/user')
                         ->with('success','User berhasil dihapus.');
    }

}