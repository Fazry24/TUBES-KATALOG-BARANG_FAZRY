<?php
    require "koneksi.php";
    $sql ="select*from barang";
    $result = mysqli_query($conn, $sql);
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Katalog Barang</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Daftar Barang Gudang</h1>
    <a href="form.html"> + Tambah Barang</a>
    <br><br>

    <div class ="kotakKatalog">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Spesifikasi</th>
                <th>Warna</th>
                <th>ID Kategori</th>
                <th>Satuan</th>
            </tr>

            <?php
           while ($barang = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $barang["id_barang"]; ?></td>
                <td><?php echo $barang["nama_barang"]; ?></td>
                <td><?php echo $barang["spesifikasi"]; ?></td>
                <td><?php echo $barang["warna"]; ?></td>
                <td><?php echo $barang["id_kategori"]; ?></td>
                <td><?php echo $barang["satuan"]; ?></td>

                <td>
                    <a class="TombolEdit" href="edit_barang.php?id=<?php echo $barang['id_barang']; ?>">Edit</a></td>
                    
                <td>
                      <a class="TombolHapus" 
                    href="hapus_barang.php?id=<?php echo $barang['id_barang'];?>"
                    onclick="return confirm('Yakin ingin menghapus barang ini?')">
                    Hapus </td>
                    
        
            </tr>
            <?php
           }
           ?>
            
        </table>
    </div>
    
</body>
</html> 