<?php

namespace App\Controllers;

use App\Models\DokterModel;
use App\Models\PoliModel;
use App\Models\ArtikelModel;
use App\Models\CarouselModel;

class Dashboard extends BaseController
{
    // Deklarasi properti model agar bisa dipakai di semua fungsi
    protected $dokterModel;
    protected $poliModel;
    protected $artikelModel;
    protected $carouselModel;

    public function __construct()
    {
        // Inisialisasi model di sini SEKALI SAJA
        $this->dokterModel   = new DokterModel();
        $this->poliModel     = new PoliModel();
        $this->artikelModel  = new ArtikelModel();
        $this->carouselModel = new CarouselModel();
    }

    public function index()
    {
        if (! session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = [
            'total_dokter'  => $this->dokterModel->countAll(),
            'total_poli'    => $this->poliModel->countAll(),
            'total_artikel' => $this->artikelModel->countAll(),
            'user_nama'     => session()->get('nama_lengkap')
        ];

        $db = \Config\Database::connect();
        
        // Data Grafik Dokter
        $queryDokter = $db->table('dokter')
                          ->select('spesialisasi, count(*) as total')
                          ->groupBy('spesialisasi')
                          ->get()->getResultArray();

        $data['grafik_dokter_label'] = [];
        $data['grafik_dokter_total'] = [];
        
        foreach($queryDokter as $row){
            $data['grafik_dokter_label'][] = $row['spesialisasi'];
            $data['grafik_dokter_total'][] = $row['total'];
        }

        // Data Grafik Artikel
        $tahun_ini = date('Y');
        $queryArtikel = $db->query("
            SELECT MONTH(tanggal) as bulan, COUNT(*) as total 
            FROM artikel 
            WHERE YEAR(tanggal) = '$tahun_ini'
            GROUP BY MONTH(tanggal)
        ")->getResultArray();

        $data['grafik_artikel_total'] = array_fill(0, 12, 0); 

        foreach($queryArtikel as $row){
            $index = $row['bulan'] - 1;
            $data['grafik_artikel_total'][$index] = $row['total'];
        }

        return view('dashboard/home', $data);
    }

    // =================================================================
    // KELOLA DOKTER
    // =================================================================
    public function dokter()
    {
        $data = [
            'username' => session()->get('username'),
            'dokter'   => $this->dokterModel->findAll()
        ];
        return view('dashboard/dokter', $data);
    }

    public function dokter_create()
    {
        $data = ['username' => session()->get('username')];
        return view('dashboard/dokter_create', $data);
    }

    public function dokter_store()
    {
        $fileFoto = $this->request->getFile('foto');
        $namaFoto = ($fileFoto->isValid() && ! $fileFoto->hasMoved()) ? $fileFoto->getRandomName() : 'default.jpg';
        
        if ($namaFoto !== 'default.jpg') {
            $fileFoto->move('assets/img/doctors/', $namaFoto);
        }

        $this->dokterModel->save([
            'nama_dokter'  => $this->request->getPost('nama_dokter'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'jadwal'       => $this->request->getPost('jadwal'),
            'foto'         => $namaFoto
        ]);

        return redirect()->to('/dashboard/dokter');
    }

    public function dokter_edit($id)
    {
        $data = [
            'username' => session()->get('username'),
            'dokter'   => $this->dokterModel->find($id)
        ];
        return view('dashboard/dokter_edit', $data);
    }

    public function dokter_update($id)
    {
        $fileFoto = $this->request->getFile('foto');
        if ($fileFoto->isValid() && ! $fileFoto->hasMoved()) {
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move('assets/img/doctors/', $namaFoto);
        } else {
            $namaFoto = $this->request->getPost('foto_lama');
        }

        $this->dokterModel->update($id, [
            'nama_dokter'  => $this->request->getPost('nama_dokter'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'jadwal'       => $this->request->getPost('jadwal'),
            'foto'         => $namaFoto
        ]);

        return redirect()->to('/dashboard/dokter');
    }

    public function dokter_delete($id)
    {
        $this->dokterModel->delete($id);
        return redirect()->to('/dashboard/dokter');
    }

    // =================================================================
    // KELOLA POLI
    // =================================================================
    public function poli()
    {
        $data = [
            'username' => session()->get('username'),
            'poli'     => $this->poliModel->findAll()
        ];
        return view('dashboard/poli', $data);
    }

    public function poli_create()
    {
        $data = ['username' => session()->get('username')];
        return view('dashboard/poli_create', $data);
    }

    public function poli_store()
    {
        $nama = $this->request->getPost('nama_poli');
        $this->poliModel->save([
            'nama_poli' => $nama,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'icon'      => $this->request->getPost('icon'),
            'slug'      => url_title($nama, '-', true)
        ]);
        return redirect()->to('/dashboard/poli');
    }

    public function poli_edit($id)
    {
        $data = [
            'username' => session()->get('username'),
            'poli'     => $this->poliModel->find($id)
        ];
        return view('dashboard/poli_edit', $data);
    }

    public function poli_update($id)
    {
        $nama = $this->request->getPost('nama_poli');
        $this->poliModel->update($id, [
            'nama_poli' => $nama,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'icon'      => $this->request->getPost('icon'),
            'slug'      => url_title($nama, '-', true)
        ]);
        return redirect()->to('/dashboard/poli');
    }

    public function poli_delete($id)
    {
        $this->poliModel->delete($id);
        return redirect()->to('/dashboard/poli');
    }

    // =================================================================
    // KELOLA ARTIKEL
    // =================================================================
    public function artikel()
    {
        $data = [
            'username' => session()->get('username'),
            'artikel'  => $this->artikelModel->orderBy('tanggal', 'DESC')->findAll()
        ];
        return view('dashboard/artikel', $data);
    }

    public function artikel_create()
    {
        $data = ['username' => session()->get('username')];
        return view('dashboard/artikel_create', $data);
    }

    public function artikel_store()
    {
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = ($fileGambar->isValid() && ! $fileGambar->hasMoved()) ? $fileGambar->getRandomName() : null;
        if ($namaGambar) $fileGambar->move('assets/img/blog/', $namaGambar);

        $this->artikelModel->save([
            'judul'       => $this->request->getPost('judul'),
            'slug'        => url_title($this->request->getPost('judul'), '-', true),
            'isi_artikel' => $this->request->getPost('isi_artikel'),
            'tanggal'     => $this->request->getPost('tanggal'),
            'gambar'      => $namaGambar
        ]);
        return redirect()->to('/dashboard/artikel');
    }

    public function artikel_edit($id)
    {
        $data = [
            'username' => session()->get('username'),
            'artikel'  => $this->artikelModel->find($id)
        ];
        return view('dashboard/artikel_edit', $data);
    }

    public function artikel_update($id)
    {
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->isValid() && ! $fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/blog/', $namaGambar);
        } else {
            $namaGambar = $this->request->getPost('gambar_lama');
        }

        $this->artikelModel->update($id, [
            'judul'       => $this->request->getPost('judul'),
            'slug'        => url_title($this->request->getPost('judul'), '-', true),
            'isi_artikel' => $this->request->getPost('isi_artikel'),
            'tanggal'     => $this->request->getPost('tanggal'),
            'gambar'      => $namaGambar
        ]);
        return redirect()->to('/dashboard/artikel');
    }

    public function artikel_delete($id)
    {
        $this->artikelModel->delete($id);
        return redirect()->to('/dashboard/artikel');
    }

    // =================================================================
    // KELOLA SLIDER (CAROUSEL)
    // =================================================================
    public function slider()
    {
        $data = [
            'username' => session()->get('username'),
            'slider'   => $this->carouselModel->findAll()
        ];
        return view('dashboard/slider', $data);
    }

    public function slider_create()
    {
        $data = ['username' => session()->get('username')];
        return view('dashboard/slider_create', $data);
    }

    public function slider_store()
    {
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = ($fileGambar->isValid() && ! $fileGambar->hasMoved()) ? $fileGambar->getRandomName() : 'hero-bg.jpg';
        if ($namaGambar !== 'hero-bg.jpg') $fileGambar->move('assets/img/', $namaGambar);

        $this->carouselModel->save([
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link'      => $this->request->getPost('link'),
            'gambar'    => $namaGambar
        ]);
        return redirect()->to('/dashboard/slider');
    }

    public function slider_edit($id)
    {
        $data = [
            'username' => session()->get('username'),
            'slider'   => $this->carouselModel->find($id)
        ];
        return view('dashboard/slider_edit', $data);
    }

    public function slider_update($id)
    {
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->isValid() && ! $fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/', $namaGambar);
        } else {
            $namaGambar = $this->request->getPost('gambar_lama');
        }

        $this->carouselModel->update($id, [
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link'      => $this->request->getPost('link'),
            'gambar'    => $namaGambar
        ]);
        return redirect()->to('/dashboard/slider');
    }

    public function slider_delete($id)
    {
        $this->carouselModel->delete($id);
        return redirect()->to('/dashboard/slider');
    }
}