<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Mata Pelajaran</title>
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

		.content a {
            margin-top: 10px;
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
            <h1>Kelola Mata Pelajaran</h1>
            <a href="<?php echo site_url('crud_matapelajaran/tambah'); ?>" class="btn btn-primary mb-3">Tambah Mata Pelajaran</a>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID Mapel</th>
                        <th>Nama Mapel</th>
                        <th>ID Kelas</th>
                        <th>ID Pengajaran</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mata_pelajaran as $mapel): ?>
                        <tr>
                            <td><?php echo $mapel->id_mapel; ?></td>
                            <td><?php echo $mapel->nama_mapel; ?></td>
                            <td><?php echo $mapel->id_kelas; ?></td>
                            <td><?php echo $mapel->id_pengajaran; ?></td>
                            <td><?php echo $mapel->deskripsi; ?></td>
                            <td>
                                <a href="<?php echo site_url('crud_matapelajaran/edit/'.$mapel->id_mapel); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('crud_matapelajaran/hapus/'.$mapel->id_mapel); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
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
