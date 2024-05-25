<?php

$hostname= "localhost";
$username = "root";
$password = "";
$db = "tumbuhan_ukl";

$conn = mysqli_connect($hostname, $username, $password, $db);

if($conn->connect_error) {
    echo "Koneksi database gagal";
    die("error!");
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM user WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('hapus berhasil')</script>";
        header("Location: userlist.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>