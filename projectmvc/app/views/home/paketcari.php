<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin-top: 100px;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow-x: auto; /* Agar tabel bisa di-scroll horizontal jika diperlukan */
        }

        .table thead th {
            background-color: #007bff;
            color: #fff;
            font-size: 0.9rem;
            padding: 0.75rem;
            text-align: center;
        }

        .table tbody td {
            font-size: 0.85rem;
            padding: 0.75rem;
            text-align: center;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }

        h2 {
            color: #007bff;
            font-size: 1.75rem;
        }
    </style>
</head>

<body>
    <div class="container">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php 
        Flasher::flash();
        ?>
        <div class="d-flex justify-content-between align-items-center mb-3">
         </div>
         <div class="table-wrapper"> 
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Resi</th>
                        <th>Ekspedisi</th>
                        <th>Jenis Paket</th>
                        <th>Nama Pemilik</th>
                        <th>Ruang</th>
                        <th>Email</th>  
                        <th>Waktu Terima</th>
                        <th>Waktu Serah</th>
                        <th>Foto Penyerahan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($data['isi'] as $paket) : ?>
                        <tr>
                            <td><?= $paket['no_resi'] ?></td>
                            <td><?= $paket['ekspedisi'] ?></td>
                            <td><?= $paket['jenis_paket'] ?></td>
                            <td><?= $paket['nama_pemilik'] ?></td>
                            <td><?= $paket['ruang_paket'] ?></td>
                            <td><?= $paket['email'] ?></td>
                            <td><?= $paket['waktu_terima'] ?></td>
                            <td><?= $paket['waktu_serah'] ?></td>
                            <td> <?php if (isset($paket['foto_penyerahan'])) : ?>
                            <img src="http://localhost/projectmvc/public/fotopaket/<?=$paket['foto_penyerahan'];?>" width="120"></td>
                            <?php else : ?>
                                <center>Foto Paket Tidak Ada</center>
                            <?php endif; ?>
                            <td><?= $paket['status'] ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian.json"
                },
                "order": [[0, "asc"]],
                "columnDefs": [{ "orderable": false, "targets": 9 }],
                "pageLength": 10,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]]
            });
        });
    </script>
</body>

</html>