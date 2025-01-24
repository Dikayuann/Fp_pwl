<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Ujian</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center min-vh-100">
	<div class="card shadow-lg p-4" style="max-width: 500px; width: 100%; border-radius: 15px; background-color: rgba(255, 255, 255, 0.9);">
		<h2 class="text-center mb-4" style="color: #2b5c87;">Tambah Ujian</h2>
		<form action="<?php echo site_url('crud_ujian/simpan'); ?>" method="post">
			<div class="mb-3">
				<label for="id_mapel" class="form-label">Pilih Mata Pelajaran</label>
				<select class="form-select" id="id_mapel" name="id_mapel" required>
					<option value="">-- Pilih Mata Pelajaran --</option>
					<?php foreach ($mata_pelajaran as $mapel): ?>
						<option value="<?php echo $mapel->id_mapel; ?>"><?php echo $mapel->nama_mapel; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mb-3">
				<label for="id_pengajaran" class="form-label">Pilih Pengajar</label>
				<select class="form-select" id="id_pengajaran" name="id_pengajaran" required>
					<option value="">-- Pilih Pengajar --</option>
					<?php foreach ($pengajaran as $pengajar): ?>
						<option value="<?php echo $pengajar->id_pengajaran; ?>">Pengajaran <?php echo $pengajar->id_pengajaran; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mb-3">
				<label for="link_ujian" class="form-label">Link Ujian</label>
				<input type="url" class="form-control" id="link_ujian" name="link_ujian" placeholder="Masukkan Link Ujian" required>
			</div>
			<div class="mb-3">
				<label for="deskripsi" class="form-label">Deskripsi</label>
				<textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan Deskripsi" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary w-100" style="background-color: #2b5c87; border-color: #2b5c87;">Tambahkan</button>
		</form>
	</div>
</div>

<!-- Bootstrap JS (Optional, for components that require JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
