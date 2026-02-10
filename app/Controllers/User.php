<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Cek Login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Kelola Admin',
            'users' => $this->userModel->findAll()
        ];
        return view('dashboard/user', $data); // Nanti kita buat file ini
    }

    public function create()
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');
        
        $data = ['title' => 'Tambah Admin'];
        return view('dashboard/user_create', $data);
    }

    public function save()
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        // Validasi sederhana
        if (!$this->validate([
            'username' => 'required|is_unique[users.username]',
            'password' => 'required|min_length[4]'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Username sudah ada atau Password terlalu pendek');
        }

        $this->userModel->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'     => $this->request->getPost('username'),
            // Hash password
            'password'     => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/dashboard/user')->with('success', 'Admin baru berhasil ditambahkan');
    }

    public function edit($id)
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        $data = [
            'title' => 'Edit Admin',
            'user'  => $this->userModel->find($id)
        ];
        return view('dashboard/user_edit', $data);
    }

    public function update($id)
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        $data = [
            'id'           => $id,
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'     => $this->request->getPost('username'),
        ];

        // Cek apakah password diganti
        $pass = $this->request->getPost('password');
        if (!empty($pass)) {
            $data['password'] = password_hash($pass, PASSWORD_DEFAULT);
        }

        $this->userModel->save($data);
        return redirect()->to('/dashboard/user')->with('success', 'Data admin berhasil diupdate');
    }

    public function delete($id)
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');
        
        $this->userModel->delete($id);
        return redirect()->to('/dashboard/user')->with('success', 'Admin berhasil dihapus');
    }
}