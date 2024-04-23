<?php

$host = "localhost";
$database = "aldi_toko_buku";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $database, $username, $password);

if (!$conn){
    die("Koneksi Gagal: " . mysqli_connect_error());
}
mysqli_close($conn);
?>