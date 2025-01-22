<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Bimbelindo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for interactivity and visuals */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
        }

        .header {
    		background-color: #212529;
    		color: #fff;
    		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    		position: sticky; 
    		top: 0;
    		z-index: 1050; 
		}


        .header h4 {
            font-weight: bold;
            margin: 0;
        }

        .btn-custom {
            background-color: #ff9900;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-custom:hover {
            background-color: #cc7a00;
            transform: scale(1.05);
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .features-card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .features-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .testimonial-card img {
            border: 4px solid #ff9900;
            transition: transform 0.3s ease;
        }

        .testimonial-card img:hover {
            transform: rotate(5deg);
        }

        .testimonial-card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .footer {
            background-color: #212529;
            color: #fff;
            padding: 20px 0;
        }

        .footer a {
            color: #ff9900;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #cc7a00;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="header py-3 px-4 d-flex justify-content-between align-items-center position-sticky top-0 left-0">
        <h4>Bimbelindo</h4>
        <div>
            <a href="admin_login" class="text-white text-decoration-none mx-2">Login Admin</a>
            <a href="login" class="text-white text-decoration-none mx-2">Login Murid</a>
        </div>
    </div>

    <!-- Hero Section with Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('/Fp_pwl/uploads/bgadmin.png'); background-size: cover; height: 700px; background-position: center;">
                <div class="carousel-caption text-center text-white mb-5">
				<img src="/Fp_pwl/uploads/bimbelindo.png" alt="Bimbelindo" height= "150px">
                    <h1 class="display-6 fw-bold mt-3">Selamat Datang di Bimbelindo</h1>
                    <p class="fs-4 mb-4 mt-2">Belajar Lebih Mudah, Sukses Lebih Dekat!</p>
                    <a href="form_registrasi" class="btn btn-custom px-4 py-2 rounded-5">Mulai Sekarang</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/Fp_pwl/uploads/background.png'); background-size: cover; height: 700px; background-position: center;">
                <div class="carousel-caption text-center text-white mb-5">
					<img src="/Fp_pwl/uploads/bimbelindo.png" alt="Bimbelindo" height= "150px">
                    <h1 class="display-6 fw-bold mt-3">Bimbelindo Menyediakan Kursus Berkualitas</h1>
                    <p class="fs-4 mb-4 mt-2">Belajar bersama tutor terbaik!</p>
                    <a href="form_registrasi" class="btn btn-custom px-4 py-2 rounded-5">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Features Section -->
    <div class="bg-light py-5">
        <h2 class="text-center mb-4 display-5 fw-bold">Kenapa Memilih Kami?</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 container mx-auto">
            <div class="col">
                <div class="card shadow-sm features-card text-center py-4">
                    <i class="bi bi-laptop display-3 text-warning"></i>
                    <div class="card-body">
                        <h5 class="card-title">Belajar Fleksibel</h5>
                        <p class="card-text">Kapan saja, di mana saja dengan akses tak terbatas.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm features-card text-center py-4">
                    <i class="bi bi-people display-3 text-warning"></i>
                    <div class="card-body">
                        <h5 class="card-title">Tutor Berpengalaman</h5>
                        <p class="card-text">Bimbingan langsung dari ahli di bidangnya.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm features-card text-center py-4">
                    <i class="bi bi-book display-3 text-warning"></i>
                    <div class="card-body">
                        <h5 class="card-title">Materi Terlengkap</h5>
                        <p class="card-text">Materi sesuai kebutuhan dan kurikulum terbaru.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="bg-white py-5">
        <h2 class="text-center mb-4 display-5 fw-bold">Apa Kata Mereka?</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 container mx-auto">
            <div class="col">
                <div class="card shadow-sm testimonial-card text-center py-4">
                    <img src="/Fp_pwl/uploads/janu.jpg" class="rounded-circle mb-3" alt="testimoni">
                    <p class="fs-5">"Bimbelindo membantu saya memahami materi dengan cepat."</p>
                    <p><b>John Doe</b></p>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm testimonial-card text-center py-4">
                    <img src="/Fp_pwl/uploads/janu.jpg" class="rounded-circle mb-3" alt="testimoni">
                    <p class="fs-5">"Materinya sangat lengkap dan mudah diakses."</p>
                    <p><b>Jane Smith</b></p>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm testimonial-card text-center py-4">
                    <img src="/Fp_pwl/uploads/janu.jpg" class="rounded-circle mb-3" alt="testimoni">
                    <p class="fs-5">"Pengalaman belajar yang luar biasa!"</p>
                    <p><b>Samuel Lee</b></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer text-center py-3">
        <p>&copy; 2025 Bimbelindo. All Rights Reserved.</p>
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
