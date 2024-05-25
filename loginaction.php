<?php 

session_start();
include 'function.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"SELECT * from user where username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);


if($cek > 0){
    
    $data = mysqli_fetch_assoc($login);

  
    if($data['level']=="admin"){

      
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "admin";
        header("location:../azam/admin/tumbuhan_admin.php");
        
        
    }elseif($data['level']=="user"){
      
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "user";
      
        header("location:review.php");

    }else{
        // alihkan ke halaman login kembali
        header("location:login.php");
    }
}else{
    header("location:login.php?pesan=gagal");
}
?>