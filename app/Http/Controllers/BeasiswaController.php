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
            'judul' => 'required|string|max:255',
            'jenjang' => 'required|string',
            'deadline' => 'required|date',
            'deskripsi' => 'required|string',
            'link' => 'nullable|url',
        ]);

        Beasiswa::create($validated);

        return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil ditambahkan.');
    }
}
