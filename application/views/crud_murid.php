<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kelola Murid</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		/* Menghapus margin dan padding default pada body dan container */
		body, .container-fluid {
			margin: 0;
			padding: 0;
		}

		/* Sidebar adjustment */
		.sidebar {
			width: 250px;
			height: 100vh;
			padding: 0;
			transition: all 0.3s ease; /* Menambahkan transisi pada sidebar */
		}

		/* Hover effect for sidebar */
		.sidebar:hover {
			background-color: #0069d9; /* Mengubah warna background saat hover */
		}

		/* Konten utama adjustment */
		.content {
			flex-grow: 1;
			padding: 20px;
		}

		/* Hover effect pada link di sidebar */
		.nav-link:hover {
			background-color: #0056b3; /* Mengubah background saat hover */
			color: #ffffff; /* Mengubah warna teks saat hover */
		}

		/* Hover effect pada tombol di sidebar */
		.btn:hover {
			background-color: #444; /* Mengubah background tombol saat hover */
		}

		/* Hover effect pada baris tabel */
		.table tbody tr:hover {
			background-color: #f1f1f1; /* Mengubah warna latar belakang baris tabel saat hover */
		}
	</style>
</head>

<body>
<div class="container-fluid d-flex">
	<!-- Sidebar -->
	<div class="sidebar bg-primary text-white p-3">
		<div class="profile text-center mb-4">
			<img src="<?php echo base_url('assets/images/profile.jpg'); ?>" alt="Profile Picture" class="rounded-circle mb-2" style="width: 100px; height: 100px;">
			<button class="btn btn-dark w-100">Profil</button>
		</div>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Kelola Murid</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Kelola Kelas dan Jadwal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Kelola Ujian</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Kelola Nilai</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Change Log</a>
			</li>
		</ul>
	</div>

	<!-- Main Content -->
	<div class="content flex-grow-1 p-4">
		<h1>Kelola Murid</h1>
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>ID Murid</th>
				<th>Nama Murid</th>
				<th>Email Murid</th>
				<th>Password</th>
				<th>Tanggal Registrasi</th>
				<th>Kelola</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($students as $student): ?>
				<tr>
					<td><?php echo $student->id_murid; ?></td>
					<td><?php echo $student->nama_murid; ?></td>
					<td><?php echo $student->email_murid; ?></td>
					<td><?php echo $student->password_murid; ?></td>
					<td><?php echo $student->tanggal_registrasi; ?></td>
					<td>
						<a href="#" class="btn btn-info btn-sm">Edit</a>
						<a href="#" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
