<?php

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ukl_ku';
$koneksi = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Query untuk mengambil semua user
$sql = "SELECT * FROM users";
$result = $koneksi->query($sql);

?>