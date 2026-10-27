<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Tambah Barang</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>Isi Data Barang Baru</h1>

    <a href="{{ url('/') }}">← Kembali ke Katalog</a>

    <div class="Kotak">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf

            <p><strong>Nama Barang:</strong></p>
            <input type="text" name="namaBarang" required>

            <p><strong>Spesifikasi:</strong></p>
            <textarea name="spesifikasiBarang"></textarea>

            <p><strong>Warna:</strong></p>
            <input type="text" name="warnaBarang">

            <p><strong>Kategori:</strong></p>
            <select name="kategoriBarang" required>
                <option value="">-- Pilih Kategori --</option>
                <option>Elektronik</option>
                <option>Alat Tulis</option>
                <option>Lainnya</option>
            </select>

            <p><strong>Satuan:</strong></p>
            <select name="satuanBarang" required>
                <option value="">-- Pilih Satuan --</option>
                <option>Unit</option>
                <option>Box</option>
                <option>Pcs</option>
            </select>

            <button type="submit">Simpan Data</button>
        </form>
    </div>
    <br>
</body>
</html>