<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;

Route::get('/', function () {
    $barangs=Barang::all();

    return view('katalog', compact('barangs'));
});

Route::get('/barang/create', function () {
    return view('form');
})->name('barang.create');

Route::post('/barang', function (\Illuminate\Http\Request $request) {
    $nama = $request->namaBarang;
    $spesifikasi = $request->spesifikasiBarang;
    $warna = $request->warnaBarang;
    $kategori = $request->kategoriBarang;
    $satuan = $request->satuanBarang;

    if ($kategori == "Elektronik") {
        $id_kategori = 1;
    } elseif ($kategori == "Alat Tulis") {
        $id_kategori = 2;
    } else {
        $id_kategori = 3;
    }

    \App\Models\Barang::create([
        'nama_barang' => $nama,
        'spesifikasi' => $spesifikasi,
        'warna' => $warna,
        'id_kategori' => $id_kategori,
        'satuan' => $satuan
    ]);

    return redirect('/');
})->name('barang.store');

Route::get('/barang/{id}/edit', function ($id) {
    $barang = \App\Models\Barang::findOrFail($id);

    return view('edit_barang', compact('barang'));
})->name('barang.edit');

Route::put('/barang/{id}', function (\Illuminate\Http\Request $request, $id) {
    $barang = \App\Models\Barang::findOrFail($id);

    $barang->nama_barang = $request->namaBarang;
    $barang->spesifikasi = $request->spesifikasiBarang;
    $barang->warna = $request->warnaBarang;
    $barang->id_kategori = $request->kategoriBarang;
    $barang->satuan = $request->satuanBarang;

    $barang->save();

    return redirect('/');
})->name('barang.update');

Route::delete('/barang/{id}', function ($id) {
    $barang = \App\Models\Barang::findOrFail($id);

    $barang->delete();

    return redirect('/');
})->name('barang.destroy');