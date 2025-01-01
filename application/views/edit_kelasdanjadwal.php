<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas dan Jadwal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #e8f0fa; /* Sama dengan form Tambah Murid */
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* Konsisten dengan Tambah Murid */
            border-radius: 15px; /* Konsisten dengan Tambah Murid */
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container h1 {
            color: #2b5c87; /* Sama dengan warna heading Tambah Murid */
            font-size: 24px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            color: #2b5c87; /* Sama dengan label Tambah Murid */
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
            background-color: #f3f7fb; /* Sama dengan input Tambah Murid */
        }

        .form-group input:focus {
            outline: none;
            border: 2px solid #4a7db1; /* Sama dengan efek fokus Tambah Murid */
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #2b5c87; /* Sama dengan tombol Tambah Murid */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-submit:hover {
            background-color: #4a7db1; /* Sama dengan hover tombol Tambah Murid */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit Kelas dan Jadwal</h1>
        <form action="<?= base_url('register/submit') ?>" method="post">
            <div class="form-group">
                <label for="id_kelas">ID Kelas</label>
                <input type="text" id="id_kelas" name="id_kelas" placeholder="Masukkan ID Kelas" required>
            </div>

            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas" required>
            </div>

            <div class="form-group">
                <label for="id_murid">ID Murid</label>
                <input type="text" id="id_murid" name="id_murid" placeholder="Masukkan ID Murid" required>
            </div>

            <div class="form-group">
                <label for="id_admin">ID Admin</label>
                <input type="text" id="id_admin" name="id_admin" placeholder="Masukkan ID Admin" required>
            </div>

            <div class="form-group">
                <label for="tanggal-lahir">Jadwal</label>
                <input type="text" id="tanggal-lahir" name="tanggal-lahir"placeholder="Masukkan hari" required>
            </div>

            <button type="submit" class="btn-submit">Tambahkan</button>
        </form>
    </div>
</body>
</html>
