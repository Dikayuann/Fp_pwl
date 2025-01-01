<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Bimbelindo</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #003366;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h4 {
            margin: 0;
        }
        .header a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 1rem;
        }
        .header a:hover {
            text-decoration: underline;
        }
        .main-content {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 50px 20px;
            gap: 50px;
        }
        .text-content {
            max-width: 600px;
        }
        .text-content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .text-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .text-content .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #003366;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .text-content .btn:hover {
            background-color: #0055a5;
        }
        .image-placeholder {
            background-color: #f0f0f0;
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h4>Bimbelindo</h4>
        <div>
            <a href="#">Login Admin</a>
            <a href="#">Login Murid</a>
        </div>
    </div>

    <div class="main-content">
        <div class="text-content">
            <h1>Selamat Datang di Bimbelindo.</h1>
            <p><b>“Belajar Lebih Mudah, Sukses Lebih Dekat!”</b></p>
            <p>Selamat datang di Bimbelindo, platform kursus online terpercaya yang siap membantu Anda meraih prestasi terbaik. Nikmati pengalaman belajar fleksibel dengan materi lengkap, tutor berpengalaman, dan metode yang efektif. Mulailah perjalanan sukses Anda bersama kami hari ini!</p>
            <a href="#" class="btn">Masuk</a>
        </div>
        <div class="image-placeholder"></div>
    </div>
</body>
</html>
