<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            border: 1px solid #ddd;
            padding: 30px;
            width: 320px;
            text-align: center;
            border-radius: 12px;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .phone-icon {
            font-size: 48px;
            color: #25D366; /* WhatsApp Green */
            animation: bounce 1s infinite;
        }
        @keyframes bounce {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
        .title {
            font-weight: bold;
            font-size: 22px;
            margin: 10px 0;
            color: #333;
        }
        .number {
            font-size: 32px;
            color: #2c3e50;
            font-weight: bold;
            margin: 5px 0;
        }
        .international {
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #32527f; /* New Green Color */
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #2d4a6a; /* Slightly darker shade of green */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="phone-icon">📞</div>
        <div class="title">Hubungi Bimbelindo</div>
        <div class="number">xxxxxxxxxxxx</div>
        <div>(Via Whatsapp)</div>
        <div class="international">
        <small>(Senin-Jumat | 08.00 s.d. 16.00)</small>
        </div>
        <a href="#" class="button">Kembali ke halaman utama</a>
    </div>
</body>
</html>
