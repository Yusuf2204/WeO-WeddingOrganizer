<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('auth/login'));
    }

    public function login()
    {
        return view('auth/login');
        // echo "Test";
    }

    public function loginProcess()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['email_user' => $post['email']]);
        $user = $query->getRow();
        if($user){
            if(password_verify($post['password'], $user -> password_user)){
                $params = ['id_user' => $user -> id_user];
                session() -> set($params);
                return redirect()->to(base_url());
            } else{
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }
        } else{
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }
    }
}
