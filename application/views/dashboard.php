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
			margin: 0;
			padding: 0;
		}

		.header {
			background-color: #325279;
			color: #ffffff;
			padding: 10px 20px;
			text-align: left;
			font-size: 20px;
			font-weight: bold;
		}

		.container {
			display: flex;
			min-height: 100vh;
		}

		.sidebar {
			width: 250px;
			background-color: #D9D9D9;
			color: #000000;
			padding: 20px;
			height: 100vh;
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
			color: #3a6a98;
		}

		.content {
			flex: 1;
			padding: 30px;
			background-color: #F8F9FA;
		}

		.content h1 {
			font-size: 24px;
			margin-bottom: 20px;
			color: #000000;
			text-align: center;
		}

		.card-container {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 20px;
			margin-top: 20px;
		}

		.card {
			background-color: #D9D9D9;
			border-radius: 10px;
			padding: 20px;
			text-align: center;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s, box-shadow 0.3s;
		}

		.card:hover {
			transform: translateY(-5px);
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
		}

		.card h3 {
			font-size: 20px;
			margin-bottom: 10px;
			color: #325279;
		}

		.card a {
			text-decoration: none;
			color: #ffffff;
			background-color: #325279;
			padding: 10px 20px;
			border-radius: 5px;
			transition: background-color 0.3s;
		}

		.card a:hover {
			background-color: #3a6a98;
		}

		footer {
			text-align: center;
			padding: 10px;
			background-color: #325279;
			color: #ffffff;
			margin-top: 20px;
			position: relative;
		}
	</style>
</head>

<body>
<div class="header">Bimbelindo</div>
<div class="container">
	<div class="sidebar">
		<div class="profile">
			<img src="assets/images/profile.jpg" alt="Profile Picture">
			<button class="profile-btn">Profil</button>
		</div>
		<ul class="menu">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Jadwal Pelajaran</a></li>
			<li><a href="#">Pendaftaran Matapelajaran</a></li>
			<li><a href="#">Ujian</a></li>
			<li><a href="#">Nilai Hasil Pembelajaran</a></li>
			<li><a href="#">Pembayaran</a></li>
		</ul>
	</div>
	<div class="content">
		<h1>Dashboard Murid</h1>
		<div class="card-container">
			<?php foreach ($matapelajaran as $mapel): ?>
				<div class="card">
					<h3><?php echo $mapel->nama_mapel; ?></h3>
					<a href="#">Jelajahi</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<footer>&copy; 2024 Bimbelindo. All rights reserved.</footer>
</body>

</html>
