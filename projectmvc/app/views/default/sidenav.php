<?php 
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.BASEURL.'/login";';
    echo '</script>';
    exit();
}
$nama= $_SESSION ['nama_security'];
$id= $_SESSION ['security_id'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Side Navigation Bar in HTML CSS JavaScript</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/stylenav.css" />
  </head>
  
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        Surat Paket
      </div>

   
      <div class="navbar_content">
      <a href="<?=BASEURL;?>/login/logout" class="btn btn-info btn-sm" id="btn btn-info btn-sm">Logout</a>
        <i class='bx bx-sun' id="darkLight"></i>
        <div class="profile" id="profileIcon">
          <img src="<?= BASEURL; ?>/img/pro.jpg" alt="" />
          <!-- Popup for profile information -->
          <div class="profile_popup" id="profilePopup">
            <div class="profile_info">
            <p>Nama Security: <?php echo $nama;?></p>
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


            </div>
          </div>
        </div>
      </div>
    </nav>

 
    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dashboard"></div>
          <li class="item">
            <a href="<?= BASEURLSL ?>" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Home</span>
            </a>
          </li>
          <li class="item">
            <a href="http://localhost/projectmvc/public/about" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-info-circle"></i>
              </span>
              <span class="navlink">About</span>
            </a>
          </li>
        </ul>

        <ul class="menu_items">
          <div class="menu_title menu_editor"></div>
          <li class="item">
            <a href="<?= BASEURLSL ?>/datapaketfull" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-package"></i>
              </span>
              <span class="navlink">Data Paket</span>
            </a>
          </li>
          <li class="item">
            <a href="<?= BASEURLSL ?>/datapaketblm" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-refresh"></i>
              </span>
              <span class="navlink">Update Paket</span>
            </a>
          </li>
          <li class="item">
            <a href="<?= BASEURLSL ?>/formpaket" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-edit"></i>
              </span>
              <span class="navlink">Form Input Paket</span>
            </a>
          </li>
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">

          </div>
          <div class="bottom collapse_sidebar">
            
          </div>
        </div>
      </div>
    </nav>
    <!-- JavaScript -->
    <script src="<?= BASEURL; ?>/js/scriptnav.js"></script>
    <script src="<?= BASEURL; ?>/js/profilepopup.js"></script>

  </body>
</html>