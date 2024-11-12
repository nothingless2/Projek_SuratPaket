<?php 

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.BASEURL.'/login";';
    echo '</script>';
    exit();
}




$nama = $_SESSION['nama_security'];
$id = $_SESSION['security_id'];
?>

    <main class="w-full flex-grow p-6">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php 
        Flasher::flash();
        ?>
        <h1 class="text-3xl text-black pb-6 text-center">Dashboard</h1>
        <div class="flex justify-between items-start space-x-4">
            <!-- Section Kiri -->
            <div class="flex-1">
                <center>
                    <div class="card">
                        <div class="icon">
                            <img src="<?= BASEURL; ?>/img/Total.jpg" class="card-img" alt="Total Paket"> 
                        </div>
                        <?php foreach($data['total'] as $paket) : ?>
                            <div class="number"><?= $paket['Total'] ?></div>
                        <?php endforeach; ?>
                        <div class="label">Total Paket</div>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <img src="<?= BASEURL; ?>/img/Sudah.jpg" class="card-img" alt="Paket Sudah Diambil"> 
                        </div>
                        <?php foreach($data['sudah'] as $paket) : ?>
                            <div class="number"><?= $paket['Total_Sudah_Diserahkan'] ?></div>
                        <?php endforeach; ?>
                        <div class="label">Paket yang sudah diambil</div>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <img src="<?= BASEURL; ?>/img/Tidak.jpg" class="card-img" alt="Paket Belum Diambil"> 
                        </div>
                        <?php foreach($data['belum'] as $paket) : ?>
                            <div class="number"><?= $paket['Total_Belum_Diserahkan'] ?></div>
                        <?php endforeach; ?>
                        <div class="label">Paket yang belum diambil</div>
                    </div>
                </center>
            </div>

            <!-- Kolom Riwayat -->
            <div class="w-1/5 ml-4 mt-4"> <!-- Lebar dikurangi dan margin atas ditambahkan -->
                <div class="riwayat-container">
                    <div class="riwayat-header">Riwayat</div>
                    <div class="riwayat-content">
                        <!-- Isi riwayat dapat ditambahkan di sini -->
                        <?php foreach($data['history'] as $paket) : ?>
                            <p><?= $paket['nama_pemilik']?> Mengambil paket pada <?=$paket['waktu_serah']?></p> 
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>   
    </main>
</div>


<style>
/* Gaya untuk Card */
.card {
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 10px; /* Padding dikurangi */
    text-align: center;
    width: 100%;
    max-width: 400px; /* Ukuran maksimal card dikurangi */
    margin-bottom: 60px; /* Margin bawah dikurangi */
}

.card-img {
    max-width: 120px; /* Ukuran maksimal gambar dikurangi */
    height: auto;
    margin-bottom: 10px;
}

.number {
    font-size: 18px; /* Ukuran font dikurangi */
    font-weight: bold;
    margin-bottom: 5px;
}

.label {
    font-size: 14px;
    color: #666;
}

/* Gaya untuk Riwayat Section */
.riwayat-container {
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 10px;
    height: 600px; /* Tinggi dikurangi */
    overflow-y: auto;
    margin-top: -10px;
}

.riwayat-header {
    font-size: 18px; /* Ukuran font dikurangi */
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.riwayat-content {
    font-size: 13px; /* Ukuran font dikurangi */
    color: #555;
}
</style>
