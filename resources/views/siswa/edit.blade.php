@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-6 text-indigo-700">Edit Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" value="{{ $siswa->nama }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">NIS</label>
            <input type="text" name="nis" value="{{ $siswa->nis }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Kelas</label>
            <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Jurusan</label>
            <input type="text" name="jurusan" value="{{ $siswa->jurusan }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update</button>
    </form>
</div>
@endsection
