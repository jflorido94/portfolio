<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;

class Archives extends BaseController
{
    public function index()
    {

        return view("archives");

    }

    public function subir()
    {
        $file = $this->request->getFile('pdf');

        if (! $file->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $file->store('pdf', 'CV-' . date('Y-m-d').'.pdf');

            $data = ['uploaded_fileinfo' => new File($filepath)];

            return view('upload_success', $data);
        }

    }

}