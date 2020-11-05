<?php
namespace App\Controllers;

use App\Models\Hobi_Model;

class Hobi extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $db = \Config\Database::connect();

        $this->hobi = new Hobi_Model($db);
    }

    public function index() {
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataHobi'] = $this->hobi->get()->getResult();

        echo view('header_v');
        echo view('hobi_v', $data);
        echo view('footer_v');
    }

    public function add() {
        echo view('header_v');
        echo view('hobi_form_v');
        echo view('footer_v');
    }

    public function edit($id) {
        $where = ['kode_hobi' => $id];

        $data['dataHobi'] = $this->hobi->get($where)->getResult()[0];
        
        echo view('header_v');
        echo view('hobi_form_v', $data);
        echo view('footer_v');
    }

    public function save() {
        $data = [
            'hobi' => $this->request->getPost('hobi'),
        ];
        // var_dump($data);die;

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->hobi->insert($data);

            if ($response->resultID) {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal disimpan. '. $response->connID->error]);
            }
        } else { // Update
            $where = ['kode_hobi' => $id];

            $response = $this->hobi->update($data, $where);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Hobi'));
    }

    public function delete($id) {
        $where = ['kode_hobi' => $id];

        $response = $this->hobi->delete($where);
        
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal dihapus. '. $response->connID->error]);
        }

        return redirect()->to(site_url('Hobi'));
    }
}