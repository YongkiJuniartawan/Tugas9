<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM Jual_ikan WHERE id_ikan='$id'");
echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
?>
