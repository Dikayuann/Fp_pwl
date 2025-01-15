<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kelola Murid</title>
	<!-- Menambahkan Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: Arial, sans-serif;
			background-color: #FFFFFF;
			margin: 0;
			padding: 0;
		}

		.sidebar {
			background-color: #D9D9D9;
			color: #000000;
			min-height: 100vh;
			padding: 20px;
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
			width: 250px;
		}

		.profile {
			text-align: center;
			margin-bottom: 10px;
		}

		.profile img {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			margin-bottom: 10px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		.profile-btn {
			background-color: #325279;
			color: #fff;
			border: none;
			padding: 10px 50px;
			cursor: pointer;
			border-radius: 30px;
			transition: background-color 0.3s;
		}

		.profile-btn:hover {
			background-color: #3a6a98;
		}

		.menu a {
			text-decoration: none;
			color: #000000;
			font-size: 16px;
			transition: color 0.3s;
		}

		.menu a:hover {
			color: #d0e7ff;
		}

		.content {
			padding: 30px;
			flex-grow: 1;
		}

		.content h1 {
			font-size: 24px;
			margin-bottom: 20px;
			color: #000000;
		}

		table {
			background-color: #D9D9D9;
			border-radius: 10px;
			overflow: hidden;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}

		table th,
		table td {
			padding: 15px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		table th {
			background-color: #2b5c87;
			color: #fff;
			text-align: center;
		}

		table tbody tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		table tbody tr:hover {
			background-color: #f1f1f1;
		}

		.profile-img {
			width: 50px;
			height: 50px;
			border-radius: 50%;
		}

		.container-fluid {
			padding-left: 0; /* Menghilangkan padding kiri pada container */
		}
	</style>
</head>

<body>
<div class="container-fluid d-flex">
	<div class="sidebar">
		<div class="profile">
			<img src="<?php echo base_url('assets/images/profile.jpg'); ?>" alt="Profile Picture">
			<button class="profile-btn">Profil</button>
		</div>
		<ul class="menu list-unstyled">
			<li><a href="<?php echo site_url('crud_murid'); ?>">Kelola Murid</a></li>
			<li><a href="<?php echo site_url('crud_kelas_jadwal'); ?>">Kelola Kelas dan Jadwal</a></li>
			<li><a href="<?php echo site_url('crud_matapelajaran'); ?>">Kelola Matapelajaran</a></li>
			<li><a href="<?php echo site_url('crud_ujian'); ?>">Kelola Ujian</a></li>
			<li><a href="<?php echo site_url('crud_nilai'); ?>">Kelola Nilai</a></li>
			<li><a href="<?php echo site_url('change_log'); ?>">Change Log</a></li>
		</ul>
	</div>
	<div class="content">
		<h1>Kelola Murid</h1>
		<a href="<?php echo site_url('crud_murid/tambah'); ?>" class="btn btn-primary mb-3">Tambah Murid</a>
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>ID Murid</th>
				<th>Nama Murid</th>
				<th>Email Murid</th>
				<th>Tanggal Registrasi</th>
				<th>Password Murid</th>
				<th>Foto Murid</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($murid as $m): ?>
				<tr>
					<td><?php echo $m->id_murid; ?></td>
					<td><?php echo $m->nama_murid; ?></td>
					<td><?php echo $m->email_murid; ?></td>
					<td><?php echo $m->tanggal_registrasi; ?></td>
					<td><?php echo $m->password_murid; ?></td>
					<td>
						<img src="<?php echo base_url('uploads/' . $m->foto_murid); ?>" alt="Foto Murid" class="profile-img" />
					</td>
					<td>
						<a href="<?php echo site_url('crud_murid/edit/'.$m->id_murid); ?>" class="btn btn-warning btn-sm">Edit</a>
						<a href="<?php echo site_url('crud_murid/hapus/'.$m->id_murid); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Menambahkan Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
