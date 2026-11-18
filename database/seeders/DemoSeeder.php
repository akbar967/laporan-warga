<?php

namespace Database\Seeders;

use App\Models\Laporan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        if (! app()->environment('local', 'testing')) {
            throw new \RuntimeException('Data demo hanya boleh dibuat di lingkungan lokal atau testing.');
        }

        $storageLaporanDir = storage_path('app/public/laporan');
        if (! is_dir($storageLaporanDir)) {
            mkdir($storageLaporanDir, 0755, true);
        }

        $imageMappings = [
            'lampu-jalan.jpg' => 'street-lamp.jpg',
            'jalan-berlubang.jpg' => 'hero-report.jpg',
            'taman-rusak.jpg' => 'park.jpg',
        ];

        foreach ($imageMappings as $dest => $src) {
            $srcPath = public_path('assets/images/'.$src);
            $destPath = $storageLaporanDir.'/'.$dest;
            if (file_exists($srcPath) && ! file_exists($destPath)) {
                copy($srcPath, $destPath);
            }
        }

        $sampleReports = [
            [
                'judul' => 'Lampu Penerangan Jalan Umum Padam di RT 04',
                'detail' => 'Lampu jalan penerangan utama di persimpangan RT 04 padam sejak 3 hari lalu. Jalan menjadi sangat gelap dan rawan kecelakaan di malam hari.',
                'foto' => 'laporan/lampu-jalan.jpg',
            ],
            [
                'judul' => 'Aspal Berlubang dan Saluran Air Tersumbat',
                'detail' => 'Terdapat lubang cukup dalam di badan jalan utama dekat pos satpam. Saat hujan air tergenang karena selokan tersumbat sampah ranting.',
                'foto' => 'laporan/jalan-berlubang.jpg',
            ],
            [
                'judul' => 'Fasilitas Bermain di Taman RW 02 Rusak',
                'detail' => 'Ayunan dan bangku taman di area bermain anak rusak dan patah. Mohon dilakukan perbaikan atau penggantian demi keselamatan anak-anak.',
                'foto' => 'laporan/taman-rusak.jpg',
            ],
        ];

        User::factory()->count(5)->create()->each(function (User $user, int $userIndex) use ($sampleReports): void {
            $statuses = ['pending', 'proses', 'selesai'];
            foreach ($statuses as $index => $status) {
                $sample = $sampleReports[$index % count($sampleReports)];
                Laporan::factory()->for($user, 'pelapor')->create([
                    'judul' => $sample['judul'].' ('.($userIndex + 1).')',
                    'detail' => $sample['detail'],
                    'status' => $status,
                    'foto' => $sample['foto'],
                    'tanggal' => now()->subDays(rand(1, 20))->format('Y-m-d'),
                ]);
            }
        });
    }
}
