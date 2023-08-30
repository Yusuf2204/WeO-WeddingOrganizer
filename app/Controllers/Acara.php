<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('weo');
        $query   = $builder->get()->getResult();
        $data['weo'] = $query;
        return view('acara/get', $data);
    }

    public function create()
    {
        return view('acara/add');
    }

    public function store()
    {
       $data = $this->request->getPost();

       $this->db->table('weo')->insert($data);

       if($this->db->affectedRows() > 0)
       {
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
       }
    }
}