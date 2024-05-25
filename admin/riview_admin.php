 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>
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

body{
    background-color: #22CE83;
}
</style>
   
</head>
<body>
    <h1>review</h1><br>
    <table border='1'>
    <tr >
        <td>id</td>
        <td>nama review</td>
        <td>judul review</td>
        <td>link review</td>
    </tr>
    <?php 
include "../function.php";
$query_mysql = mysqli_query($conn,"SELECT * FROM riview")or die(mysqli_error());

$no = 1;

while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nama_riview']; ?></td>
    <td><?php echo $data['judul_riview']; ?></td>
    <td><?php echo $data['link_riview']; ?></td>
    <td ><a href='edit_riview.php?id=<?php echo $data['id'];?>' class="ganti">Edit</a></td>
   

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