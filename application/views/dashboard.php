<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Murid</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: Arial, sans-serif;
			background-color: #FFFFFF;
			padding-top: 20px; /* Tambahkan padding untuk memberi ruang di atas konten */
		}

		.header {
			background-color: #325279;
			color: #ffffff;
			padding: 20px;
			text-align: left;
			font-size: 22px;
			font-weight: bold;
			position: fixed;
			width: 100%;
			top: 0;
			left: 0;
			z-index: 1000;
		}

		.container {
			display: flex;
			min-height: 100vh;
			margin-top: 60px; /* Memberikan ruang agar konten tidak tertutup header fixed */
		}

		.sidebar {
			width: 250px;
			background-color: #D9D9D9;
			color: #000000;
			height: 100vh;
			padding: 0;
			position: fixed;
			top: 60px; /* Menempatkan sidebar tepat di bawah header */
			left: 0;
			z-index: 999;
			overflow-y: auto;
			box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
		}

		.profile {
			text-align: center;
			margin-bottom: 20px;
			padding: 20px;
		}

		.profile img {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			margin-bottom: 10px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			object-fit: cover;
		}

		.profile p {
			margin-bottom: 30px;
		}

		.profile a {
			text-decoration: none;
		}

		.profile-btn {
			background-color: #325279;
			color: #fff;
			border: none;
			padding: 10px 50px;
			cursor: pointer;
			border-radius: 30px;
			transition: background-color 0.3s;
			margin-top: 10px;
		}

		.profile-btn:hover {
			background-color: #3a6a98;
		}

		.menu {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.menu li {
			margin-bottom: 15px;
		}

		.menu a {
			display: block;
			text-decoration: none;
			color: #000000;
			font-size: 16px;
			padding: 10px 20px;
			transition: color 0.3s, background-color 0.3s;
		}

		.menu a:hover {
			color: #ffffff;
			background-color: #3a6a98;
		}

		.content {
			flex: 1;
			padding: 30px;
			margin-left: 250px; /* Memberikan ruang untuk sidebar yang fixed */
		}

		.content h1 {
			font-size: 28px;
			color: #325279;
			margin-bottom: 20px;
			text-align: center;
		}

		.card-container {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
			gap: 30px;
			margin-top: 30px;
		}

		.card {
			background-color: #fff;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s, box-shadow 0.3s;
			text-align: center;
		}

		.card:hover {
			transform: translateY(-5px);
			box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
		}

		.card h3 {
			font-size: 20px;
			color: #325279;
			margin-bottom: 15px;
		}

		.card p {
			font-size: 14px;
			color: #555;
			margin-bottom: 20px;
		}

		.card a.explore-btn {
			display: inline-block;
			text-decoration: none;
			color: #ffffff;
			background-color: #325279;
			padding: 12px 25px;
			border-radius: 30px;
			font-size: 14px;
			font-weight: bold;
			transition: background-color 0.3s ease-in-out, transform 0.3s ease;
		}

		.card a.explore-btn:hover {
			background-color: #3a6a98;
			transform: scale(1.05);
			box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
		}

		footer {
			margin-left: 250px;
			text-align: center;
			padding: 20px;
			background-color: #325279;
			color: #ffffff;
			position: relative;
		}
	</style>
</head>

<body>
	<div class="header">Bimbelindo</div>
	<div class="container">
		<div class="sidebar">
			<div class="profile">
				<img src="/Fp_pwl/uploads/foto/<?php echo $this->session->userdata('foto_murid'); ?>" alt="Profile Picture">
				<p><?php echo $this->session->userdata('nama_murid'); ?></p>
				<a href="<?php echo site_url('login/logout'); ?>" class="profile-btn mt-5">Logout</a>
			</div>
			<ul class="menu">
				<li><a href="dashboard">Dashboard</a></li>
                <li><a href="kelas">Jadwal</a></li>
                <li><a href="pendaftaran">Pendaftaran Kelas</a></li>
                <li><a href="ujian">Ujian</a></li>
                <li><a href="nilai">Nilai</a></li>
			</ul>
		</div>
		<div class="content">
            <h1>Dashboard Murid</h1>
			<p>Selamat datang, <?php echo $this->session->userdata('nama_murid'); ?></p>
            <div class="card-container">
                <?php foreach ($matapelajaran as $mapel): ?>
                    <div class="card">
                        <h3><?php echo $mapel->nama_mapel; ?></h3>
                        <p><?php echo $mapel->deskripsi; ?></p>
                        <a href="<?php echo site_url('materi/'.$mapel->id_mapel); ?>" class="explore-btn">Jelajahi</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
	</div>
	<footer>&copy; 2025 Bimbelindo. All rights reserved.</footer>
</body>

</html>
