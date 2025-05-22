<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <input type="email" name="email" placeholder="Email" class="input input-bordered w-full mb-4 p-2 border rounded" required>
      <input type="password" name="password" placeholder="Password" class="input input-bordered w-full mb-4 p-2 border rounded" required>
      <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded">Login</button>
    </form>
  </div>
</div>
@endsection