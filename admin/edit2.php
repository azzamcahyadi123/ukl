<?php
include("../function.php");

if(isset($_POST['Submit'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    $result= mysqli_query($conn, "UPDATE user SET username='$username',email='$email',password='$password',level='$level'
    WHERE id=$id");
    header("location:userlist.php");
} else{
    die("Akses Gagal...");
}
?>