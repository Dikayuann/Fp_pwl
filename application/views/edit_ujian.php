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
		<h2 class="text-center mb-4" style="color: #2b5c87;">Edit Ujian</h2>
		<form action="<?php echo site_url('crud_ujian/edit/'.$ujian->id_ujian); ?>" method="post">
			<!-- Hidden ID Field -->
			<input type="hidden" name="id_ujian" value="<?php echo $ujian->id_ujian; ?>">

			<div class="mb-3">
				<label for="id_mapel" class="form-label">Pilih Mata Pelajaran</label>
				<select class="form-select" id="id_mapel" name="id_mapel" required>
					<?php foreach ($mata_pelajaran as $mapel): ?>
						<option value="<?php echo $mapel->id_mapel; ?>" 
							<?php echo ($mapel->id_mapel == $ujian->id_mapel) ? 'selected' : ''; ?>>
							<?php echo $mapel->nama_mapel; ?>
						</option>
					<?php endforeach; ?>
				</select>
			</div>

			<!-- Dropdown untuk Pengajaran -->
			<div class="mb-3">
				<label for="id_pengajaran" class="form-label">Pilih Pengajaran</label>
				<select class="form-select" id="id_pengajaran" name="id_pengajaran" required>
					<?php foreach ($pengajaran as $p): ?>
						<option value="<?php echo $p->id_pengajaran; ?>" 
							<?php echo ($p->id_pengajaran == $ujian->id_pengajaran) ? 'selected' : ''; ?>>
							<?php echo $p->id_pengajaran; ?>
						</option>
					<?php endforeach; ?>
				</select>
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
