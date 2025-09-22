<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect("localhost", "xirpl1-34", "3093736893", "db_xirpl1-34_1");

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_ikan'];
    $berat = $_POST['berat'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    mysqli_query($koneksi, "INSERT INTO Jual_ikan (nama_ikan, berat, jumlah, harga)
                            VALUES ('$nama', '$berat', '$jumlah', '$harga')");
    echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Ikan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
            padding: 30px;
        }

        form {
            background-color: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 6px 0 12px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button, a {
            background: linear-gradient(to right, #1abc9c, #16a085);
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
        }

        button:hover, a:hover {
            background: linear-gradient(to right, #16a085, #1abc9c);
        }
    </style>
</head>
<body>
    <h2>Tambah Data Ikan</h2>
    <form method="post">
        <label>Nama Ikan:</label>
        <input type="text" name="nama_ikan" required>
        <label>Berat (kg):</label>
        <input type="number" step="0.01" name="berat" required>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" required>
        <label>Harga (Rp):</label>
        <input type="number" name="harga" required>
        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>
