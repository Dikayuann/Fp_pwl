<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #D9D9D9;
            height: 100vh;
            padding-top: 20px;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
        }
        .menu-link {
            text-decoration: none;
            color: #000;
            font-weight: 500;
        }
        .menu-link:hover {
            text-decoration: none;
            color: #007bff;
        }
        .card {
            border: none;
            border-radius: 10px;
            color: #fff;
        }
        .card h5 {
            font-weight: bold;
        }
        .bg-custom-red { background-color: #ff6b6b; }      /* Merah cerah */
        .bg-custom-blue { background-color: #4dabf7; }     /* Biru cerah */
        .bg-custom-purple { background-color: #b692f6; }   /* Ungu pastel */
        .bg-custom-cyan { background-color: #22d3ee; }     /* Cyan */
        .bg-custom-yellow { background-color: #fcd34d; }   /* Kuning pastel */
        .bg-custom-green { background-color: #34d399; }    /* Hijau pastel */
        .bg-custom-pink { background-color: #f472b6; }     /* Merah muda */
        .bg-custom-orange { background-color: #fb923c; }   /* Oranye pastel */
        .bg-custom-teal { background-color: #2dd4bf; }     /* Hijau kebiruan */
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar">
            <div class="text-center">
                <img src="path/to/profile.jpg" alt="Profile" class="profile-picture">
                <h5 class="mt-3">Profil</h5>
            </div>
            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a class="menu-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="menu-link" href="#">Jadwal Pelajaran</a>
                </li>
                <li class="nav-item">
                    <a class="menu-link" href="#">Pendaftaran Matapelajaran</a>
                </li>
                <li class="nav-item">
                    <a class="menu-link" href="#">Ujian</a>
                </li>
                <li class="nav-item">
                    <a class="menu-link" href="#">Nilai Hasil Pembelajaran</a>
                </li>
                <li class="nav-item">
                    <a class="menu-link" href="#">Pembayaran</a>
                </li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="col-md-9">
            <h3 class="mt-4">Dashboard Murid, Hai /nama murid dalam session ini/</h3>
            <div class="row mt-3">
                <?php
                $subjects = [
                    ['name' => 'Bahasa Indonesia', 'color' => 'bg-custom-red'],
                    ['name' => 'Bahasa Inggris', 'color' => 'bg-custom-blue'],
                    ['name' => 'Matematika', 'color' => 'bg-custom-purple'],
                    ['name' => 'Komputer', 'color' => 'bg-custom-cyan'],
                    ['name' => 'Seni', 'color' => 'bg-custom-yellow', 'text' => 'text-dark'],
                    ['name' => 'Coding', 'color' => 'bg-custom-green'],
                    ['name' => 'UI/UX', 'color' => 'bg-custom-pink'],
                    ['name' => 'Fotografi', 'color' => 'bg-custom-teal'],
                    ['name' => 'Editing', 'color' => 'bg-custom-orange'],
                ];
                foreach ($subjects as $subject): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card <?= $subject['color']; ?> <?= isset($subject['text']) ? $subject['text'] : ''; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $subject['name']; ?></h5>
                                <a href="#" class="btn btn-outline-light btn-sm float-end">➡</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
