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

// Periksa apakah ada data yang dikirimkan untuk delete
if(isset($_GET['id'])) {
    $Id = $_GET['id'];

    // Query untuk menghapus user
    $sql = "DELETE FROM users WHERE Id='$Id'";
    if ($koneksi->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h2>Delete User</h2>
    <p>Apakah Anda yakin ingin menghapus pengguna ini?</p>
    <a href="userlist.php">Delete</a>
</body>
</html>