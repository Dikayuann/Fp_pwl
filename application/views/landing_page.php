<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selamat Datang di Bimbelindo</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Header Section -->
<div class="bg-dark text-white py-3 px-4 d-flex justify-content-between align-items-center shadow-sm position-sticky top-0 left-0">
	<h4 class="m-0">Bimbelindo</h4>
	<div>
		<!-- Link ke halaman login admin -->
		<a href="<?php echo site_url('admin_login'); ?>" class="text-white text-decoration-none mx-2">Login Admin</a>

		<!-- Link ke halaman login murid -->
		<a href="<?php echo site_url('login'); ?>" class="text-white text-decoration-none mx-2">Login Murid</a>
	</div>
</div>

<!-- Hero Section -->
<div class="bg-cover text-white text-center py-5" style="background-image: url('https://via.placeholder.com/1500x800/003366/ffffff?text=Hero+Image');">
	<h1 class="display-3 fw-bold">Selamat Datang di Bimbelindo.</h1>
	<p class="fs-4 mb-4"><b>“Belajar Lebih Mudah, Sukses Lebih Dekat!”</b></p>
	<p class="mb-4">Selamat datang di Bimbelindo, platform kursus online terpercaya yang siap membantu Anda meraih prestasi terbaik. Nikmati pengalaman belajar fleksibel dengan materi lengkap, tutor berpengalaman, dan metode yang efektif.</p>
	<a href="#" class="btn btn-warning text-white px-4 py-2 rounded-5">Masuk</a>
</div>

<!-- Features Section -->
<div class="bg-white py-5">
	<h2 class="text-center mb-4 display-5 fw-bold">Fitur Kami</h2>
	<div class="row row-cols-1 row-cols-md-3 g-4">
		<div class="col">
			<div class="card shadow-sm">
				<div class="card-body text-center">
					<h4 class="card-title mb-3">Fleksibilitas Belajar</h4>
					<p class="card-text">Belajar kapan saja dan di mana saja dengan materi lengkap dan tutor berpengalaman.</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card shadow-sm">
				<div class="card-body text-center">
					<h4 class="card-title mb-3">Metode Efektif</h4>
					<p class="card-text">Metode belajar yang telah terbukti efektif untuk meningkatkan hasil belajar Anda.</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card shadow-sm">
				<div class="card-body text-center">
					<h4 class="card-title mb-3">Komunitas Belajar</h4>
					<p class="card-text">Bergabung dengan komunitas untuk berbagi pengalaman dan tips belajar bersama.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Testimonial Section -->
<div class="bg-light py-5">
	<h2 class="text-center mb-4 display-5 fw-bold">Testimonial</h2>
	<div class="row row-cols-1 row-cols-md-3 g-4">
		<div class="col">
			<div class="text-center">
				<img src="https://via.placeholder.com/100" alt="testimoni" class="rounded-circle mb-3">
				<p class="fs-5">"Bimbelindo sangat membantu saya dalam belajar. Tutor yang berpengalaman membuat saya cepat paham."</p>
				<p><b>John Doe</b></p>
			</div>
		</div>
		<div class="col">
			<div class="text-center">
				<img src="https://via.placeholder.com/100" alt="testimoni" class="rounded-circle mb-3">
				<p class="fs-5">"Materi lengkap dan bisa diakses kapan saja. Sangat membantu dalam mempersiapkan ujian."</p>
				<p><b>Jane Smith</b></p>
			</div>
		</div>
		<div class="col">
			<div class="text-center">
				<img src="https://via.placeholder.com/100" alt="testimoni" class="rounded-circle mb-3">
				<p class="fs-5">"Pelayanan yang sangat baik dan metode pembelajaran yang sangat menyenangkan!"</p>
				<p><b>Samuel Lee</b></p>
			</div>
		</div>
	</div>
</div>

<!-- Footer Section -->
<div class="bg-dark text-white text-center py-3">
	<p class="m-0">&copy; 2025 Bimbelindo. All Rights Reserved.</p>
	<a href="#" class="text-white text-decoration-none mx-2">Privacy Policy</a> | <a href="#" class="text-white text-decoration-none mx-2">Terms of Service</a>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
