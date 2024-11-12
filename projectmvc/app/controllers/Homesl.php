<?php

class Homesl extends Controller {

    public function index(){
        $data['judul'] = 'halaman home';
        $this->view('default/header', $data);
        $data['sudah'] = $this->model('Paket_model')->sudahserah();
        $data['belum'] = $this->model('Paket_model')->belumserah();
        $data['total'] = $this->model('Paket_model')->total();
        $data['history'] = $this->model('Paket_model')->history();
        $this->view('default/sidenav');
        $this->view('homesl/index', $data);
        // $this->view('default/footer');
    }

    public function datapaketblm(){
        $data['judul'] = 'Halaman Paket Belum Diambil';
        $this->view('default/headerT', $data);
        $data['isi'] = $this->model('Paket_model')->infopaketblm();
        $this->view('default/sidenav');
        $this->view('homesl/datapaketblm', $data);
        $this->view('default/footerT');
      
    }
    public function datapaketfull(){
        $data['judul'] = 'Halaman Data Paket';
        $this->view('default/headerT', $data);
        $data['isi'] = $this->model('Paket_model')->infopaket();
        $this->view('default/sidenav');
        $this->view('homesl/datapaketfull', $data);
        $this->view('default/footerT');
      
    }
    public function caripaket(){
        $data['judul'] = 'cari paket';
        $this->view('default/header', $data);
        $this->view('default/sidenav');
        $this->view('homesl/caripaket');
        $this->view('default/footer');
    }
    public function update($no_resi){
        $data['judul'] = 'Halaman Update';
        $this->view('default/headerT', $data);
        $data['isi'] = $this->model('Paket_model')->detailUpdate($no_resi);
        $this->view('default/sidenav');
        $this->view('homesl/update', $data);
        $this->view('default/footerT');
    }

    public function formpaket(){
        $data['judul'] = 'Halaman Form Paket';
        $data['isi'] = $this->model('Paket_model')->getkurir();
        $this->view('default/header', $data);
        $this->view('default/sidenav');
        $this->view('homesl/formpaket',$data);
       
    }

    public function tambahDataPaket() {
        // $kurir_id = $_POST['ekspedisi'];
        // $security_id =$_SESSION ['security_id'];
        // $paket_id = "queri";
        // $pemilik_id = "queri";


        // echo 'id kurir: '.$kurir_id.'id security: '.$security_id;
        var_dump($_POST);
    }  
    public function updateSerahTerima() {
   
        $no_resi=$_POST['no_resi'];
        $this->model('Paket_model')->updateSerahTerima($no_resi);
        Flasher::setFlash('Berhasil!','Data Berhasil Di Update','success');
        header('Location: '. BASEURLSL .'/datapaketblm');
   
    }

    public function input () {
        $kurir_id = $_POST['ekspedisi'];
        $security_id =$_SESSION ['security_id'];
       
        //data pemilik
        $nama_pemilik = $_POST['nama_pemilik'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $status_pemilik = $_POST['status_pemilik'];

        //data paket
        $jenis_paket = $_POST['jenis_paket'];
        $no_resi = $_POST['no_resi'];

        if ($_FILES['fotopaket']['name']) {
        
            $namagambar = $_FILES ['fotopaket']['name'];
        $tmpgambar = $_FILES ['fotopaket']['tmp_name'];
     

        move_uploaded_file($tmpgambar,'../public/fotopaket/'.$namagambar);
        } else {
            $namagambar = 'Foto Tidak Ada';
        }

        // var_dump($namagambar);
        // exit();




         //kirim email
         $to = $_POST['email'];
         $subject = "Paket Telah Sampai";
        $message = "Paket anda dengan Resi $no_resi Telah sampai, silakan ambil di Rektorat Politeknik Caltex Riau.";

        $pengirim ="dimas23ti@mahasiswa.pcr.ac.id";
        $namaweb = "SuratPaketPCR";
        
        mail($to, $subject, $message,"From: $namaweb <$pengirim>");


        $pemilik_id =  $this->model('Paket_model')->insertPemilik($nama_pemilik,$status_pemilik,$email,$no_hp);
       
        $paket_id = $this->model('Paket_model')->insertPaket($jenis_paket, $no_resi);

        $hasil = $this->model('Paket_model')->insertSerahTerima($kurir_id,$security_id,$pemilik_id,$paket_id,$namagambar);
        Flasher::setFlash('Berhasil!','Data Berhasil Di Input','success');
         header('Location: '. BASEURLSL.'/formpaket' );

    }
} 