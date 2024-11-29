<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        /* Gaya tema Frieren */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #e0eaff, #a2c4ff);
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4455aa;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
            font-family: 'Georgia', serif;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            margin-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-size: 1.2em;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        button {
            background-color: #4455aa;
            color: #fff;
            font-size: 1.2em;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #223388;
        }
        .nav-buttons {
            text-align: center;
            margin-top: 20px;
        }
        .nav-buttons a {
            text-decoration: none;
            background-color: #4455aa;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .nav-buttons a:hover {
            background-color: #223388;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            padding: 10px;
            background: #4455aa;
            color: white;
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Buku Tamu</h1>
    </header>
    <h2>Selamat Datang di Buku Tamu</h2>
    <div class="container">
        <form action="proses.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan nama Anda..." required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email Anda..." required>

            <label for="isi">Pesan:</label>
            <textarea name="isi" id="isi" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
        <div class="nav-buttons">
            <a href="lihat.php">Lihat Buku Tamu</a>
        </div>
    </div>
    <footer>
        &copy; 2024 Buku Tamu - Hafidz Arif Budiono 202331165
    </footer>
</body>
</html>
