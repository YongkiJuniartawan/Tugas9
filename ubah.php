<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect("localhost", "root", "", "db_xirpl1_34_1");
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM Jual_ikan WHERE id_ikan='$id'"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama_ikan'];
    $berat = $_POST['berat'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    mysqli_query($koneksi, "UPDATE Jual_ikan SET nama_ikan='$nama', berat='$berat', jumlah='$jumlah', harga='$harga' WHERE id_ikan='$id'");
    echo "<script>alert('Data berhasil diubah'); window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Ikan</title>
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
    <h2>Ubah Data Ikan</h2>
    <form method="post">
        <label>Nama Ikan:</label>
        <input type="text" name="nama_ikan" value="<?= $data['nama_ikan']; ?>" required>
        <label>Berat (kg):</label>
        <input type="number" step="0.01" name="berat" value="<?= $data['berat']; ?>" required>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" value="<?= $data['jumlah']; ?>" required>
        <label>Harga (Rp):</label>
        <input type="number" name="harga" value="<?= $data['harga']; ?>" required>
        <button type="submit" name="update">Update</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>
