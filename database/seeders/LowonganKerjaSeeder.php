<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LowonganKerja;

class LowonganKerjaSeeder extends Seeder
{
    public function run(): void
    {
        LowonganKerja::create([
            'judul' => 'Staf IT BCA Manado',
            'jenis' => 'Magang',
            'lokasi' => 'Manado',
            'perusahaan' => 'PT Bank Central Asia Tbk',
            'deskripsi' => 'PT Bank Central Asia Tbk sedang membuka program magang untuk lulusan SMA maupun mahasiswa.',
            'link_detail' => 'https://my.indonesia-career.com/job/pt-bank-central-asia-tbk-manado-sulawesi-utara-2-lowongan-kerja-frontliner-video-banking-bank-bca-tbk-manado-sulawesi-utara/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic',
            'deadline' => '2025-05-20'
        ]);

        LowonganKerja::create([
            'judul' => 'Master Teacher Coach English Academy',
            'jenis' => 'Full-time',
            'lokasi' => 'Manado',
            'perusahaan' => 'Ruang Guru',
            'deskripsi' => 'Ruang Guru mencari pengajar Bahasa Inggris yang berkualitas dan berpengalaman.',
            'link_detail' => 'https://id.linkedin.com/jobs/view/master-teacher-coach-english-academy-manado-at-ruangguru-for-business-4205031284?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic',
            'deadline' => '2025-05-30'
        ]);

        LowonganKerja::create([
            'judul' => 'Elementary Physical Education (PE)',
            'jenis' => 'Full-time',
            'lokasi' => 'Manado',
            'perusahaan' => 'SCK Manado',
            'deskripsi' => 'Dibutuhkan guru pendidikan jasmani tingkat dasar di Sekolah Citra Kasih.',
            'link_detail' => 'https://id.linkedin.com/jobs/view/elementary-physical-education-pe-sck-manado-at-sekolah-cikal-4200323361?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic',
            'deadline' => '2025-05-20'
        ]);

        LowonganKerja::create([
            'judul' => 'Branch Manager English Academy',
            'jenis' => 'Full-time',
            'lokasi' => 'Manado',
            'perusahaan' => 'Ruang Guru',
            'deskripsi' => 'Dibutuh seseorang yang mampu mengkoordinasi dan mengatur proses akademik.',
            'link_detail' => 'https://www.linkedin.com/jobs/view/branch-manager-english-academy-manado-wenang-selatan-at-ruangguru-for-business-4200556677/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic&originalSubdomain=id',
            'deadline' => '2025-06-06'
        ]);

        LowonganKerja::create([
            'judul' => 'Marketing Pemasaran',
            'jenis' => 'Full-time',
            'lokasi' => 'Manado',
            'perusahaan' => 'TPM Group ',
            'deskripsi' => 'Pekerjaan untuk individu yang memiliki kemampuan untuk memasarkan produk wifi fiber optic.',
            'link_detail' => 'https://www.linkedin.com/jobs/view/marketing-pemasaran-at-tpm-group-4236802884/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic&originalSubdomain=id',
            'deadline' => '2025-06-06'
        ]);
    }
}
