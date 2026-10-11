
<?php
$host = "localhost";
$port = 3306;
$username = "root";
$password = "";
$database = "inventaris_gudang";

$conn = mysqli_connect(
    $host,
    $username,
    $password,
    $database,
    $port
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
