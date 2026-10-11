<?php
require "koneksi.php";

$id=$_POST["idBarang"];
$nama = $_POST["namaBarang"];
$spesifikasi=$_POST["spesifikasiBarang"];
$warna=$_POST["warnaBarang"];
$kategori=$_POST["kategoriBarang"];
$satuan=$_POST["satuanBarang"];

$sql = "update barang set nama_barang ='$nama', spesifikasi='$spesifikasi',
warna='$warna', id_kategori=$kategori, satuan='$satuan' where id_barang=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: katalog.php");
    exit;
}
?>