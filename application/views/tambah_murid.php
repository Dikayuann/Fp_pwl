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
            background-color: #e8f0fa;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container h2 {
            color: #2b5c87;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            color: #2b5c87;
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f3f7fb;
        }

        .form-group input:focus {
            outline: none;
            border: 2px solid #4a7db1;
        }

        .form-group input[type="file"] {
            background-color: white;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #2b5c87;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-submit:hover {
            background-color: #4a7db1;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Murid</h2>
        <form action="<?php echo site_url('crud_murid/simpan'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Murid:</label>
                <input type="text" name="nama_murid" required>
            </div>
            
            <div class="form-group">
                <label>Email Murid:</label>
                <input type="email" name="email_murid" required>
            </div>
            
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label>Tanggal Registrasi:</label>
                <input type="date" name="tanggal_registrasi" required>
            </div>
            
            <div class="form-group">
                <label>Foto Profil:</label>
                <input type="file" name="foto_profil" required>
            </div>
            
            <button type="submit" class="btn-submit">Simpan</button>
        </form>
        <a href="<?php echo site_url('crud_murid'); ?>">Kembali</a>
    </div>
</body>
</html>