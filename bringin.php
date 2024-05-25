
<?php

include "function.php";
$id = 6;

$query = "SELECT * FROM tanaman where id_tanaman = $id";
$tes = mysqli_query($conn, $query);
  

while ($row = mysqli_fetch_assoc($tes)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kelapa.css">
    <title>Bio data</title>
</head>
<body>
    <img src="https://tanisejahtera.co.id/wp-content/uploads/2023/01/pohon-beringin-teluk-moreton.png" alt="">
    <div class="wrapper">
        
        <h1>DATA TUMBUHAN</h1>
        <table class="table"border ='4'> 

            <tr>
                <td>Nama</td>
                <td>: <?php echo $row["nama_tumbuhan"]?></td>
                <td rowspan="5">
            </tr>
            <tr>
                <td>JENIS</td>
                <td>:<?php echo $row["jenis_tumbuhan"]?> </td>
            </tr>
            <tr>
                <td>DAERAH ASAL</td>
                <td>: <?php echo $row["daerah_asal"]?></td>
            </tr>
           
            <tr>
                <td>DESKRIPSI</td>
                <td>: <?php echo $row["deskripsi"]?> </td>
            </tr>
          
        </table> 
    <hr> 
    <a href="register c.php">lihat riview</a>
    <a href="tentang2.php">kembali</a>
    </div>

    <?php }?>
</body>
</html>