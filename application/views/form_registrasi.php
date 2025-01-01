<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bimbelindo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('background.jpg') no-repeat center center;
            background-size: cover;
            background-color: #f4f4f4; /* Fallback color */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 80px;
        }

        .container h1 {
            font-size: 24px;
            margin: 30px 0;
            color: #2b5c87;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            color: #2b5c87;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input[type="file"] {
            padding: 7px;
            font-size: 14px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #2b5c87;
        }

        .btn {
            background-color: #2b5c87;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background-color: #4a7db1;
        }

        .footer {
            margin-top: 20px;
            color: #666;
        }

        .footer a {
            color: #2b5c87;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://via.placeholder.com/80" alt="Bimbelindo Logo">
        </div>
        <h1>Register Bimbelindo</h1>
        <form action="<?php echo site_url('auth/register'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        <div class="footer">
            <p>Sudah Punya Akun? <a href="<?php echo site_url('auth/login'); ?>">Login Sekarang!</a></p>
        </div>
    </div>
</body>
</html>
