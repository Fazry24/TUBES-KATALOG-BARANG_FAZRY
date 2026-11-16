
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Akun</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <h1>Edit Akun Pengguna</h1>

   <div class="Kotak">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <br><br>

        <label>Password Baru:</label><br>
        <input type="password" name="password">

        <br><br>

        <label>Role:</label><br>
        <select name="role" required>
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                Admin
            </option>

            <option value="petugas" {{ $user->role == 'petugas' ? 'selected' : '' }}>
                Petugas Gudang
            </option>
        </select>

        <br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
    </div>

    <br>

    <a href="{{ route('users.index') }}">Kembali</a>

</body>
</html>
