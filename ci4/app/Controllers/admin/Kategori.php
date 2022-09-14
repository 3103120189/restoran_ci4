<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
    public function index()
    {
        echo "Kategori";
    }
    public function readrakha()
    {
        $pager = \Config\Services::pager();
        $model = new Kategori_M();
        $kategori = $model->findAll();



        $data = [
            'judul' => 'DATA KATEGORI',
            'kategori' => $model->paginate(3, 'page'),
            'pager' => $model->pager
        ];



        return view("kategori/select", $data);
    }

    public function createRakha()
    {

        return view("kategori/insert");
    }


    public function findRakha($id = null)
    {
        $model = new Kategori_M();
        $kategori = $model->find($id);

        $data = [
            'judul' => 'UPDATE DATA',
            'kategori' => $kategori
        ];
        return view("kategori/update", $data);
    }

    public function updateRakha()
    {
        $model = new Kategori_M();
        $id = $_POST['idkategori'];

        if ($model->save($_POST) === false) {
            $error = $model->errors();
            session()->setFlashdata('info', $error['kategori']);
            return redirect()->to(base_url("/admin/kategori/find/$id"));
        } else {
            return redirect()->to(base_url("/admin/kategori"));
        }
    }

    public function deleteRakha($id = null)
    {
        $model = new Kategori_M();
        $model->delete($id);

        return redirect()->to(base_url("/admin/kategori"));
    }

    public function insert()
    {
        $model = new Kategori_M();
        if ($model->insert($_POST) === false) {
            $error = $model->errors();
            session()->setFlashdata('info', $error['kategori']);
            return redirect()->to(base_url("/admin/kategori/create"));
        } else {
            return redirect()->to(base_url("/admin/kategori"));
        }
    }
}
