<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProyectModel;

class Proyects extends BaseController
{
    public function index()
    {
        return view('proyects');
    }

    public function store()
    {
        $image = $this->request->getFile('image');

        if (!$image->hasMoved()) {

            $data = [
                'name' => $this->request->getPost('name'),
                'category' => $this->request->getPost('category'),
                'type' => $this->request->getPost('type'),
                'date' => $this->request->getPost('date'),
                'git_url' => $this->request->getPost('git_url'),
                'url' => $this->request->getPost('url'),
                'image' => WRITEPATH . 'uploads/preview/' . $this->request->getPost('name') .'.'. $image->guessExtension(),
                'details' => $this->request->getPost('details'),
                'in_progress' => $this->request->getPost('in_progress') == 'true' ? true : false,
            ];
            $proyectM = new ProyectModel();
            if ($proyectM->insert($data)) {
                $image->store('preview', $this->request->getPost('name') . $image->guessExtension());
            }
        }
        return $this->response->redirect(route_to('proyect'));
    }
}
