<!-- resources/views/siswa/index.blade.php -->
@extends('layouts.app')
@section('title', 'Data Siswa')
@section('content')
<h1 class="text-2xl font-bold mb-6">Data Siswa</h1>
<a href="/siswa/create" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Siswa</a>
<table class="min-w-full bg-white rounded shadow">
  <thead>
    <tr class="bg-purple-600 text-white">
      <th class="py-2 px-4">Nama</th>
      <th class="py-2 px-4">NIS</th>
      <th class="py-2 px-4">Kelas</th>
      <th class="py-2 px-4">Jurusan</th>
      <th class="py-2 px-4">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($siswas as $siswa)
    <tr class="text-center hover:bg-gray-100">
      <td class="py-2 px-4">{{ $siswa->nama }}</td>
      <td class="py-2 px-4">{{ $siswa->nis }}</td>
      <td class="py-2 px-4">{{ $siswa->kelas }}</td>
      <td class="py-2 px-4">{{ $siswa->jurusan }}</td>
      <td class="py-2 px-4">
      <a href="{{ route('siswa.show', $siswa->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm">Lihat</a>
        <a href="/siswa/{{ $siswa->id }}/edit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</a>
        <form action="/siswa/{{ $siswa->id }}" method="POST" class="inline">
          @csrf @method('DELETE')
          <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection