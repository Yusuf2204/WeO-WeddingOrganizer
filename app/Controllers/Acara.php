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

    public function edit($id = null)
    {
        if ($id != null){
            $query = $this->db->table('weo')->getWhere(['id_weo' => $id]);
            if($query->resultID->num_rows > 0){
                $data['acara'] = $query->getRow();
                return view('acara/edit', $data);
            } else{
                throw \CodeIgniter\Exceptions\PageNotFoundException::ForPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::ForPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('weo')->where(['id_weo' => $id])->update($data);
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
    }
}