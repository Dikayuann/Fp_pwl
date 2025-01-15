<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Matapelajaran</title>
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0Ff3sFc4P5cX5Tk1zI5gOgujK/Jto27j8Eem1k4k1xGoZn0i" crossorigin="anonymous">
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
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 400px;
			text-align: left;
		}

		.form-container h2 {
			color: #2b5c87;
			font-size: 24px;
			margin-bottom: 30px;
			text-align: center;
		}

		.form-group {
			margin-bottom: 20px;
		}

		.form-group label {
			font-size: 14px;
			color: #333;
			margin-bottom: 8px;
			display: block;
		}

		.form-group input {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			background-color: #f3f7fb;
			transition: all 0.3s;
		}

		.form-group input:focus {
			outline: none;
			border-color: #4a7db1;
			background-color: #fff;
		}

		.btn-submit {
			width: 100%;
			padding: 12px;
			background-color: #2b5c87;
			border: none;
			border-radius: 5px;
			color: white;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
			transition: all 0.3s;
		}

		.btn-submit:hover {
			background-color: #4a7db1;
		}

		.form-container p {
			font-size: 12px;
			color: #666;
			margin-top: 10px;
		}
	</style>
</head>
<body>
<div class="form-container">
	<h2>Tambah Matapelajaran</h2>
	<form action="<?php echo site_url('crud_matapelajaran/simpan'); ?>" method="post">
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
	<p>Pastikan data yang dimasukkan sudah benar.</p>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyA6JpKp3gXglWATbL+7m28F1f//MRCpXzRmWf0p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Ff3sFc4P5cX5Tk1zI5gOgujK/Jto27j8Eem1k4k1xGoZn0i" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Ff3sFc4P5cX
