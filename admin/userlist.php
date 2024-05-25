<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel user</title>
    <style>    
    tr td a {
        text-decoration: none;
    }

    footer {
        text-align: center;
        margin-bottom: 100px;
    }
    .ganti {
    color: blue;
    text-decoration: none;
}
.hapus {
    color: red;
    text-decoration: none;
}
body{
    background-color: #22CE83;

}
</style>
   
</head>
<body>
    <h1>CRUD</h1><br>
    <table border='1'>
    <tr >
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
        <td>Email</td>   
        <td>Level</td>
    </tr>
    <?php 
include "../function.php";
$query_mysql = mysqli_query($conn,"SELECT * FROM user")or die(mysqli_error());

$no = 1;

while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['level']; ?></td>
    <td ><a href='update_user.php?id=<?php echo $data['id'];?>' class="ganti">Edit</a></td>
    <td ><a href='delete_user.php?id=<?php echo $data['id'];?>' class="hapus">Delete</a></td>

</tr>
<?php } ?>
</table>
    </main>
    <button><a href="tumbuhan_admin.php">kembali</a></button>

    <footer>
        <p>Hak Cipta &copy; 2024 Admin Page.</p>
    </footer>

</body>


</body>
</html>