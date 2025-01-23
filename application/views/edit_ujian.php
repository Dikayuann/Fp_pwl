<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Ujian</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center min-vh-100">
	<div class="card shadow-lg p-4" style="max-width: 500px; width: 100%; border-radius: 15px; background-color: rgba(255, 255, 255, 0.9);">
		<!-- Heading with custom color -->
		<h2 class="text-center mb-4" style="color: #2b5c87;">Edit Ujian</h2>
		<form action="<?php echo site_url('crud_ujian/simpan'); ?>" method="post">

			<div class="mb-3">
				<label for="id_mapel" class="form-label">ID Mapel</label>
				<input type="text" class="form-control" id="id_mapel" name="id_mapel" value="<?php echo $ujian->id_mapel; ?>" placeholder="Masukkan ID Mapel" required>
			</div>
			<div class="mb-3">
				<label for="id_pengajar" class="form-label">ID Pengajar</label>
				<input type="text" class="form-control" id="id_pengajar" name="id_pengajar" value="<?php echo $ujian->id_pengajaran; ?>" placeholder="Masukkan ID Pengajar" required>
			</div>
			<div class="mb-3">
				<label for="link_ujian" class="form-label">Link Ujian</label>
				<input type="url" class="form-control" id="link_ujian" name="link_ujian" value="<?php echo $ujian->link_ujian; ?>" placeholder="Masukkan Link Ujian" required>
			</div>
			<div class="mb-3">
				<label for="deskripsi" class="form-label">Deskripsi</label>
				<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" required><?php echo $ujian->deskripsi; ?></textarea>
			</div>
			<button type="submit" class="btn w-100" style="background-color: #2b5c87; color: white; border-color: #2b5c87;">Simpan Perubahan</button>
		</form>
	</div>
</div>

<!-- Bootstrap JS (Optional, for components that require JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
