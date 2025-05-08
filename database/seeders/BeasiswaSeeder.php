<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Beasiswa Van Deventer Maas',
                'tingkats' => json_encode(['Sarjana-1']),
                'deadline' => null,
                'deskripsi' => 'Beasiswa Van Deventer-Maas Indonesia...',
                'link' => 'https://vandeventermaas.or.id/id/beasiswa/',
                'gambar' => asset('assets/img/vdv.png'),
            ],
            [
                'nama' => 'Beasiswa Glow & Lovely 2025',
                'tingkats' => json_encode(['SMA']),
                'deadline' => '2025-05-08',
                'deskripsi' => 'Dukungan biaya kuliah dan uang saku...',
                'link' => 'https://shop-id-glowandlovely.com/glowandlovely/34103',
                'gambar' => 'https://imgcdn.shortlyst.com/?u=https%3A%2F%2Fimg.shortlyst.com%2Fcdf1ed1173d46f69b182c147610db0e6&mw=1440'
            ],
            [
                'nama' => 'Beasiswa C',
                'tingkats' => json_encode(['SMA', 'Sarjana-1']),
                'deadline' => '2025-06-03',
                'deskripsi' => 'Pendanaan studi S2 ke luar negeri...',
                'link' => '#',
                'gambar' => 'https://via.placeholder.com/600x400'
            ]
        ];

        foreach ($data as $beasiswa) {
            Beasiswa::create($beasiswa);
        }
    }
}

