<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>Edit Data Barang</h1>

    <a href="{{ url('/') }}">← Kembali ke Katalog</a>

    <div class="Kotak">
        <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="idBarang" value="{{ $barang->id_barang }}">

            <p><strong>Nama Barang</strong></p>
            <input type="text" name="namaBarang" value="{{ $barang->nama_barang }}" required>

            <p><strong>Spesifikasi</strong></p>
            <textarea name="spesifikasiBarang">{{ $barang->spesifikasi }}</textarea>

            <p><strong>Warna</strong></p>
            <input type="text" name="warnaBarang" value="{{ $barang->warna }}">

            <p><strong>Kategori</strong></p>
            <select name="kategoriBarang" required>
                <option value="1" {{ $barang->id_kategori == 1 ? 'selected' : '' }}>Elektronik</option>
                <option value="2" {{ $barang->id_kategori == 2 ? 'selected' : '' }}>Alat Tulis</option>
                <option value="3" {{ $barang->id_kategori == 3 ? 'selected' : '' }}>Lainnya</option>
            </select>

            <p><strong>Satuan</strong></p>
            <select name="satuanBarang" required>
                <option value="Unit" {{ $barang->satuan == 'Unit' ? 'selected' : '' }}>Unit</option>
                <option value="Box" {{ $barang->satuan == 'Box' ? 'selected' : '' }}>Box</option>
                <option value="Pcs" {{ $barang->satuan == 'Pcs' ? 'selected' : '' }}>Pcs</option>
            </select>

            <br><br>
            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>