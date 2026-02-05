<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login_view');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();
        
        // Ambil inputan dari form
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        // Cari user di database
        $data = $model->where('username', $username)->first();
        
        if($data){
            $pass = $data['password'];
            // Cek Password
            if(password_verify($password, $pass)){
                // Jika Benar, simpan sesi login
                $ses_data = [
                    'id'       => $data['id'],
                    'username' => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard'); // Pindah ke dashboard
            }else{
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}