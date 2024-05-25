<?php
include("tanaman--.php");

if( !isset($_GET['id'])){
  header("Location: tumbuhan_admin2.php");
}
$id = $_GET['id'];

$result = mysqli_query ($conn, "SELECT * FROM tanaman WHERE id_tanaman = $id");

while ($tanaman_data = mysqli_fetch_array($result)) {
  $nama_tumbuhan = $tanaman_data['nama_tumbuhan'];
  $jenis_tumbuhan = $tanaman_data['jenis_tumbuhan'];
  $deskripsi = $tanaman_data['deskripsi'];
  $daerah_asal = $tanaman_data['daerah_asal'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit tumbuhan</title>
</head>
<body>
    <form action="edit.php" method="post">
      <table>
        <tr>
          <td>Nama Tumbuhan</td>
          <td><input type="text" name="nama_tumbuhan" placeholder="Masukkan Nama Tumbuhan Baru" required value="<?php echo $nama_tumbuhan ?>"></td>
        </tr>
        <tr>
          <td>Jenis Tumbuhan</td>
          <td><input type="text" name="jenis_tumbuhan" placeholder="Masukkan Jenis Tumbuhan Baru" required value="<?php echo $jenis_tumbuhan ?>"></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td><input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Baru" required value="<?php echo $deskripsi ?>"></td>
        </tr>
        <tr>
          <td>Daerah Asal</td>
          <td><input type="text" name="daerah_asal" placeholder="Masukkan Daerah Asal Baru" required value="<?php echo $daerah_asal ?>"></td>
        </tr>
        <tr>
         
          <td><input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']) ?>"></td>
          <td><input type="submit" name="Submit" value="Submit">
          
        </tr>
      </table>
    </form>
</body>
</html>
