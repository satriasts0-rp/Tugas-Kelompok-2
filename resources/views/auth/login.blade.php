<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Projek Laravel Kelompok</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-slate-100">
        <h2 class="text-3xl font-extrabold mb-2 text-center text-slate-800">Selamat Datang</h2>
        <p class="text-sm text-center text-slate-500 mb-6">Silakan masuk ke akun kelompok kamu</p>

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-600 p-3 rounded-xl mb-4 text-sm font-medium">
                @foreach ($errors->all() as $error)
                    <p>⚠️ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/dashboard" method="GET" class="space-y-4">
            @csrf 

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Alamat Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com"
                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Password</label>
                <input type="password" name="password" required placeholder="••••••••"
                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all">
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-xl shadow-lg shadow-blue-200 transition duration-200 cursor-pointer">
                Masuk
            </button>
        </form>

        <p class="text-sm text-center text-slate-600 mt-6">
            Belum punya akun? <a href="/register" class="text-blue-600 font-semibold hover:underline">Daftar sekarang</a>
        </p>
    </div>

</body>
</html>
