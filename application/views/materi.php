<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
        }

        .header {
            background-color: #325279;
            color: #ffffff;
            padding: 20px;
            text-align: left;
            font-size: 22px;
            font-weight: bold;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #D9D9D9;
            color: #000000;
            height: 100vh;
            padding: 0;
        }

        .profile {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .profile p {
            margin-bottom: 30px;
        }

        .profile-btn {
            background-color: #325279;
            color: #fff;
            border: none;
            padding: 10px 50px;
            cursor: pointer;
            border-radius: 30px;
            transition: background-color 0.3s;
            margin-top: 10px;
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
            display: block;
            text-decoration: none;
            color: #000000;
            font-size: 16px;
            padding: 10px 20px;
            transition: color 0.3s, background-color 0.3s;
        }

        .menu a:hover {
            color: #ffffff;
            background-color: #3a6a98;
        }

        .content {
            flex: 1;
            padding: 30px;
            background-color: #F8F9FA;
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #000000;
            text-align: center;
        }

        .material-section {
            background-color: #D9D9D9;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .material-section h2 {
            font-size: 18px;
            color: #325279;
            margin-bottom: 10px;
        }

        .material-section p {
            font-size: 14px;
            color: #555555;
            margin-bottom: 30px;
        }

        .material-section a {
            color: #ffffff;
            background-color: #325279;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .material-section a:hover {
            background-color: #3a6a98;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #325279;
            color: #ffffff;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="header">Bimbelindo</div>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="/Fp_pwl/uploads/<?php echo $this->session->userdata('foto_murid'); ?>" alt="Profile Picture">
                <p><?php echo $this->session->userdata('nama_murid'); ?></p>
                <a href="<?php echo site_url('login/logout'); ?>" class="profile-btn">Logout</a>
            </div>
        <ul class="menu">
            <li><a href="<?php echo site_url('dashboard'); ?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('jadwal'); ?>">Jadwal Pelajaran</a></li>
            <li><a href="<?php echo site_url('pendaftaran'); ?>">Pendaftaran Matapelajaran</a></li>
            <li><a href="<?php echo site_url('ujian'); ?>">Ujian</a></li>
            <li><a href="<?php echo site_url('nilai'); ?>">Nilai Hasil Pembelajaran</a></li>
            <li><a href="<?php echo site_url('pembayaran'); ?>">Pembayaran</a></li>
        </ul>
        </div>
        <div class="content">
            <h1>Materi</h1>
            <?php foreach ($materi as $m): ?>
                <div class="material-section">
                    <h2><?php echo $m->nama_mapel; ?> - Deskripsi</h2>
                    <p><?php echo $m->deskripsi; ?></p>
                    <a href="<?php echo $m->link_video; ?>" target="_blank">Lihat Video</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <footer>&copy; 2025 Bimbelindo. All rights reserved.</footer>
</body>

</html>
