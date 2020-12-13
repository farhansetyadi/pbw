<?php
namespace App\Controllers;

class Beranda extends BaseController {
    public function __construct() 
    {
        $this->session = \Config\Services::session();    
       
    }

    public function index() {

        $data['session'] = $this->session->getFlashdata('response');
        $data['isLogin'] = $this->session->get('username');
        $data['segment'] = $this->segment;
        echo view('header_v',$data);
        echo view('beranda_v');
        echo view('footer_v');
    }


    public function login() {

        $penggunaModel = new \App\Models\Pengguna_Model();
        $where = [
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password')),
        ];
        $data = $penggunaModel->where($where)->find();
        if (!empty($data)){
            $this->session->set('username',$this->request->getPost('username'));
            $this->session->setFlashdata('response',['status' => 1, 'message' => 'Berhasil Login']);
        }else{
            $this->session->setFlashdata('response',['status' => 0, 'message' => 'Gagal Login']);
            
        }
        return redirect()->to(site_url('Beranda'));
    }

    public function Logout(){
        $this->session->destroy();
        return redirect()->to(site_url('Beranda'));
    }
}