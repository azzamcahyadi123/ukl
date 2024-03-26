<?php

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bimbel';
$koneksi = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Query untuk mengambil semua user
$sql = "SELECT * FROM users";
$result = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel view</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>User List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td>".$row["username"]."</td>";
                echo "<td>"."<a href='update_user.php?id=" . $row["Id"] . "'>Update</a>"."</td>";
                echo "<td>"."<a href='delete_user.php?id=" . $row["Id"] . "'>Delete</a>"."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }
        ?>
    </table>
</body>
</html>