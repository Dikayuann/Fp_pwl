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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
    * body {
    font-family: Arial, sans-serif;
    background-color: #FFFFFF;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
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
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="<?php echo base_url('assets/images/profile.jpg'); ?>" alt="Profile Picture">
                <button class="profile-btn">Profil</button>
            </div>
            <ul class="menu">
                <li><a href="#">Kelola murid</a></li>
                <li><a href="#">Kelola kelas dan jadwal</a></li>
                <li><a href="#">Kelola ujian</a></li>
                <li><a href="#">Kelola nilai </a></li>
                <li><a href="#">Change Log</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Kelola Murid</h1>
            <h1><li><a href="#">Tambah Murid</a></li></h1>
            <table>
                <thead>
                    <tr>
                        <th>id murid</th>
                        <th>nama murid</th>
                        <th>email murid</th>
                        <th>password crud_murid</th>
                        <th>tanggal registrasi</th>
                        <th>Kelola</th>
                </thead>
                <tbody>
                    <!-- Data akan diisi dari controller -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>