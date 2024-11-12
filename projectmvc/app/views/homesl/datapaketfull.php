<?php 
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.BASEURL.'/login";';
    echo '</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Semua Paket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-md {
            max-width: 1200px;
            margin-top: 20px;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        
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
            width: 100px;
        }

        h6 {
            color: #007bff;
            font-size: 1.40rem;
            margin-bottom: 10px;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    </style>
</head>

<body>
    <div class="container-md p-2">
        <h6>Daftar Semua Paket</h6>
        <div class="d-flex justify-content-end mb-3">
        </div>
        <div class="table-wrapper">
            <table id="example" class="table table-striped table-bordered" style="width:90%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Resi</th>
                        <th>Ekspedisi</th>
                        <th>Jenis Paket</th>
                        <th>Nama Pemilik</th>
                        <th>Ruang</th>
                        <th width="100px">Email</th>  
                        <th>Waktu Terima</th>
                        <th>Waktu Serah</th>
                        <th>Foto Penyerahan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($data['isi'] as $paket) : ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?= $paket['no_resi'] ?></td>
                            <td><?= $paket['ekspedisi'] ?></td>
                            <td><?= $paket['jenis_paket'] ?></td>
                            <td><?= $paket['nama_pemilik'] ?></td>
                            <td><?= $paket['ruang_paket'] ?></td>
                            <td width="100px"><?= $paket['email'] ?></td>
                            <td><?= $paket['waktu_terima'] ?></td>
                            <td><?= $paket['waktu_serah'] ?></td>
                            <td> <?php if (isset($paket['foto_penyerahan'])) : ?>
                            <img src="http://localhost/projectmvc/public/fotopaket/<?=$paket['foto_penyerahan'];?>" width="100"></td>
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
                "pageLength": 5,
                "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Semua"]]
            });
        });
    </script>
</body>

</html>
