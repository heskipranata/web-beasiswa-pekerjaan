<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswas = [
            [
                'nama' => 'Beasiswa Van Deventer Maas',
                'tingkats' => ['Sarjana-1'],
                'deadline' => null,
                'deskripsi' => 'Beasiswa Van Deventer-Maas Indonesia...',
                'link' => 'https://vandeventermaas.or.id/id/beasiswa/',
                'gambar' => asset('assets/img/vdv.png'),
            ],
            [
                'nama' => 'Beasiswa Glow & Lovely 2025',
                'tingkats' => ['SMA'],
                'deadline' => '2025-05-08',
                'deskripsi' => 'Dukungan biaya kuliah dan uang saku...',
                'link' => 'https://shop-id-glowandlovely.com/glowandlovely/34103',
                'gambar' => 'https://imgcdn.shortlyst.com/?u=https%3A%2F%2Fimg.shortlyst.com%2Fcdf1ed1173d46f69b182c147610db0e6&mw=1440'
            ],
            [
                'nama' => 'Beasiswa C',
                'tingkats' => ['SMA', 'Sarjana-1'],
                'deadline' => '2025-06-03',
                'deskripsi' => 'Pendanaan studi S2 ke luar negeri...',
                'link' => '#',
                'gambar' => 'https://via.placeholder.com/600x400'
            ]
        ];

        return view('beasiswa.index', compact('beasiswas'));
    }
}
