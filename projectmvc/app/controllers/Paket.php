<?php

class Paket extends Controller{

    public function index(){
        $data['judul'] = 'Daftar Paket';
        $data['paket'] = $this->model('Paket_model')->getpaket();
        $this->view('default/header');
        $this->view('default/navbar');
        $this->view('paket/index', $data);
        $this->view('default/footer');

    }
    public function tambah(){
        if ( $this->model('Paket_Model')->tambahdataPaket($_POST)>0){
            header('location: ' . BASEURL . '/Paket');
            exit;
        }
    }

}