
<?php

include "function.php";
$id = 1;

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
    <img src="https://awsimages.detik.net.id/community/media/visual/2019/11/29/5f981b81-e924-47fb-b58d-e131f5c3c48a.png?w=600&q=90" alt="">
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