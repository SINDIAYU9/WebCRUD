<?php
// Informasi koneksi ke database
$host = 'localhost'; // Sesuaikan dengan host database Anda
$user = 'username'; // Sesuaikan dengan username database Anda
$password = 'password'; // Sesuaikan dengan password database Anda
$database = 'crudphp'; // Sesuaikan dengan nama database Anda

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $crudphp);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
