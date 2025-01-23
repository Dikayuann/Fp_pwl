<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Murid - Bimbelindo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('/Fp_pwl/uploads/bgadmin.png') no-repeat center center fixed;
            background-size: cover;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .form-container img {
            width: 150px;
            margin-bottom: 20px;
        }

        .form-container h1 {
            font-size: 28px;
            margin: 10px 0;
            color: #2b5c87;
        }

        .form-container p {
            font-size: 16px;
            margin: 0 0 30px;
            color: #666;
        }

        .form-container .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-container label {
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container input[type="date"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border 0.3s ease;
        }

        .form-container input:focus {
            border-color: #4a7db1;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #2b5c87;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #4a7db1;
        }

        .form-container a {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #2b5c87;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 30px;
                max-width: 90%;
            }

            .form-container h1 {
                font-size: 24px;
            }

            .form-container input,
            .form-container button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="form-container">
    <img src="/Fp_pwl/uploads/bimbelindo.png" alt="Logo Bimbelindo">
    <h1>pendaftaran Murid baru Tahun Ajaran 2024/2025</h1>
    <p>Lengkapi data murid di bawah ini:</p>
    <form action="<?php echo site_url('form_registrasi/simpan'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_murid">Nama Murid:</label>
            <input type="text" id="nama_murid" name="nama_murid" required>
        </div>
        <div class="form-group">
            <label for="email_murid">Email Murid:</label>
            <input type="email" id="email_murid" name="email_murid" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="tanggal_registrasi">Tanggal Registrasi:</label>
            <input type="date" id="tanggal_registrasi" name="tanggal_registrasi" required>
        </div>
        <div class="form-group">
            <label for="foto_profil">Foto Profil:</label>
            <input type="file" id="foto_profil" name="foto_profil" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="<?php echo site_url('dashboard'); ?>">Kembali</a>
</div>
</body>
</html>
