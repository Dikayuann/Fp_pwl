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
            background: url('/Fp_pwl/uploads/background.png') no-repeat center center fixed;
            background-size: cover;
        }

   
        .login-container {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); 
            width: 100%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .login-container img {
            width: 150px;
            margin-bottom: 20px;
        }

        .login-container h1 {
            font-size: 28px;
            margin: 10px 0;
            color: #2b5c87;
        }

  
        .login-container p {
            font-size: 16px;
            margin: 0 0 30px;
            color: #666;
        }

  
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
            border-color: #4a7db1; 
        }

      
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
            background-color: #4a7db1; 
        }

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
<div class="form-container">
        <h2>Tambah Murid</h2>
        <form action="<?php echo site_url('form_registrasi/simpan'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Murid:</label>
                <input type="text" name="nama_murid" required>
            </div>
            
            <div class="form-group">
                <label>Email Murid:</label>
                <input type="email" name="email_murid" required>
            </div>
            
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label>Tanggal Registrasi:</label>
                <input type="date" name="tanggal_registrasi" required>
            </div>
            
            <div class="form-group">
                <label>Foto Profil:</label>
                <input type="file" name="foto_profil" required>
            </div>
            
            <button type="submit" class="btn-submit">Simpan</button>
        </form>
        <a href="<?php echo site_url('dashboard'); ?>">Kembali</a>
    </div>
</body>
</html>
