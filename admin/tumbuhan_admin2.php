<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel tumbuhan</title>
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
    <h1>tumbuhan</h1><br>
    <table border='1'>
    <tr >
        <td>id</td>
        <td>nama tumbuhan</td>
        <td>jenis tumbuhan</td>
        <td>daerah asal</td>
        <td>deskripsi</td>
    </tr>
    <?php 
include "../function.php";
$query_mysql = mysqli_query($conn,"SELECT * FROM tanaman")or die(mysqli_error());

$no = 1;

while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nama_tumbuhan']; ?></td>
    <td><?php echo $data['jenis_tumbuhan']; ?></td>
    <td><?php echo $data['daerah_asal']; ?></td>
    <td><?php echo $data['deskripsi']; ?></td>
    <td ><a href='edit_tanaman.php?id=<?php echo $data['id_tanaman'];?>' class="ganti">Edit</a></td>
   

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