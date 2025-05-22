@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-tr from-blue-200 via-purple-200 to-pink-200 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8 bg-white rounded-xl shadow-2xl p-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-purple-700">Buat Akun Baru</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="font-medium text-purple-600 hover:text-purple-500">Masuk di sini</a>
      </p>
    </div>

    <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
      @csrf

      <div class="rounded-md shadow-sm -space-y-px">
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input id="name" name="name" type="text" required autofocus
            class="appearance-none rounded-xl relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
            placeholder="Nama Lengkap" value="{{ old('name') }}">
          @error('name')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
          <input id="email" name="email" type="email" autocomplete="email" required
            class="appearance-none rounded-xl relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
            placeholder="Email" value="{{ old('email') }}">
          @error('email')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
          <input id="password" name="password" type="password" autocomplete="new-password" required
            class="appearance-none rounded-xl relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
            placeholder="Kata Sandi">
          @error('password')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Sandi</label>
          <input id="password_confirmation" name="password_confirmation" type="password" required
            class="appearance-none rounded-xl relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
            placeholder="Konfirmasi Sandi">
        </div>
      </div>

      <div>
        <button type="submit"
          class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition">
          Daftar Akun
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
