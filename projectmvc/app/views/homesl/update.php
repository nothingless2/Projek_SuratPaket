<?php
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.BASEURL.'/login";';
    echo '</script>';
    exit();
}
?>
<div><br><br><br></div>

<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <h2 class="formbold-form-title" style="color: #0d47a1;">Form Update Data Surat Paket</h2>
        <form id="paketForm" action="<?= BASEURLSL; ?>/updateSerahTerima" method="POST">
            <div class="table-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Resi</th>
                            <th>Ekspedisi</th>
                            <th>Jenis Paket</th>
                            <th>Nama Pemilik</th>
                            <th>Ruang</th>
                            <th>Email</th>
                            <th>Waktu Terima</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= htmlspecialchars($data['isi']['no_resi']) ?></td>
                            <td><?= htmlspecialchars($data['isi']['ekspedisi']) ?></td>
                            <td><?= htmlspecialchars($data['isi']['jenis_paket']) ?></td>
                            <td><?= htmlspecialchars($data['isi']['nama_pemilik']) ?></td>
                            <td><?= htmlspecialchars($data['isi']['ruang_paket']) ?></td>
                            <td><?= htmlspecialchars($data['isi']['email']) ?></td>
                            <td><?= htmlspecialchars($data['isi']['waktu_terima']) ?></td>
                            <td><?= htmlspecialchars($data['isi']['status']) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="formbold-input-group">
                <div class="formbold-input-item">
                    <label for="no_resi" class="formbold-form-label">No Resi</label>
                    <input type="text" name="no_resi" id="no_resi" value="<?= $data['isi']['no_resi'] ?>" class="formbold-form-input" readonly/>
                </div>
            </div>
        
            <button id="submitBtn" type="submit" class="formbold-btn">Submit</button>
        </form>
    </div>
</div>

<!-- Loading overlay -->
<div id="loadingOverlay" class="loading-overlay">
    <div class="loading-spinner"></div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background-color: ;
}

.formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
    background-color: #e3f2fd;
}

.formbold-form-wrapper {
    margin: 0 auto;
    max-width: 1200px; /* Increased width */
    width: 100%;
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.formbold-form-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 30px;
    text-align: center;
    color: #0d47a1; /* Blue color */
}

.formbold-form-label {
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
    color: #0d47a1; /* Blue color */
}

.formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #bbdefb;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    outline: none;
    resize: none;
}

.formbold-form-input::placeholder,
select.formbold-form-input {
    color: rgba(13, 71, 161, 0.5);
}

.formbold-form-input[type="datetime-local"]::-webkit-datetime-edit {
    color: rgba(13, 71, 161, 0.5);
}

.formbold-form-input:focus {
    border-color: #bbdefb;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
}

.formbold-input-group {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 20px;
}

.table-wrapper {
    margin-top: 20px;
    overflow-x: auto;
}

.table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
}

.table th, .table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    color: #000; /* Black text */
}

.table th {
    background-color: #007bff; /* Blue background */
    color: #fff; /* White text in header */
    font-weight: 600;
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.formbold-input-item {
    flex: 1;
    min-width: 280px;
}

.formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #0d47a1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
    transition: background-color 0.3s ease;
}

.formbold-btn:hover {
    background-color: #0b3c91;
}

.loading-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.loading-spinner {
    border: 8px solid rgba(255, 255, 255, 0.3);
    border-top: 8px solid #fff;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>


