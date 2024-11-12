<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Sistem Surat Paket</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 50px;
            margin-top: 120px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .text-content {
            flex: 1;
            margin-right: 20px;
        }
        .text-content h1 {
            font-size: 1.8em;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 700;
            text-align: left;
        }
        .text-content p {
            margin-bottom: 15px;
            font-size: 1em;
            color: #444;
            line-height: 1.6;
            text-align: justify;
        }
        .text-content ul {
            margin: 20px 0;
            padding: 0;
            list-style: none;
        }
        .text-content ul li {
            margin-bottom: 10px;
            font-size: 1em;
            color: #444;
            display: flex;
            align-items: center;
        }
        .text-content ul li img {
            margin-right: 10px;
            width: 20px;
            height: 20px;
            object-fit: contain;
        }
        .hero {
            flex: 1;
            max-width: 500px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        strong {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="text-content">
            <h1>Tentang Kami</h1>
            <p>Selamat datang di Sistem Penerimaan Surat dan Paket Politeknik Caltex Riau. 
                Kami dengan bangga mempersembahkan sistem inovatif ini, yang dirancang untuk 
                menyederhanakan dan meningkatkan efisiensi proses penerimaan serta distribusi 
                surat dan paket untuk seluruh warga Politeknik Caltex Riau.</p>
            <p>Sistem ini bertujuan untuk memberikan solusi yang efisien, aman, dan
                 mudah diakses, memastikan setiap surat dan paket ditangani dengan keakuratan dan kecepatan
                  yang tinggi. Kami berkomitmen untuk terus berinovasi demi memberikan layanan terbaik.
            <p>Kami berkomitmen meningkatkan sistem sesuai kebutuhan. Terima kasih atas kepercayaan Anda.</p>
        </div>
        <img src="http://localhost/projectmvc/public/img/Foto_Gedung.jpg" alt="Gedung Politeknik Caltex Riau" class="hero">
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
