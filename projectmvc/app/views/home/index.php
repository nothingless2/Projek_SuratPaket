<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Signup Form | CodingNepal</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="http://localhost/projectmvc/public/css/style.css">
    <script src="http://localhost/projectmvc/public/js/script.js" defer></script>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }

        .text-section {
            max-width: 500px;
            margin-right: 50px;
            color: white;
        }

        .text-section h1 {
            font-size: 60px;
            margin-bottom: 10px;
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: white;
        }

        .text-section p {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .text-section .btn-check {
            display: inline-block;
            background-color: #0276FF;
            border-radius: 8px;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
        }

        .image-section img {
            max-width: 600px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php 
        Flasher::flash();
        ?>
    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="http://localhost/projectmvc/public/img/logo%20pcr.png" alt="logo">
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="<?= BASEURLBL;?>">Home</a></li>
                <li><a class="nav-link" href="<?= BASEURLBL?>/caripaket">Cari Paket</a></li>
                <li><a class="nav-link" href="<?= BASEURLBL?>/About">About us</a></li>
            </ul>
            <button class="login-btn">LOG IN</button>
        </nav>
    </header>
    
    <div class="container">
        <div class="text-section">
            <h1>Surat</h1>
            <h1>Paket</h1><br>
            <p>Silahkan mengecek status paketmu</p>
            <a href="<?=BASEURLBL;?>/caripaket" class="btn-check">Cek Paket</a>
        </div>
        <div class="image-section">
            <img src="http://localhost/projectmvc/public/img/Surpa.png">
        </div>
    </div>

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details"></div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <?php if (isset($data['error'])): ?>
                    <p style="color: red;"><?php echo $data['error']; ?></p>
                <?php endif; ?>
                
                <form id="login-form" action="<?= BASEURL;?>/login/authenticate" method="post">
                    <div class="input-field">
                        <input type="text" id="username" name="username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <button type="submit">Log In</button>
                </form>
               
            </div>
        </div>
        
    </div>

    <?php if (isset($data['error'])): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('Username atau password salah');
            });
        </script>
    <?php endif; ?>
</body>
</html>
