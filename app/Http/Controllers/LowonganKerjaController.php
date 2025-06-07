<?php

namespace App\Http\Controllers;

use App\Models\LowonganKerja;
use Illuminate\Http\Request;

class LowonganKerjaController extends Controller
{
    public function index()
    {
        $pekerjaans = LowonganKerja::latest()->get();
        return view('pekerjaan.index', compact('pekerjaans'));
    }

    public function adminIndex()
    {
        $pekerjaans = LowonganKerja::all();
        return view('admin.pekerjaan', compact('pekerjaans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'perusahaan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'link_detail' => 'nullable|url',
            'deadline' => 'nullable|date',
        ]);

        LowonganKerja::create($request->all());

        return redirect()->back()->with('success', 'Lowongan kerja berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'perusahaan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'link_detail' => 'nullable|url',
            'deadline' => 'nullable|date',
        ]);

        $pekerjaan = LowonganKerja::findOrFail($id);
        $pekerjaan->update($request->all());

        return redirect()->back()->with('success', 'Lowongan kerja berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pekerjaan = LowonganKerja::findOrFail($id);
        $pekerjaan->delete();

        return redirect()->back()->with('success', 'Lowongan kerja berhasil dihapus.');
    }
}
