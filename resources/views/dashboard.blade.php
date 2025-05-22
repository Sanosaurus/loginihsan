<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<h1 class="text-3xl font-bold mb-6">Dashboard</h1>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <div class="bg-white p-6 rounded-xl shadow text-center">
    <h2 class="text-xl font-bold">Total Siswa</h2>
    <p class="text-4xl text-purple-600 mt-2">{{ $jumlahSiswa }}</p>
  </div>
</div>
@endsection
