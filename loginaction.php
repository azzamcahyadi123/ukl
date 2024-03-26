<?php 
// mengaktifkan session pada php
session_start();
include 'function.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"SELECT * from user where username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

//cek username
if($cek > 0){
    
    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['level']=="admin"){

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "admin";
        header("location:admin/index.php");
        
        // cek jika usser login sebagai user
    }elseif($data['level']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "user";
        // alihkan ke halaman dashboard user
        header("location:tentang.php");

    }else{
        // alihkan ke halaman login kembali
        header("location:login.php");
    }
}else{
    header("location:login.php?pesan=gagal");
}
?>