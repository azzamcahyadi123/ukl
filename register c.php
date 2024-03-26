<?php

require "function.php";

if (isset($_POST["registrasi"])) {

    if (registrasi($_POST) > 0) {
        header("Location: login.php");
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Register only</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                </div>
               
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan password">
                </div>
                <button name="registrasi" type="submit" class="btn btn-primary">Register</button>
                <div>
                    <span>sudah punya akun? <a href="login.php">login</a></span>
                </div>

            </form>
        </div>
    </div>
</div>


</body>
</html>