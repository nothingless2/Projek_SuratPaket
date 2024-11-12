<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Paket</h1>
            <?php foreach( $data['paket'] as $paket) : ?>
                <ul>
                 <li><?= $paket['jenis_paket'];?></li> 
                 <li><?= $paket['no_resi'];?></li>   
                </ul>
                <?php endforeach;?>
        </div>
    </div>
</div>