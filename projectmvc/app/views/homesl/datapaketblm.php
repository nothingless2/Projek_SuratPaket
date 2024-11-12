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
    <title>Data Paket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php 
        Flasher::flash();
        ?>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin-top: 20px;
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
<?php if (isset($data['berhasil'])): ?>
        <script>
           swal({
                    text: "Username atau Password salah!!!",
                    icon: "warning",
                    dangerMode: true,
                    });
        </script>
    <?php endif; ?>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Data Paket</h2>
            <a href="<?= BASEURLSL ?>/formpaket" class="btn btn-primary btn-sm">Paket Masuk</a>
        </div>
        <div class="table-wrapper">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Resi</th>
                        <th>Ekspedisi</th>
                        <th>Jenis</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Ruang</th>
                        <th>Email</th>
                        <th>Waktu Terima</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($data['isi'] as $paket) : ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?= $paket['no_resi'] ?></td>
                            <td><?= $paket['ekspedisi'] ?></td>
                            <td><?= $paket['jenis_paket'] ?></td>
                            <td><?= $paket['nama_pemilik'] ?></td>
                            <td><?= $paket['status_pemilik'] ?></td>
                            <td><?= $paket['ruang_paket'] ?></td>
                            <td><?= $paket['email'] ?></td>
                            <td><?= $paket['waktu_terima'] ?></td>
                            <td>
                                <a href='<?= BASEURLSL ?>/update/<?= $paket['no_resi'] ?>' class='btn btn-info btn-sm'>Update</a>
                            </td>
                        </tr>
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
                "columnDefs": [{ "orderable": false, "targets": 9 }],
                "pageLength": 10,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]]
            });
        });
    </script>
</body>

</html>
