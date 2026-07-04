<?php

namespace App\Controllers;

use App\Models\MobilModel;

class Mobil extends BaseController
{
    protected $mobil;

    public function __construct()
    {
        $this->mobil = new MobilModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Mobil',
            'mobil' => $this->mobil->findAll()
        ];

        return view('mobil/index', $data);
    }

    public function tambah()
    {
        return view('mobil/tambah');
    }

    public function simpan()
{
    $gambar = $this->request->getFile('gambar');

    $namaGambar = '';

    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
        $namaGambar = $gambar->getRandomName();
        $gambar->move(FCPATH . 'uploads/mobil', $namaGambar);
    }

    $this->mobil->save([
        'nama_mobil' => $this->request->getPost('nama_mobil'),
        'merk'       => $this->request->getPost('merk'),
        'plat_nomor' => $this->request->getPost('plat_nomor'),
        'tahun'      => $this->request->getPost('tahun'),
        'transmisi'  => $this->request->getPost('transmisi'),
        'harga_sewa' => $this->request->getPost('harga_sewa'),
        'status'     => $this->request->getPost('status'),
        'gambar'     => $namaGambar
    ]);

    return redirect()->to('/mobil')->with('success', 'Data berhasil ditambahkan.');
}

    public function edit($id)
    {
        $data['mobil'] = $this->mobil->find($id);

        return view('mobil/edit', $data);
    }

    public function update($id)
{
    $mobil = $this->mobil->find($id);

    $gambar = $this->request->getFile('gambar');

    $namaGambar = $mobil['gambar'];

    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {

        if (!empty($mobil['gambar']) &&
            file_exists(FCPATH.'uploads/mobil/'.$mobil['gambar'])) {

            unlink(FCPATH.'uploads/mobil/'.$mobil['gambar']);
        }

        $namaGambar = $gambar->getRandomName();

        $gambar->move(FCPATH.'uploads/mobil',$namaGambar);
    }

    $this->mobil->update($id,[

        'nama_mobil'=>$this->request->getPost('nama_mobil'),

        'merk'=>$this->request->getPost('merk'),

        'plat_nomor'=>$this->request->getPost('plat_nomor'),

        'tahun'=>$this->request->getPost('tahun'),

        'transmisi'=>$this->request->getPost('transmisi'),

        'harga_sewa'=>$this->request->getPost('harga_sewa'),

        'status'=>$this->request->getPost('status'),

        'gambar'=>$namaGambar

    ]);

    return redirect()->to('/mobil')
                     ->with('success','Data berhasil diperbarui');
}

    public function hapus($id)
{
    $mobil = $this->mobil->find($id);

    if (!$mobil) {
        return redirect()->to('/mobil')
            ->with('error', 'Data mobil tidak ditemukan.');
    }

    // Hapus gambar jika ada
    if (!empty($mobil['gambar'])) {

        $path = FCPATH . 'uploads/mobil/' . $mobil['gambar'];

        if (file_exists($path)) {
            unlink($path);
        }
    }

    // Hapus data dari database
    $this->mobil->delete($id);

    return redirect()->to('/mobil')
        ->with('success', 'Data mobil berhasil dihapus.');
}
}