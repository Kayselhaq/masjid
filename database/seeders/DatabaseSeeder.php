<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pengumuman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
         Pengumuman::create([
        'judul' => 'Jadwal Imam Sholat Tarawih',
        'isi' => 'Pengurus masjid mengumumkan jadwal imam untuk sholat tarawih bulan Ramadhan.',
        'tanggal' => '2024-03-01',
        'status' => 'aktif',
        'gambar' => 'taraweh.jpg'
    ]);

         Pengumuman::create([
        'judul' => 'Pendaftaran TPA Dibuka',
        'isi' => 'Pendaftaran santri baru TPA sudah dibuka untuk umum.',
        'tanggal' => '2024-02-15',
        'status' => 'aktif',
        'gambar' => 'kajian.jpg'
    ]);

        Pengumuman::create([
        'judul' => 'Gotong Royong Masjid',
        'isi' => 'Akan diadakan kerja bakti membersihkan masjid hari Minggu.',
        'tanggal' => '2024-02-01',
        'status' => 'aktif',
        'gambar' => 'renovasi.jpg'
    ]);
    }
}
