<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\LowonganKerja;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $totalBeasiswa = Beasiswa::count();
        $totalPekerjaan = LowonganKerja::count();

        return view('admin.dashboard', compact('totalBeasiswa', 'totalPekerjaan'));
    }
}