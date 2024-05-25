
<?php 
include("tanaman--.php");
if(isset($_POST['Submit'])){
    $id_tanaman=$_POST['id'];
    $nama_tumbuhan=$_POST['nama_tumbuhan'];
    $jenis_tumbuhan=$_POST['jenis_tumbuhan'];
    $daerah_asal=$_POST['daerah_asal'];
    $deskripsi=$_POST['deskripsi'];

    $result= mysqli_query($conn, "UPDATE tanaman SET nama_tumbuhan='$nama_tumbuhan',daerah_asal='$daerah_asal',jenis_tumbuhan='$jenis_tumbuhan',deskripsi='$deskripsi'
    WHERE id_tanaman=$id_tanaman");
    header("location:tumbuhan_admin2.php");
} else{
    die("Akses Gagal...");
}
?>