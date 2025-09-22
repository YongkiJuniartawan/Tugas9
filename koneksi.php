<?php
$host = "localhost";
$user = "xirpl1-34";
$pass = "3093736893";
$db   = "db_xirpl1-34_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
