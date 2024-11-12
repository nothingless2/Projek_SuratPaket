<?php

class Flasher{
public static function setFlash($judul,$pesan, $icon,){
    $_SESSION['flash'] = [
        'judul'=> $judul,
        'pesan' => $pesan,
        'icon' => $icon
    ];
}

public static function flash(){
    if(isset($_SESSION['flash'])){
        echo'<script>
        swal("'.$_SESSION['flash']['judul'].'", "'.$_SESSION['flash']['pesan'].'", "'.$_SESSION['flash']['icon'].'");
        </script>';
        unset($_SESSION['flash']);
}
}
}