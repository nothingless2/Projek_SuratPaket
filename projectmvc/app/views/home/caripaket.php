<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cari Paket Anda</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php 
        Flasher::flash();
        ?>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #e7f2fd;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .main-content {
      text-align: center;
      padding: 50px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
    }

    .main-content h1 {
      font-size: 36px;
      margin-bottom: 20px;
      color: #333;
    }

    .main-content p {
      font-size: 18px;
      margin-bottom: 40px;
      color: #666;
    }

    #trackForm {
      display: flex;
      flex-direction: column;
      max-width: 400px;
      margin: 0 auto;
    }

    #trackingNumber {
      padding: 15px;
      font-size: 16px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      width: 100%;
    }

    button {
      padding: 15px;
      background-color: #4070f4;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #305bbd;
    }

    #result {
      margin-top: 30px;
      font-size: 18px;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="main-content">
    <h1>Cari Paket Anda</h1>
    <form id="trackForm" action="<?= BASEURLBL;?>/trackingNumber" method="post">
      <input type="text" id="trackingNumber" name="trackingNumber" placeholder="Masukkan nomor resi paket Anda" autocomplete="off" required>
      <button type="submit" id="tombolCari" >Cari</button>
    </form>
    <div id="result"></div>
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
                        <input type="text" id="username" name="username" autocomplete="off" required>
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
</body>
</html>

</body>
</html>
