<?php 

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.BASEURL.'/login";';
    echo '</script>';
    exit();
}
?>
<br><br>
<div class="formbold-main-wrapper">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
        Flasher::flash();
        ?>
    <div class="formbold-form-wrapper">
        <h2 class="formbold-form-title">Form Input Data Surat Paket</h2>

        <form action="<?= BASEURLSL; ?>/input" method="POST" enctype="multipart/form-data" id="paketForm">
            <div class="formbold-input-group">
                <div class="formbold-input-item">
                    <label class="formbold-form-label">Ekspedisi</label>
                    <select class="formbold-form-input" name="ekspedisi" id="ekspedisi">
                        <?php $i = 1; foreach ($data['isi'] as $paket) : ?>
                            <option type="number" value="<?= $paket['kurir_id'] ?>"><?= $paket['ekspedisi'] ?></option>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="formbold-input-item">
                    <label for="jenis_paket" class="formbold-form-label">Jenis Paket</label>
                    <input type="text" name="jenis_paket" id="jenis_paket" class="formbold-form-input" />
                </div>  
            </div>
            <div class="formbold-input-group">
                <div class="formbold-input-item">
                    <label for="no_resi" class="formbold-form-label">No Resi</label>
                    <input type="text" name="no_resi" id="no_resi" class="formbold-form-input" />
                </div>
                <div class="formbold-input-item">
                    <label for="nama_pemilik" class="formbold-form-label">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik" id="nama_pemilik" class="formbold-form-input" />
                </div>
            </div>
            <div class="formbold-input-group">
                <div class="formbold-input-item">
                    <label for="status_pemilik" class="formbold-form-label">Status Pemilik</label>
                    <select class="formbold-form-input" name="status_pemilik" id="status_pemilik">
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="staf">Staf</option>
                    </select>
                </div>
                <div class="formbold-input-item">
                    <label for="email" class="formbold-form-label">Email Pemilik</label>
                    <input type="email" name="email" id="email" class="formbold-form-input" placeholder="nama@email.com" />
                </div>
            </div>
            <div class="formbold-input-group">
                <div class="formbold-input-item">
                    <label for="no_hp" class="formbold-form-label">No HP Pemilik</label>
                    <input type="text" name="no_hp" id="no_hp" class="formbold-form-input" />
                </div>
            </div>
            <div class="formbold-input-group">
                <div class="formbold-input-item">
                    <label for="fotopaket" class="formbold-form-label">Foto Paket</label>
                    <div class="upload-container">
                        <input type="file" name="fotopaket" id="fotopaket" accept="image/*">
                        <label for="fotopaket">Choose Files</label>
                        <img id="preview" src="" alt="">
                    </div>
                </div>
            </div>
            <button type="submit" class="formbold-btn" id="submitBtn">Submit</button>
        </form>
    </div>
</div>

<!-- Add this div for the loading overlay -->
<div id="loadingOverlay" class="loading-overlay">
    <div class="spinner"></div>
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
    background-color: #f0f4f8;
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
    max-width: 800px;
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
    color: #0d47a1;
}

.formbold-form-label,
.formbold-form-input,
.upload-container label {
    color: #0d47a1;
}

.formbold-form-input::placeholder {
    color: rgba(13, 71, 161, 0.5);
}

.formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #bbdefb;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #0d47a1;
    outline: none;
    resize: none;
}

.formbold-form-input:focus {
    border-color: #0d47a1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
}

.formbold-input-group {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 20px;
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
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
}

.upload-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px dashed #ccc;
    border-radius: 10px;
    width: 100%;
    height: 300px;
    padding: 20px;
    background-color: #f9f9f9;
}

.upload-container img {
    max-width: 100%;
    max-height: 200px;
    margin-top: 20px;
}

.upload-container input {
    display: none;
}

.upload-container label {
    background-color: #3F51B5;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.upload-container label:hover {
    background-color: #303F9F;
}

/* New styles for the loading overlay */
.loading-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

.spinner {
    border: 5px solid #f3f3f3;
    border-top: 5px solid #0d47a1;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
<script>
    // Existing code for file input preview
    const fileInput = document.getElementById('fotopaket');
    const preview = document.getElementById('preview');

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Modified script for loading overlay
    document.getElementById('paketForm').addEventListener('submit', function(e) {
        // Show loading overlay
        document.getElementById('loadingOverlay').style.display = 'flex';
        
        // Disable submit button
        document.getElementById('submitBtn').disabled = true;

        // Set a flag in sessionStorage
        sessionStorage.setItem('showAlert', 'true');
    });
</script>