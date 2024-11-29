<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Buku Tamu - Frieren Theme</title>
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
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4455aa;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
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
        <h1>Data Buku Tamu</h1>
    </header>
    <h2>Data Buku Tamu</h2>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
            </tr>
            <?php
            $sql = "SELECT * FROM buku_tamu";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['ID_BT'] . "</td>
                            <td>" . $row['NAMA'] . "</td>
                            <td>" . $row['EMAIL'] . "</td>
                            <td>" . $row['ISI'] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data yang tersedia</td></tr>";
            }
            ?>
        </table>
        <div class="nav-buttons">
            <a href="index.php">Kembali ke Form</a>
        </div>
    </div>
    <footer>
        &copy; 2024 Buku Tamu - Hafidz Arif Budiono 202331165
    </footer>
</body>
</html>
