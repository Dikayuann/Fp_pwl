<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kelola Mata Pelajaran</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		/* Custom styles for the page */
		body {
			font-family: Arial, sans-serif;
			background-color: #FFFFFF;
			margin: 0;
			padding: 0;
		}

		.sidebar {
			width: 250px;
			background-color: #D9D9D9;
			color: #000000;
			min-height: 100vh;
			padding: 20px;
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
		}

		.profile {
			text-align: center;
			margin-bottom: 20px;
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

		.menu {
			list-style: none;
			padding: 0;
		}

		.menu li {
			margin-bottom: 15px;
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

		/* Adjust content layout */
		.content {
			flex: 1;
			padding: 30px;
		}

		.content h1 {
			font-size: 24px;
			margin-bottom: 20px;
			color: #000000;
		}

		/* Table styles */
		table {
			width: 100%;
			border-collapse: collapse;
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

		/* Adjust main container layout */
		.container-fluid {
			padding: 0;
		}

		.row {
			display: flex;
			width: 100%;
		}

		/* Style for main content area */
		.col-md-9 {
			padding-left: 30px;
			padding-right: 30px;
		}
	</style>
</head>

<body>
<div class="container-fluid">
	<div class="row">
		<!-- Sidebar -->
		<div class="col-md-3">
			<div class="sidebar">
				<div class="profile">
					<img src="<?php echo base_url('assets/images/profile.jpg'); ?>" alt="Profile Picture">
					<button class="profile-btn">Profil</button>
				</div>
				<ul class="menu">
					<li><a href="#">Kelola Murid</a></li>
					<li><a href="#">Kelola Kelas dan Jadwal</a></li>
					<li><a href="#">Kelola Mata Pelajaran</a></li>
					<li><a href="#">Kelola Ujian</a></li>
					<li><a href="#">Kelola Nilai</a></li>
					<li><a href="#">Change Log</a></li>
				</ul>
			</div>
		</div>

		<!-- Main Content -->
		<div class="col-md-9">
			<div class="content">
				<h1>Kelola Mata Pelajaran</h1>
				<a href="<?php echo site_url('crud_matapelajaran/tambah'); ?>" class="btn btn-primary mb-3">Tambah Mata Pelajaran</a>
				<table class="table table-striped">
					<thead>
					<tr>
						<th>ID Mapel</th>
						<th>Nama Mapel</th>
						<th>ID Kelas</th>
						<th>ID Pengajaran</th>
						<th>Deskripsi</th>
						<th>Kelola</th>
					</tr>
					</thead>
					<tbody>
					<!-- Data dari controller akan ditampilkan di sini -->
					<?php foreach ($mata_pelajaran as $mapel): ?>
						<tr>
							<td><?php echo $mapel->id_mapel; ?></td>
							<td><?php echo $mapel->nama_mapel; ?></td>
							<td><?php echo $mapel->id_kelas; ?></td>
							<td><?php echo $mapel->id_pengajaran; ?></td>
							<td><?php echo $mapel->deskripsi; ?></td>
							<td class="d-flex justify-content-start align-items-center">
								<a href="<?php echo site_url('crud_matapelajaran/edit/' . $mapel->id_mapel); ?>" class="btn btn-warning btn-sm mr-2">Edit</a>
								<a href="<?php echo site_url('crud_matapelajaran/hapus/' . $mapel->id_mapel); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
