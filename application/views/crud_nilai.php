<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Nilai</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            margin: 0;
        }

        .sidebar {
            background-color: #D9D9D9;
            color: #000000;
            width: 250px;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .logout-btn {
            background-color: #325279;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 30px;
            transition: background-color 0.3s;
            margin-bottom: 20px;
        }

        .sidebar .logout-btn:hover {
            background-color: #3a6a98;
        }

        .sidebar .menu a {
            color: #000000;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 5px;
            transition: background-color 0.3s;
        }

        .sidebar .menu a:hover {
            background-color: #c7c7c7;
        }

        .content {
            padding: 30px;
            flex-grow: 1;
        }

        table {
            background-color: #D9D9D9;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table th {
            background-color: #2b5c87;
            color: #fff;
            text-align: center;
        }

        table th,
        table td {
            text-align: center;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h4>Anda Login Sebagai <?php echo isset($admin_name) ? $admin_name : 'Admin'; ?></h4>
            <button class="logout-btn" onclick="window.location.href='<?php echo site_url('admin_login/logout'); ?>';">Logout</button>
            <ul class="menu list-unstyled">
                <li><a href="<?php echo site_url('crud_murid'); ?>">Kelola Murid</a></li>
                <li><a href="<?php echo site_url('crud_kelas_jadwal'); ?>">Kelola Kelas dan Jadwal</a></li>
                <li><a href="<?php echo site_url('crud_matapelajaran'); ?>">Kelola Matapelajaran</a></li>
                <li><a href="<?php echo site_url('crud_ujian'); ?>">Kelola Ujian</a></li>
                <li><a href="<?php echo site_url('crud_nilai'); ?>">Kelola Nilai</a></li>
                <li><a href="<?php echo site_url('change_log'); ?>">Change Log</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content flex-grow-1">
            <h1>Kelola Nilai</h1>
            <a href="<?php echo site_url('crud_nilai/tambah'); ?>" class="btn btn-primary mb-3">Tambah Nilai</a>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID Nilai</th>
                        <th>ID Murid</th>
                        <th>Nama Murid</th>
                        <th>ID Mapel</th>
                        <th>Nilai Angka</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($nilai as $n): ?>
                        <tr>
                            <td><?php echo $n->id_nilai; ?></td>
                            <td><?php echo $n->id_murid; ?></td>
                            <td><?php echo $n->nama_murid; ?></td>
                            <td><?php echo $n->id_mapel; ?></td>
                            <td><?php echo $n->nilai_angka; ?></td>
                            <td>
                                <a href="<?php echo site_url('crud_nilai/edit/'.$n->id_nilai); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('crud_nilai/hapus/'.$n->id_nilai); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
