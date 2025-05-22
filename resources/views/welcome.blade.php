<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="bg-white/30 backdrop-blur-xl border border-white/20 shadow-2xl rounded-3xl max-w-2xl p-10 text-center">
        <h1 class="text-4xl font-bold text-white-900 mb-4">Selamat Datang di Sistem Manajemen Siswa</h1>
        <p class="text-lg text-white-800 mb-6">Kelola data siswa dengan mudah, cepat, dan efisien melalui antarmuka modern ini.</p>

        <div class="flex justify-center gap-6 mt-8">
            <a href="{{ route('login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-full transition duration-300">Login</a>
            <a href="{{ route('register') }}" class="bg-white text-indigo-600 hover:bg-gray-100 font-semibold py-2 px-6 rounded-full transition duration-300 border border-indigo-600">Register</a>
        </div>
    </div>
</body>
</html>
