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
}
