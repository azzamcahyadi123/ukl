<?php


$host = "localhost";
$username = "root";
$password = "";
$db = "ukl_ku"; 

$conn =mysqli_connect($host, $username, $password, $db);

function  registrasi($data) {
    
    global $conn;

    $username = $data["username"];
    $email = $data["email"];
    $password = $data["password"];
    $level ="user";

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = 'email'");

    if (mysqli_fetch_assoc($result)) {
        echo "registrasi berhasil";
        return false;
    }

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password', '$level')");
    return mysqli_affected_rows($conn);
}
?>

