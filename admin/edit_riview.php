<?php
include("tanaman--.php");

if( !isset($_GET['id'])){
  header("Location: riview_admin.php");
}
$id = $_GET['id'];

$result = mysqli_query ($conn, "SELECT * FROM riview WHERE id = $id");

while ($riview_data = mysqli_fetch_array($result)) {
  $nama_riview = $riview_data['nama_riview'];
  $judul_riview = $riview_data['judul_riview'];
  $link_riview = $riview_data['link_-riview'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit tumbuhan</title>
</head>
<style>
     body{
    background-color: #22CE83;

}
</style>
<body>
    <form action="edit.php" method="post">
      <table>
        <tr>
          <td>Nama review</td>
          <td><input type="text" name="nama_riview" placeholder="Masukkan Nama review Baru" required value="<?php echo $nama_riview ?>"></td>
        </tr>
        <tr>
          <td>Judul review</td>
          <td><input type="text" name="judul_riview" placeholder="Masukkan Judul review Baru" required value="<?php echo $judul_riview ?>"></td>
        </tr>
        <tr>
          <td>link review</td>
          <td><input type="text" name="link_riview" placeholder="Masukkan link review Baru" required value="<?php echo $link_riview ?>"></td>
        </tr>
        <tr>
          <td><input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']) ?>"></td>
          <td><input type="submit" name="Submit" value="Submit">
          
        </tr>
      </table>
    </form>
</body>
</html>
