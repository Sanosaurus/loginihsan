<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Aplikasi') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-900 text-white font-[Inter] min-h-screen flex items-center justify-center">

    <main class="w-full max-w-sm p-6 bg-slate-800 rounded-xl shadow-lg">
        {{ $slot }}
    </main>

</body>
</html>
