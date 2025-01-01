<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
            padding: 20px 30px;
            font-size: 20px;
            font-weight: bold;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #D9D9D9;
            padding: 20px;
            min-height: 100vh;
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
            color: #ffffff;
            border: none;
            padding: 10px 50px;
            border-radius: 20px;
            cursor: pointer;
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
            color: #3a6a98;
        }

        .content {
            flex: 1;
            padding: 30px;
            background-color: #F8F9FA;
        }

        .content h1 {
            font-size: 24px;
            color: #000000;
            margin-bottom: 20px;
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
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #325279;
            color: #ffffff;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        footer {
            background-color: #325279;
            color: #ffffff;
            text-align: center;
            padding: 20px 30px;
        }
    </style>
</head>

<body>
    <div class="header">Bimbelindo</div>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="<?php echo base_url('assets/images/profile.jpg'); ?>" alt="Profile Picture">
                <button class="profile-btn">Profil</button>
            </div>
            <ul class="menu">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Jadwal Pelajaran</a></li>
                <li><a href="#">Pendaftaran Matapelajaran</a></li>
                <li><a href="#">Ujian</a></li>
                <li><a href="#">Nilai Hasil Pembelajaran</a></li>
                <li><a href="#">Pembayaran</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Pembayaran</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>No Rek</th>
                        <th>Konfirmasi Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan diisi dari controller -->
                </tbody>
            </table>
        </div>
    </div>
    <footer>&copy; 2024 Bimbelindo. All rights reserved.</footer>
</body>

</html>
