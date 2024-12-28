<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #FFFFFF;
    }

    .container {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 250px;
        background-color: #D9D9D9;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
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

    .profile .profile-btn {
        background-color: #325279;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 30px;
        transition: background-color 0.3s;
        text-align: center;
    }

    .profile .profile-btn:hover {
        background-color: #3a6a98;
    }

    .menu {
        list-style: none;
        width: 100%;
        padding: 0;
    }

    .menu li {
        margin-bottom: 15px;
    }

    .menu a {
        text-decoration: none;
        color: #000000;
        font-size: 16px;
        display: block;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .menu a:hover {
        background-color: #BFCAD9;
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

    .material-section {
        background-color: #D9D9D9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .material-section h2 {
        background-color: #325279;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        font-size: 20px;
        margin-bottom: 20px;
        text-align: center;
    }

    .material-section p {
        margin-bottom: 10px;
        line-height: 1.5;
        color: #000000;
        text-align: left;
    }

    .material-section ul {
        padding-left: 20px;
        margin-bottom: 10px;
        text-align: left;
    }

    .material-section ol {
        padding-left: 20px;
        text-align: left;
    }

    .material-section a {
        display: inline-block;
        background-color: #325279;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 20px;
        text-align: center;
    }

    .material-section a:hover {
        background-color: #3a6a98;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="profile.jpg" alt="Profile Picture">
                <div>
                    <button class="profile-btn">Profil</button>
                </div>
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
            <h1>Materi</h1>
            <div class="material-section">
                <h2>Bahasa Indonesia - Deskripsi</h2>
                <p><strong>Apa itu 5W1H?</strong><br>5W1H adalah metode analisis yang digunakan untuk memahami suatu
                    situasi, memecahkan masalah, atau menyusun perencanaan. Konsep ini berasal dari pertanyaan dalam
                    bahasa Inggris:</p>
                <ul>
                    <li>What (Apa)</li>
                    <li>Who (Siapa)</li>
                    <li>Where (Di mana)</li>
                    <li>When (Kapan)</li>
                    <li>Why (Mengapa)</li>
                    <li>How (Bagaimana)</li>
                </ul>
                <p><strong>Langkah-Langkah:</strong></p>
                <ol>
                    <li>Penyusunan Masalah: Membuat masalah secara mendalam.</li>
                    <li>Pembuatan Rencana: Membuat langkah-langkah untuk menyelesaikan masalah.</li>
                    <li>Pengembangan Cerita: Membuat laporan singkat.</li>
                </ol>
                <a href="#">Link Video</a>
            </div>
        </div>
    </div>
</body>
</html>
