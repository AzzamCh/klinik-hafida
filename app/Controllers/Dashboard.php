<?php

namespace App\Controllers;

use App\Models\DokterModel;
use App\Models\PoliModel;
use App\Models\ArtikelModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // 1. Cek Apakah Sudah Login?
        if(!session()->get('logged_in')){
            return redirect()->to('/login'); 
        }

        // 2. Siapkan Model untuk Hitung Data
        $dokterModel = new DokterModel();
        $poliModel = new PoliModel();

        // 3. Ambil Data Statistik
        $data = [
            'count_dokter' => $dokterModel->countAll(), // Hitung total dokter
            'count_poli'   => $poliModel->countAll(),   // Hitung total poli
            'username'     => session()->get('username')
        ];

        return view('dashboard/home', $data);
    }

    // ... fungsi index() yang tadi ada di atas ...

    public function dokter()
    {
        // Cek Login
        if(!session()->get('logged_in')){
            return redirect()->to('/login'); 
        }

        $dokterModel = new DokterModel();
        
        $data = [
            'username' => session()->get('username'),
            'dokter'   => $dokterModel->findAll() // Ambil semua data dokter
        ];

        return view('dashboard/dokter', $data);
    }

    // 1. Menampilkan Form Tambah Dokter
    public function dokter_create()
    {
        if(!session()->get('logged_in')){ return redirect()->to('/login'); }

        $data = ['username' => session()->get('username')];
        return view('dashboard/dokter_create', $data);
    }

    // 2. Proses Simpan Data Dokter (Termasuk Upload Foto)
    public function dokter_store()
    {
        $dokterModel = new DokterModel();

        // Ambil file foto dari form
        $fileFoto = $this->request->getFile('foto');

        // Cek apakah ada file yang diupload?
        if ($fileFoto->isValid() && ! $fileFoto->hasMoved()) {
            // Generate nama file unik (biar gak bentrok)
            $namaFoto = $fileFoto->getRandomName();
            // Pindahkan file ke folder assets/img/doctors
            $fileFoto->move('assets/img/doctors/', $namaFoto);
        } else {
            // Kalau gak upload foto, pakai foto default (opsional)
            $namaFoto = 'default.jpg'; 
        }

        // Simpan data ke Database
        $dokterModel->save([
            'nama_dokter'  => $this->request->getPost('nama_dokter'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'jadwal'       => $this->request->getPost('jadwal'),
            'foto'         => $namaFoto
        ]);

        return redirect()->to('/dashboard/dokter');
    }
    // --- FITUR EDIT ---

    // 1. Tampilkan Form Edit dengan Data Lama
    public function dokter_edit($id)
    {
        if(!session()->get('logged_in')){ return redirect()->to('/login'); }

        $dokterModel = new DokterModel();
        
        $data = [
            'username' => session()->get('username'),
            'dokter'   => $dokterModel->find($id) // Ambil data berdasarkan ID
        ];

        if (!$data['dokter']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data dokter tidak ditemukan.");
        }

        return view('dashboard/dokter_edit', $data);
    }

    // 2. Proses Update Data
    public function dokter_update($id)
    {
        $dokterModel = new DokterModel();
        
        // Cek apakah user upload foto baru?
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->isValid() && ! $fileFoto->hasMoved()) {
            // Kalau upload baru: Generate nama & Pindahkan file
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('assets/img/doctors/', $namaFoto);
        } else {
            // Kalau TIDAK upload: Pakai nama foto lama (hidden input)
            $namaFoto = $this->request->getPost('foto_lama');
        }

        // Update Database
        $dokterModel->update($id, [
            'nama_dokter'  => $this->request->getPost('nama_dokter'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'jadwal'       => $this->request->getPost('jadwal'),
            'foto'         => $namaFoto
        ]);

        return redirect()->to('/dashboard/dokter');
    }

    // --- FITUR DELETE ---

    // 3. Hapus Data Dokter
    public function dokter_delete($id)
    {
        $dokterModel = new DokterModel();
        $dokterModel->delete($id);
        return redirect()->to('/dashboard/dokter');
    }

    // =================================================================
    // KELOLA POLI (LAYANAN)
    // =================================================================

    // 1. Tampilkan Daftar Poli
    public function poli()
    {
        $poliModel = new PoliModel();
        $data = [
            'username' => session()->get('username'),
            'poli'     => $poliModel->findAll()
        ];
        return view('dashboard/poli', $data);
    }

    // 2. Form Tambah Poli
    public function poli_create()
    {
        $data = ['username' => session()->get('username')];
        return view('dashboard/poli_create', $data);
    }

    // 3. Proses Simpan Poli
    public function poli_store()
    {
        $poliModel = new PoliModel();
        
        // Buat slug otomatis dari nama (Contoh: "Poli Gigi" -> "poli-gigi")
        $nama = $this->request->getPost('nama_poli');
        $slug = url_title($nama, '-', true);

        $poliModel->save([
            'nama_poli' => $nama,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'icon'      => $this->request->getPost('icon'),
            'slug'      => $slug
        ]);

        return redirect()->to('/dashboard/poli');
    }

    // 4. Form Edit Poli
    public function poli_edit($id)
    {
        $poliModel = new PoliModel();
        $data = [
            'username' => session()->get('username'),
            'poli'     => $poliModel->find($id)
        ];
        return view('dashboard/poli_edit', $data);
    }

    // 5. Proses Update Poli
    public function poli_update($id)
    {
        $poliModel = new PoliModel();
        
        $nama = $this->request->getPost('nama_poli');
        $slug = url_title($nama, '-', true);

        $poliModel->update($id, [
            'nama_poli' => $nama,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'icon'      => $this->request->getPost('icon'),
            'slug'      => $slug
        ]);

        return redirect()->to('/dashboard/poli');
    }

    // 6. Hapus Poli
    public function poli_delete($id)
    {
        $poliModel = new PoliModel();
        $poliModel->delete($id);
        return redirect()->to('/dashboard/poli');
    }

    // =================================================================
    // KELOLA ARTIKEL (BERITA)
    // =================================================================

    // 1. Tampilkan Daftar Artikel
    public function artikel()
    {
        $artikelModel = new ArtikelModel();
        $data = [
            'username' => session()->get('username'),
            'artikel'  => $artikelModel->orderBy('tanggal', 'DESC')->findAll()
        ];
        return view('dashboard/artikel', $data);
    }

    // 2. Form Tambah Artikel
    public function artikel_create()
    {
        $data = ['username' => session()->get('username')];
        return view('dashboard/artikel_create', $data);
    }

    // 3. Proses Simpan Artikel
    public function artikel_store()
    {
        $artikelModel = new ArtikelModel();
        
        // Handle Upload Gambar
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->isValid() && ! $fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/blog/', $namaGambar);
        } else {
            $namaGambar = null; // Boleh kosong (nanti pakai gambar default di view)
        }

        // Buat slug dari judul
        $slug = url_title($this->request->getPost('judul'), '-', true);

        $artikelModel->save([
            'judul'       => $this->request->getPost('judul'),
            'slug'        => $slug,
            'isi_artikel' => $this->request->getPost('isi_artikel'),
            'tanggal'     => $this->request->getPost('tanggal'),
            'gambar'      => $namaGambar
        ]);

        return redirect()->to('/dashboard/artikel');
    }

    // 4. Form Edit Artikel
    public function artikel_edit($id)
    {
        $artikelModel = new ArtikelModel();
        $data = [
            'username' => session()->get('username'),
            'artikel'  => $artikelModel->find($id)
        ];
        return view('dashboard/artikel_edit', $data);
    }

    // 5. Proses Update Artikel
    public function artikel_update($id)
    {
        $artikelModel = new ArtikelModel();
        
        // Cek ganti gambar atau tidak
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->isValid() && ! $fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/blog/', $namaGambar);
        } else {
            $namaGambar = $this->request->getPost('gambar_lama');
        }

        $slug = url_title($this->request->getPost('judul'), '-', true);

        $artikelModel->update($id, [
            'judul'       => $this->request->getPost('judul'),
            'slug'        => $slug,
            'isi_artikel' => $this->request->getPost('isi_artikel'),
            'tanggal'     => $this->request->getPost('tanggal'),
            'gambar'      => $namaGambar
        ]);

        return redirect()->to('/dashboard/artikel');
    }

    // 6. Hapus Artikel
    public function artikel_delete($id)
    {
        $artikelModel = new ArtikelModel();
        $artikelModel->delete($id);
        return redirect()->to('/dashboard/artikel');
    }
}