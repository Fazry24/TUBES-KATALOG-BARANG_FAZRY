<?php
require "koneksi.php";

$nama = $_POST["namaBarang"];
$spesifikasi=$_POST["spesifikasiBarang"];
$warna=$_POST["warnaBarang"];
$kategori=$_POST["kategoriBarang"];
$satuan=$_POST["satuanBarang"];

if($kategori == "Elektronik"){
    $id_kategori = 1;
}elseif($kategori == "Alat Tulis"){
    $id_kategori = 2;
}else{
    $id_kategori = 3;
}

$sql = "insert into barang (nama_barang, spesifikasi, warna, id_kategori, satuan) 
values('$nama','$spesifikasi', '$warna','$id_kategori','$satuan')";

if(mysqli_query($conn, $sql)){
    header("Location: katalog.php");
    exit;
}
?>

