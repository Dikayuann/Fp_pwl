<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
    * body {
    font-family: Arial, sans-serif;
    background-color: #FFFFFF;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #D9D9D9;
    color: #000000;
    min-height: 100vh;
    padding: 20px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}

.profile {
    text-align: center;
    margin-bottom: 20px;
}

.profile img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.profile-btn {
    background-color: #325279;
    color: #fff;
    border: none;
    padding: 10px 50px;
    cursor: pointer;
    border-radius: 30px;
    transition: background-color 0.3s;
}

.profile-btn:hover {
    background-color: #3a6a98;
}

.menu {
    list-style: none;
    padding: 0;
}

.menu li {
    margin-bottom: 15px;
}

.menu a {
    text-decoration: none;
    color: #000000;
    font-size: 16px;
    transition: color 0.3s;
}

.menu a:hover {
    color: #d0e7ff;
}

.content {
    flex: 1;
    padding: 30px;
}

.content h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #000000;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #D9D9D9;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

table th,
table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #2b5c87;
    color: #fff;
    text-align: center;
}

table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tbody tr:hover {
    background-color: #f1f1f1;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="<?php echo base_url('assets/images/profile.jpg'); ?>" alt="Profile Picture">
                <button class="profile-btn">Profil</button>
            </div>
            <ul class="menu">
                <li><a href="#">Kelola murid</a></li>
                <li><a href="#">Kelola kelas dan jadwal</a></li>
                <li><a href="#">Kelola Matapelajaran</a></li>
                <li><a href="#">Kelola ujian</a></li>
                <li><a href="#">Kelola nilai</a></li>
                <li><a href="#">Change Log</a></li>
            </ul>
        </div>
        <div class="content">
        <h4>Anda Login Sebagai <?php echo isset($admin_name) ? $admin_name : 'Admin'; ?></h4>
        <a href="<?php echo site_url('admin_login/logout'); ?>" class="btn btn-sm btn-outline-secondary ml-2">Logout</a>
            <h1>Kelola Kelas dan Jadwal</h1>
            <h2><a href="<?php echo site_url('tambah_kelasdanjadwal'); ?>">Tambah Kelas dan Jadwal</a></h2>
            <table>
                <thead>
                    <tr>
                        <th>ID Kelas</th>
                        <th>Nama Kelas</th>
                        <th>ID Admin</th>
                        <th>Jadwal</th>
                        <th>Kelola</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kelas as $k): ?>
                    <tr>
                        <td><?php echo $k->id_kelas; ?></td>
                        <td><?php echo $k->nama_kelas; ?></td>
                        <td><?php echo $k->id_admin; ?></td>
                        <td><?php echo $k->jadwal; ?></td>
                        <td>
                            <a href="<?php echo site_url('edit_kelasdanjadwal/'.$k->id_kelas); ?>">Edit</a>
                            <a href="<?php echo site_url('crud_kelas_jadwal/hapus/'.$k->id_kelas); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>