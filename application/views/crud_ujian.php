<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kelola Ujian</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: Arial, sans-serif;
			background-color: #f9f9f9;
		}

		.container-fluid {
			display: flex;
			height: 100vh;
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

		.content {
			flex: 1;
			padding: 30px;
		}

		.content h1 {
			font-size: 24px;
			margin-bottom: 20px;
			color: #000000;
		}

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

	<!-- Main Content -->
	<div class="content">
	<h4>Anda Login Sebagai <?php echo isset($admin_name) ? $admin_name : 'Admin'; ?></h4>
    <a href="<?php echo site_url('admin_login/logout'); ?>" class="btn btn-sm btn-outline-secondary ml-2">Logout</a>
		<h1>Kelola Ujian</h1>
		<!-- Add exam button -->
		<a href="<?php echo site_url('crud_ujian/tambah'); ?>" class="btn btn-primary mb-3">Tambah Ujian</a>

		<!-- Exam Table -->
		<table>
			<thead>
			<tr>
				<th>ID Ujian</th>
				<th>ID Mapel</th>
				<th>ID Pengajaran</th>
				<th>Link Ujian</th>
				<th>Deskripsi</th>
				<th>Kelola</th>
			</tr>
			</thead>
			<tbody>
			<!-- Looping through the exam data -->
			<?php foreach ($ujian as $u): ?>
				<tr>
					<td><?php echo $u->id_ujian; ?></td>
					<td><?php echo $u->id_mapel; ?></td>
					<td><?php echo $u->id_pengajaran; ?></td>
					<td><a href="<?php echo $u->link_ujian; ?>" target="_blank"><?php echo $u->link_ujian; ?></a></td>
					<td><?php echo $u->deskripsi; ?></td>
					<td>
						<!-- Edit and delete buttons -->
						<a href="<?php echo site_url('crud_ujian/edit/'.$u->id_ujian); ?>" class="btn btn-warning btn-sm">Edit</a>
						<a href="<?php echo site_url('crud_ujian/hapus/'.$u->id_ujian); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
