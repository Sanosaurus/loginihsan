<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:20|unique:siswas,nis',
            'kelas' => 'required|string|max:50',
            'jurusan' => 'required',
        ]);

         Siswa::create($validated);

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan.');
}
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas,nis,' . $siswa->id,
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
