<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Katalog Barang</title>
         <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>Daftar Barang Gudang</h1>

    <a href="{{ route('barang.create') }}">+ Tambah Barang</a>
    <br><br>

    <div class="kotakKatalog">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Spesifikasi</th>
                <th>Warna</th>
                <th>ID Kategori</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>

            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->spesifikasi }}</td>
                    <td>{{ $barang->warna }}</td>
                    <td>{{ $barang->id_kategori }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>
                        <a class="TombolEdit" href="{{ route('barang.edit', $barang->id_barang) }}">Edit</a>
                        <form action="{{ route('barang.destroy', $barang->id_barang) }}"
      method="POST"
      style="display: inline;"
      onsubmit="return confirm('Yakin ingin menghapus barang ini?')">

    @csrf
    @method('DELETE')

    <button type="submit" class="TombolHapus">Hapus</button>
</form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
