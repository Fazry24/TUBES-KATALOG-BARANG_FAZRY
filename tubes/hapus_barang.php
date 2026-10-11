<?php
require "koneksi.php";

$id=$_GET["id"];
$sql="delete from barang where id_barang=$id";
if(mysqli_query($conn, $sql)){
    header("Location: katalog.php");
    exit;
}
?>