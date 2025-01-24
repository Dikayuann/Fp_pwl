<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas dan Jadwal</title>
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
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container h1 {
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

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f3f7fb;
        }

        .form-group input:focus,
        .form-group select:focus {
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
        <h1>Tambah Kelas dan Jadwal</h1>
        <form action="<?= site_url('crud_kelas_jadwal/simpan') ?>" method="post">

            <!-- Nama Kelas -->
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas" required>
            </div>

            <!-- Pilih Admin -->
            <div class="form-group">
                <label for="id_admin">Pilih Admin</label>
                <select id="id_admin" name="id_admin" required>
                    <option value="">Pilih Admin</option>
                    <?php foreach ($admins as $admin): ?>
                        <option value="<?= $admin->id_admin ?>"><?= $admin->nama_admin ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Jadwal -->
            <div class="form-group">
                <label for="jadwal">Jadwal</label>
                <input type="text" id="jadwal" name="jadwal" placeholder="Masukkan Jadwal" required>
            </div>

            <!-- Pilih Mata Pelajaran -->
            <div class="form-group">
                <label for="id_mapel">Pilih Mata Pelajaran</label>
                <select id="id_mapel" name="id_mapel" required>
                    <option value="">Pilih Mata Pelajaran</option>
                    <?php foreach ($mata_pelajaran as $mapel): ?>
                        <option value="<?= $mapel->id_mapel ?>"><?= $mapel->nama_mapel ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn-submit">Tambahkan</button>
        </form>
    </div>
</body>

</html>
