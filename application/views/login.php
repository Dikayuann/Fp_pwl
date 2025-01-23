<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Bimbelindo</title>
    <style>
        /* Gaya umum untuk body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('/Fp_pwl/uploads/background.png') no-repeat center center fixed;
            background-size: cover;
        }

        /* Gaya untuk kotak login */
        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Transparansi pada latar belakang */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Menambah shadow untuk efek 3D */
            width: 100%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px); /* Efek blur pada latar belakang */
        }

        /* Logo */
        .login-container img {
            width: 150px;
            margin-bottom: 20px;
        }

        /* Judul halaman */
        .login-container h1 {
            font-size: 28px;
            margin: 10px 0;
            color: #2b5c87;
        }

        /* Deskripsi */
        .login-container p {
            font-size: 16px;
            margin: 0 0 30px;
            color: #666;
        }

        /* Gaya untuk input */
        .login-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border 0.3s ease;
        }

        .login-container input:focus {
            border-color: #4a7db1; /* Warna border saat input difokuskan */
        }

        /* Tombol login */
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #2b5c87;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #4a7db1; /* Warna tombol saat hover */
        }

        /* Responsif untuk ukuran layar kecil */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px;
                max-width: 90%;
            }

            .login-container h1 {
                font-size: 24px;
            }

            .login-container input,
            .login-container button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="/Fp_pwl/uploads/" alt="Logo Bimbelindo">
        <h1>Bimbelindo</h1>
        <p>Solusi Pembelajaran Jarak Jauh</p>
        <p>Gunakan ID pembelajaran Anda</p>
        <form action="<?php echo site_url('Login/authenticate'); ?>" method="post">
            <input type="text" name="username" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
