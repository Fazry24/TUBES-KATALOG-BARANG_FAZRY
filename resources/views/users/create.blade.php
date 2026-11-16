
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Akun</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <h1>Tambah Akun Pengguna</h1>

   <div class="Kotak">
    <form action="{{ route('users.store') }}" method="POST">
         @csrf

        <label>Nama:</label><br>
        <input type="text" name="name" required>

        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>

        <br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required>

        <br><br>

        <label>Role:</label><br>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas Gudang</option>
        </select>

        <br><br>

        <button type="submit">Simpan</button>
    </form>
    </div>

    <br>

    <a href="{{ route('users.index') }}">Kembali</a>

</body>
</html>
