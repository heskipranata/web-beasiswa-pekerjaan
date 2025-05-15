<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Lowongankerja;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $totalBeasiswa = Beasiswa::count();
        $totalPekerjaan = Lowongankerja::count();

        return view('admin.dashboard', compact('totalBeasiswa', 'totalPekerjaan'));
    }
}