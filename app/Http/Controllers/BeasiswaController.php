<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;

use Illuminate\Http\Request;

class BeasiswaController extends Controller
{

    public function index()
    {
        $beasiswas = Beasiswa::all();
        return view('beasiswa.index', compact('beasiswas'));
    }

    public function adminIndex()
    {
        $beasiswas = Beasiswa::all();
        return view('admin.beasiswa', compact('beasiswas'));
    }

    public function create()
    {
        return view('admin.beasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tingkats' => 'required|array',
            'tingkats.*' => 'string',
            'deadline' => 'required|date',
            'deskripsi' => 'required|string',
            'link' => 'nullable|url',
            'gambar_link' => 'nullable|url',
            'gambar_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar_file')) {
            $gambar = $request->file('gambar_file')->store('beasiswa_images', 'public');
        } elseif ($request->filled('gambar_link')) {
            $gambar = $request->input('gambar_link');
        }

        Beasiswa::create([
            'nama' => $validated['nama'],
            'tingkats' => json_encode($validated['tingkats']),
            'deadline' => $validated['deadline'],
            'deskripsi' => $validated['deskripsi'],
            'link' => $validated['link'] ?? null,
            'gambar' => $gambar,
        ]);

        return redirect()->back()->with('success', 'Beasiswa berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $beasiswa = Beasiswa::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tingkats' => 'required|array',
            'deadline' => 'nullable|date',
            'deskripsi' => 'required|string',
            'link' => 'nullable|url',
            'gambar_link' => 'nullable|url',
            'gambar_file' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_file')) {
            $gambarPath = $request->file('gambar_file')->store('images', 'public');
            $validated['gambar'] = 'storage/' . $gambarPath;
        } elseif ($request->filled('gambar_link')) {
            $validated['gambar'] = $request->input('gambar_link');
        } else {
            unset($validated['gambar']);
        }

        $validated['tingkats'] = json_encode($request->tingkats);

        $beasiswa->update($validated);

        return redirect()->back()->with('success', 'Beasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);

        if ($beasiswa->gambar && file_exists(public_path($beasiswa->gambar))) {
            unlink(public_path($beasiswa->gambar));
        }

        $beasiswa->delete();

        return redirect()->route('admin.beasiswa')->with('success', 'Beasiswa berhasil dihapus.');
    }
}
