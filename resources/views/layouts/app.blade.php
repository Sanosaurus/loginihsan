<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Student Management')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-400">
  <div class="flex">
    <!-- Sidebar -->
    <div class="w-64 h-screen bg-gradient-to-b from-purple-700 to-pink-500 text-white p-6">
      <h2 class="text-2xl font-bold mb-6">Admin Sano jir</h2>
      <ul>
        <li class="mb-4"><a href="/dashboard" class="hover:underline">Dashboard</a></li>
        <li class="mb-4"><a href="/siswa" class="hover:underline">Data Siswa</a></li>
        <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-white-500 hover:underline">
        Logout
    </button>
</form>

      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
      @yield('content')
    </div>
  </div>
</body>
</html>
