@extends('layouts.app') {{-- Kalau kamu pakai layout --}}
@section('content')
<div class="max-w-3xl mx-auto p-8 bg-white shadow-lg rounded-lg mt-8">
    <h2 class="text-3xl font-bold mb-6 text-indigo-700">Detail Siswa</h2>

    <div class="space-y-4 text-lg">
        <p><strong>Nama:</strong> {{ $siswa->nama }}</p>
        <p><strong>NIS:</strong> {{ $siswa->nis }}</p>
        <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
        <p><strong>Jurusan:</strong> {{ $siswa->jurusan }}</p>
        <!-- Tambahkan jika ada field lain -->
    </div>

    <div class="mt-6">
        <a href="{{ route('siswa.index') }}" class="bg-purple-500 hover:bg-gray-600 text-white px-5 py-2 rounded-md">Kembali</a>
    </div>
</div>
@endsection
