
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Inventaris Gudang</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>Login Inventaris Gudang</h1>

    <div class="Kotak">
        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            @if ($errors->any())
            <p style="color: red;">
            {{ $errors->first() }}
             </p>
        @endif

            <p><strong>Email:</strong></p>
            <input type="email" name="email" required>

            <p><strong>Password:</strong></p>
            <input type="password" name="password" required>

            <br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
