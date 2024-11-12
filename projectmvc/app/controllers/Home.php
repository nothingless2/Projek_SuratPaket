<?php

class Home extends Controller {

    public function index(){
        if (isset($_SESSION['login'])) {
            header('Location: '. BASEURLSL .'');
            exit;
        }
        $this->view('home/index');
        // $this->view('default/header');
        // $this->view('default/navbar');
        $this->view('home/index');
        // $this->view('default/footer');
    }

    public function caripaket(){
        $this->view('default/headersb');
        $this->view('home/caripaket');
    }

    public function trackingNumber(){
        $trackingNumber = $_POST['trackingNumber'];
        $data['isi']=$this->model('Paket_model')->caripaket($trackingNumber);
        $this->view('default/headersb');
    if (($data['isi'])){
        Flasher::setFlash('Berhasil!','Data Ditemukan','success');
        $this->view('home/paketcari',$data);
    } else {
        Flasher::setFlash('Failed!','Data Tidak Ditemukan','error');
        $this->view('home/caripaket');
    }
       
    }
    public function About(){
        $this->view('default/headersb');
        $this->view('home/About');
    }
    
}
?>
