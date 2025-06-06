<?php

namespace App\Http\Controllers;

use App\Models\LowonganKerja;

use Illuminate\Http\Request;

class LowonganKerjaController extends Controller
{
    //
    public function index()
    {
        $pekerjaans = LowonganKerja::latest()->get();
        return view('pekerjaan.index', compact('pekerjaans'));
    }

    public function adminIndex()
    {
        $pekerjaans = Lowongankerja::all();
        return view('admin.pekerjaan', compact('pekerjaans'));
    }
}
