<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Signup Form | CodingNepal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="http://localhost/projectmvc/public/css/style.css">
    <script src="http://localhost/projectmvc/public/js/script.js" defer></script>
</head>
<body>
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
</html>
