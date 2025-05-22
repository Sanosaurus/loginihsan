@extends('layouts.app')
@section('title', 'Tambah Siswa')
@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Data Siswa</h1>
<form action="/siswa" method="POST" class="bg-white p-6 rounded shadow w-full max-w-xl">
  @csrf
  <div class="mb-4">
    <label class="block mb-1">Nama</label>
    <input type="text" name="nama" class="w-full border p-2 rounded" required>
  </div>
  <div class="mb-4">
    <label class="block mb-1">NIS</label>
    <input type="text" name="nis" class="w-full border p-2 rounded" required>
  </div>
  <div class="mb-4">
    <label class="block mb-1">Kelas</label>
    <input type="text" name="kelas" class="w-full border p-2 rounded" required>
  </div>
  <div class="mb-4">
    <label class="block mb-1">Jurusan</label>
    <input type="text" name="jurusan" class="w-full border p-2 rounded" required>
  </div>
  <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Simpan</button>
</form>
@endsection