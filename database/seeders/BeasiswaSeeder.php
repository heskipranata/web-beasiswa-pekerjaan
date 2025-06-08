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
                'gambar' => 'https://vandeventermaas.or.id/wp-content/uploads/2016/05/vdms_logo_bw.png',
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
            ],
            [
                'nama' => 'Beasiswa Mahasiswa Berprestasi Akademik',
                'tingkats' => json_encode(['D3']),
                'deadline' => null,
                'deskripsi' => 'Beasiswa akademik bagi mahasiswa berprestasi di Poltekkes Manado',
                'link' => 'https://official.poltekkes-manado.ac.id/beasiswa/detail/beasiswa-program-bidik-misi-poltekkes-manado',
                'gambar' => 'https://official.poltekkes-manado.ac.id/storage/scholarship/WUDnruG1yAUebvhQFCRWL6azBk3MpmSwvqyPAUmR.png',
            ],
            [
                'nama' => 'Djarum Beasiswa Plus',
                'tingkats' => json_encode(['Sarjana-1']),
                'deadline' => '2025-07-11',
                'deskripsi' => 'Program beasiswa bagi mahasiswa di perguruan tinggi negeri dan swasta yang memiliki kerja sama dengan Djarum Foundation',
                'link' => 'https://djarumbeasiswaplus.org/tentang_kami/persyaratan-untuk-menjadi-penerima-program-djarum-beasiswa-plus?utm_source=chatgpt.com',
                'gambar' => 'https://djarumbeasiswaplus.org/assets/media/1522298726_Tentang%20Kami%20-%20Tentang%20DBP_preview.jpg',
            ]
        ];

        foreach ($data as $beasiswa) {
            Beasiswa::create($beasiswa);
        }
    }
}
