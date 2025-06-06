<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    public function run()
    {
        Beasiswa::query()->delete();
        $data = [
            [
                'nama' => 'Beasiswa Van Deventer Maas',
                'tingkats' => json_encode(['Sarjana-1']),
                'deadline' => null,
                'deskripsi' => 'Beasiswa Van Deventer-Maas Indonesia...',
                'link' => 'https://vandeventermaas.or.id/id/beasiswa/',
                'gambar' => asset('assets/images/vdv.png'),
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
                'nama' => 'Beasiswa Cendekia Muda #3',
                'tingkats' => json_encode(['SMA', 'Sarjana-1']),
                'deadline' => '2025-07-31',
                'deskripsi' => 'Ditujukan bagi siswa dan mahasiswa diploma yang berprestasi namun terkendala biaya.',
                'link' => 'https://youthspaceinnovation.com/',
                'gambar' => asset('images/bcm.jpg'),
            ]
        ];

        foreach ($data as $beasiswa) {
            Beasiswa::create($beasiswa);
        }
    }
}
