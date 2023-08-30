<?php
$servername= "localhost";
$database = "pelaporan_pengaduan_masyarakat";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect());
} else {
    echo "Koneksi Berhasil";
}
?>