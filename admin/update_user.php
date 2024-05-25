<?php
include("../function.php");

if( !isset($_GET['id'])){
  header("location:userlist.php");
}
$id = $_GET['id'];

$result = mysqli_query ($conn, "SELECT * FROM user WHERE id = $id");

while($user_data = mysqli_fetch_array($result)){
  $username = $user_data['username'];
  $email = $user_data['email'];
  $password = $user_data['password'];
  $level = $user_data['level'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Edit</title>
</head>
<style>
  body{
    background-color: #22CE83;

}
</style>
<body>
    <form action="edit2.php" method="post">
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" placeholder="Massukan Username Baru" required value="<?php echo $username?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" placeholder="Massukan Email Baru" required value="<?php echo $email?>"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" placeholder="Massukan Password Baru" required value="<?php echo $password?>"></td>
        </tr>
        <tr>
          <td>level</td>
          <td>
            <select name="level" id="level" required>
              <option disabled selected><?php echo $level?></option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><input type="hidden" name="id" value=<?php echo $_GET['id']?>></td>
          <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
      </table>
    </form>
</body>
</html>