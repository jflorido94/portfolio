<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArchiveModel;
use CodeIgniter\Files\File;

class Archives extends BaseController
{
    public function index()
    {
        return view("archives");
    }


    public function store()
    {
        $file = $this->request->getFile('pdf');

        if (!$file->hasMoved()) {

            $data = [
                'type' => 'pdf-cv',
                'route'  => WRITEPATH . 'uploads/pdf/CV-'.date('Y-m-d') . '.pdf',
            ];
            $archiveM = new ArchiveModel();
            if($archiveM->insert($data)) {
                $file->store('pdf', 'CV-' . date('Y-m-d') . '.pdf');
            }
        }
        return $this->response->redirect(route_to('archives'));
    }
}
