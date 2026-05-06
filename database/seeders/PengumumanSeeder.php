<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    \App\Models\Pengumuman::insert([
        [
            'judul' => 'Pengajian Akbar',
            'isi' => 'Akan diadakan pengajian akbar hari Jumat setelah Maghrib.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'judul' => 'Kerja Bakti Masjid',
            'isi' => 'Mari ikut kerja bakti membersihkan masjid pada hari Minggu pagi.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'judul' => 'Kajian Rutin',
            'isi' => 'Kajian rutin setiap malam Rabu bersama ustadz setempat.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
