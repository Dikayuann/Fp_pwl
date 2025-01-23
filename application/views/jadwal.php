<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran</title>
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
            background-color: #325279;
            color: #fff;
            text-align: center;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
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
            <a href="<?php echo site_url('login/logout'); ?>" class="profile-btn mt-5">Logout</a>
        </div>
        <ul class="menu">
            <li><a href="dashboard">Dashboard</a></li>
            <li><a href="jadwal">Jadwal Pelajaran</a></li>
            <li><a href="pendaftaran">Pendaftaran Matapelajaran</a></li>
            <li><a href="ujian">Ujian</a></li>
            <li><a href="nilai">Nilai Hasil Pembelajaran</a></li>
            <li><a href="pembayaran">Pembayaran</a></li>
        </ul>
    </div>
        <div class="content">
            <h1>Jadwal Pelajaran</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Guru/Pengajar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kelas as $jd): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $jd->jadwal; ?></td>
                            <td><?php echo $jd->nama_mapel; ?></td>
                            <td><?php echo $jd->nama_kelas; ?></td>
                            <td><?php echo $jd->nama_admin; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
    <footer>&copy; 2025 Bimbelindo. All rights reserved.</footer>
</body>

</html>
