<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
{
    $nasabah = Nasabah::paginate(10);
    return view('nasabah.index', compact('nasabah'));
}

public function create()
{
    return view('nasabah.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'jurusan' => 'required|string|max:255',
        'jenis_kelamin' => 'required|in:L,P',
        'tanggal_pembuatan' => 'required|date',
        'saldo' => 'required|numeric',
        'status' => 'required|in:aktif,non-aktif',
        'rekening' => 'required|string|max:255',
        'nis' => 'required|string|max:255',
    ]);

    Nasabah::create($request->all());

    return redirect()->route('nasabah.index')->with('success', 'Nasabah created successfully.');
}

public function edit(Nasabah $nasabah)
{
    return view('nasabah.edit', compact('nasabah'));
}

public function update(Request $request, Nasabah $nasabah)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'jurusan' => 'required|string|max:255',
        'jenis_kelamin' => 'required|in:L,P',
        'tanggal_pembuatan' => 'required|date',
        'saldo' => 'required|numeric',
        'status' => 'required|in:aktif,non-aktif',
        'rekening' => 'required|string|max:255',
        'nis' => 'required|string|max:255',
    ]);

    $nasabah->update($request->all());

    return redirect()->route('nasabah.index')->with('success', 'Nasabah updated successfully.');
}

public function destroy(Nasabah $nasabah)
{
    $nasabah->delete();

    return redirect()->route('nasabah.index')->with('success', 'Nasabah deleted successfully.');
}

}
