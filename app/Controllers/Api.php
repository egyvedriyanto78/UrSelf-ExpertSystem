<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use Codeigniter\API\ResponseTrait;
use App\Models\ApiModel;

class Api extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $model = new ApiModel();
        $data['feedback'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new ApiModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'message' => $this->request->getVar('message')
        ];
        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Berhasil memberikan feedback'
            ]
        ];
        return $this->respondCreated($response);
    }

    public function show($id = null)
    {
        $model = new ApiModel();
        $data = $model->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    
    public function update($id = null)
    {
        $model = new ApiModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'message' => $this->request->getVar('message')
        ];
        $model->update($id, $data);
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Feedback berhasil di update'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $model = new ApiModel();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => 'Feedback berhasil dihapus'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Data tidak ditemukan');
        }
    }
}
