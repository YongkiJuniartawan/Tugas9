<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect("localhost", "xirpl1-34", "3093736893", "db_xirpl1-34_1");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan Ikan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
            padding: 30px;
        }

        h2 {
            color: #fff;
        }

        a, button {
            background: linear-gradient(to right, #1abc9c, #16a085);
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            margin: 5px 0;
            display: inline-block;
        }

        a:hover, button:hover {
            background: linear-gradient(to right, #16a085, #1abc9c);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ecf0f1;
            color: #2c3e50;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #bdc3c7;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2980b9;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Data Penjualan Ikan</h2>
    <a href="tambah.php">+ Tambah Data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Ikan</th>
            <th>Berat (kg)</th>
            <th>Jumlah</th>
            <th>Harga (Rp)</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM Jual_ikan");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $data['id_ikan']; ?></td>
            <td><?= $data['nama_ikan']; ?></td>
            <td><?= $data['berat']; ?></td>
            <td><?= $data['jumlah']; ?></td>
            <td>Rp<?= number_format($data['harga'], 0, ',', '.'); ?></td>
            <td>
                <a href="ubah.php?id=<?= $data['id_ikan']; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $data['id_ikan']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
