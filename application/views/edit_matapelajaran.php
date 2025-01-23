<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Mata Pelajaran</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f8f9fa;
			padding-top: 50px;
		}
		.form-container {
			background-color: white;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			max-width: 600px;
			margin: 20px auto;
		}
		.form-container h2 {
			color: #2b5c87;
			font-size: 26px;
			margin-bottom: 20px;
			text-align: center;
		}
		.form-group label {
			font-weight: bold;
			color: #2b5c87;
		}
		.form-group input:focus {
			border-color: #4a7db1;
			box-shadow: 0 0 5px rgba(74, 125, 177, 0.5);
		}
		.btn-submit {
			background-color: #2b5c87;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			font-weight: bold;
			transition: background-color 0.3s ease;
		}
		.btn-submit:hover {
			background-color: #4a7db1;
			color: white;
		}
		.btn-submit:focus {
			box-shadow: 0 0 8px rgba(74, 125, 177, 0.8);
		}
	</style>
</head>
<body>

<div class="container">
	<div class="form-container">
		<h2>Edit Mata Pelajaran</h2>
		<form action="<?php echo site_url('crud_matapelajaran/update'); ?>" method="post">
			<input type="hidden" name="id_mapel" value="<?php echo $mapel->id_mapel; ?>">

			<div class="form-group">
				<label for="nama_mapel">Nama Mata Pelajaran</label>
				<input type="text" id="nama_mapel" name="nama_mapel" class="form-control" placeholder="Masukkan Nama Mata Pelajaran" value="<?php echo $mapel->nama_mapel; ?>" required>
			</div>

			<div class="form-group">
				<label for="id_kelas">ID Kelas</label>
				<input type="text" id="id_kelas" name="id_kelas" class="form-control" placeholder="Masukkan ID Kelas" value="<?php echo $mapel->id_kelas; ?>" required>
			</div>

			<div class="form-group">
				<label for="id_pengajaran">ID Pengajaran</label>
				<input type="text" id="id_pengajaran" name="id_pengajaran" class="form-control" placeholder="Masukkan ID Pengajaran" value="<?php echo $mapel->id_pengajaran; ?>" required>
			</div>

			<div class="form-group">
				<label for="link_video">Link Video</label>
				<input type="text" id="link_video" name="link" class="form-control" placeholder="Masukkan Link Video" value="<?php echo $mapel->link_video; ?>" required>
			</div>

			<div class="form-group">
				<label for="deskripsi">Deskripsi</label>
				<textarea id="deskripsi" name="deskripsi" class="form-control" rows="3" placeholder="Masukkan Deskripsi Mata Pelajaran" required><?php echo $mapel->deskripsi; ?></textarea>
			</div>

			<div class="text-center">
				<button type="submit" class="btn-submit">Simpan Perubahan</button>
			</div>
		</form>
	</div>
</div>

<!-- Bootstrap JS, Popper.js, jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
