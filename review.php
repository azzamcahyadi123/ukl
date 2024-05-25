    <?php 
    
    require "function.php";    
    $query = "SELECT * FROM riview";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Gagal mengambil data dari database";
    exit();
}
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="tentang.css">
    </head>
<body>
    <h1>silahkan pilih review</h1>



    <?php
  
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <button>
            <a href="' . $row["link_riview"] . '">
                <div class="menu-item">
                    <h2>' . $row["nama_riview"] . '</h2>
                </div>
            </a>
        </button>';
    }
?>



  
  <img src="" alt="">
  <button> <a href="tumbuhan.php">kembali</a></button> 
</div>
</html>
