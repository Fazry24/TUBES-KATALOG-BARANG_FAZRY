<?php
require "koneksi.php";
$id = $_GET["id"];

$sql = "select*from barang where id_barang=$id";
$result=mysqli_query($conn, $sql);
$barang =mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Barang</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Data Barang</h1>
    <a href="katalog.php"> ← Kembali ke Katalog</a>
    
    <div class="Kotak">
        <form action="update_barang.php" method="post">

        <input type="hidden" name="idBarang"
        value="<?php echo $barang['id_barang']; ?>">

        <p><strong>Nama Barang</strong></p>
        <input type="text" name= "namaBarang"
        value="<?php echo $barang['nama_barang']; ?>">

        <p><strong>Spesifikasi</strong></p>
        <textarea name="spesifikasiBarang"><?php echo $barang['spesifikasi']; ?></textarea>

        <p><strong>Warna</strong></p>
        <input type="text" name= "warnaBarang"
        value="<?php echo $barang['warna']; ?>">

        <p><strong>Kategori</stong><p>
            <select name="kategoriBarang">
                <option value="1"
                <?php if($barang['id_kategori']==1) echo "selected"; ?>>
                Elektronik
</option>
                <option value="2"
                <?php if($barang['id_kategori']==2) echo "selected"; ?>>
                Alat Tulis
</option>
                <option value="3"
                <?php if($barang['id_kategori']==3) echo "selected"; ?>>
                Lainnya
</option>
</select>

        <p><strong>Satuan</strong></p>
        <select name="satuanBarang">
            <option value="Unit"
            <?php if($barang['satuan']=="Unit") echo "selected"; ?>>
            Unit
</option>
   <option value="Box"
            <?php if($barang['satuan']=="Box") echo "selected"; ?>>
            Box
</option>

   <option value="Pcs"
            <?php if($barang['satuan']=="Pcs") echo "selected"; ?>>
            Pcs
</option>
</select>

<button type="submit">Simpan Perubahan</button>


</form>
</div>

</body>
</html>
          