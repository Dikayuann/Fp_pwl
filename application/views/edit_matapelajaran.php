<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Matapelajaran</title>
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
        <h2>Edit Matapelajaran</h2>
        <form action="<?php echo site_url('matapelajaran/simpan'); ?>" method="post">
            <div class="form-group">
                <label for="id_mapel">ID Mapel</label>
                <input type="text" id="id_mapel" name="id_mapel" placeholder="Masukkan ID Mapel" required>
            </div>
            <div class="form-group">
                <label for="nama_mapel">Nama Mapel</label>
                <input type="text" id="nama_mapel" name="nama_mapel" placeholder="Masukkan Nama Mapel" required>
            </div>
            <div class="form-group">
                <label for="id_kelas">ID Kelas</label>
                <input type="text" id="id_kelas" name="id_kelas" placeholder="Masukkan ID Kelas" required>
            </div>
            <div class="form-group">
                <label for="id_pengajaran">ID Pengajaran</label>
                <input type="text" id="id_pengajaran" name="id_pengajaran" placeholder="Masukkan ID Pengajaran" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" required>
            </div>
            <button type="submit" class="btn-submit">Tambahkan</button>
        </form>
    </div>
</body>
</html>
