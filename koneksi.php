<?php
$host = "localhost";
$user = "xirpl1-32"; // sesuaikan
$pass = "0093901374";     // sesuaikan
$db   = "db_xirpl1-32_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
