<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Tugas Kelompok</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="register-container">
        <h2>Form Pendaftaran Akun</h2>

        <form action="/" method="GET">
            @csrf
            
            <div class="input-group">
                <label>Nama Lengkap:</label>
                <input type="text" name="name" required placeholder="Masukkan nama lengkap">
            </div>

            <div class="input-group">
                <label>Email:</label>
                <input type="email" name="email" required placeholder="Masukkan email aktif">
            </div>

            <div class="input-group">
                <label>Password:</label>
                <input type="password" name="password" required placeholder="Buat password baru">
            </div>

            <button type="submit" class="btn-register">Daftar Sekarang</button>
        </form>
    </div>
</body>
</html>