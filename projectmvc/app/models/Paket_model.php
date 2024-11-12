<?php

class Paket_model
{


    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getpaket()
    {
        $this->db->query('SELECT * FROM paket');
        return $this->db->resultSet();
    }

    public function getkurir()
    {
        $this->db->query('SELECT * FROM kurir');
        return $this->db->resultSet();
    }

    public function infopaket()
    {
        $this->db->query("SELECT * FROM tampiltabel 
        ORDER BY waktu_terima DESC;
        ");
        return $this->db->resultSet();
    }

    public function infopaketblm()
    {
        $this->db->query('SELECT * FROM tampiltabelbelum;');
        return $this->db->resultSet();
    }

    public function sudahserah()
    {
        $this->db->query('SELECT COUNT(status) as Total_Sudah_Diserahkan FROM serah_terima WHERE status="Sudah Diserahkan";');
        return $this->db->resultSet();
    }

    public function belumserah()
    {
        $this->db->query('SELECT COUNT(status) as Total_Belum_Diserahkan FROM serah_terima WHERE status="Belum Diserahkan";');
        return $this->db->resultSet();
    }

    public function total()
    {
        $this->db->query('SELECT COUNT(status) as Total FROM serah_terima;');
        return $this->db->resultSet();
    }
    public function detailUpdate($no_resi)
    {
        $this->db->query('SELECT * FROM tampiltabel WHERE no_resi = :no_resi');
        $this->db->bind(':no_resi', $no_resi);
        return $this->db->single();
    }
    

    public function tambahDataSeluruh($data)
    {
        // $queryInsertSecurity;
        // $queryInsertPaket;
        // $queryInsertPemilik;
        // $queryInsertSerahTerima;
        // $queryInsertKurir;
    }

    public function updateSerahTerima($no_resi)
{
    $this->db->query('UPDATE tampilPaketSerah SET waktu_serah = CURRENT_TIMESTAMP, status = :status WHERE no_resi = :no_resi');
    $this->db->bind(':status', 'Sudah Diserahkan');
    $this->db->bind(':no_resi', $no_resi);
    $this->db->execute1();
}


    // public function insertSerahTerima1($kurir_id, $security_id, $pemilik_id, $paket_id)
    // {
    //     $this->db->query('INSERT INTO serah_terima (status,waktu_terima,ruang_paket,kurir_id,security_id,pemilik_id,paket_id) VALUES ("Belum Diserahkan", CURRENT_TIMESTAMP,"Ruang Rektorat",' . $kurir_id . ',' . $security_id . ',' . $pemilik_id . ',' . $paket_id . ');');
    // }

    public function insertSerahTerima($kurir_id, $security_id, $pemilik_id, $paket_id, $foto_penyerahan)
{
    $query = "INSERT INTO serah_terima (status, waktu_terima, ruang_paket, kurir_id, security_id, pemilik_id, paket_id, foto_penyerahan) 
              VALUES (:status, CURRENT_TIMESTAMP, :ruang_paket, :kurir_id, :security_id, :pemilik_id, :paket_id, :foto_penyerahan)";
    
    $this->db->query($query);
    
    $this->db->bind(':status', 'Belum Diserahkan');
    $this->db->bind(':ruang_paket', 'Ruang Rektorat');
    $this->db->bind(':kurir_id', $kurir_id);
    $this->db->bind(':security_id', $security_id);
    $this->db->bind(':pemilik_id', $pemilik_id);
    $this->db->bind(':paket_id', $paket_id);
    $this->db->bind(':foto_penyerahan', $foto_penyerahan);
    
    $this->db->execute1();
    return $this->db->getLastInsertId();
}

public function insertPemilik($nama_pemilik, $status_pemilik, $email, $no_hp)
{
    $query = "INSERT INTO pemilik (nama_pemilik, status_pemilik, email, no_hp) 
              VALUES (:nama_pemilik, :status_pemilik, :email, :no_hp)";
    
    $this->db->query($query);
    
    $this->db->bind(':nama_pemilik', $nama_pemilik);
    $this->db->bind(':status_pemilik', $status_pemilik);
    $this->db->bind(':email', $email);
    $this->db->bind(':no_hp', $no_hp);
    
    $this->db->execute1();
    return $this->db->getLastInsertId();
}

public function insertPaket($jenis_paket, $no_resi)
{
    $query = "INSERT INTO paket (jenis_paket, no_resi) 
              VALUES (:jenis_paket, :no_resi)";
    
    $this->db->query($query);
    
    $this->db->bind(':jenis_paket', $jenis_paket);
    $this->db->bind(':no_resi', $no_resi);
    
    $this->db->execute1();
    return $this->db->getLastInsertId();
}


    public function cariPaket($trackingNumber){
        $this->db->query('SELECT * FROM tampiltabel WHERE no_resi = :trackingNumber');
        $this->db->bind(':trackingNumber', $trackingNumber);
        return $this->db->resultSet();
    }

    public function history(){
        $query = "SELECT * FROM tampiltabel 
        WHERE status = 'Sudah Diserahkan' 
        ORDER BY waktu_serah DESC;
        ";
        $this->db->query($query);
        
        return $this->db->resultSet();
}
}