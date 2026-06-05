<?php

namespace App\Filament\Widgets;

use App\Models\Galeri;
use App\Models\Kegiatan;
use App\Models\Kas;
use App\Models\Pengumuman;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalMasuk = Kas::where('jenis', 'masuk')->sum('nominal');
        $totalKeluar = Kas::where('jenis', 'keluar')->sum('nominal');
        $saldo = $totalMasuk - $totalKeluar;

        return [
                Stat::make('Total Kegiatan', Kegiatan::count())
                    ->description('Kegiatan Terdaftar')
                    ->icon('heroicon-o-calendar-days')
                    ->color('primary'),

                Stat::make('Pengumuman', Pengumuman::count())
                    ->description('Pengumuman Aktif')
                    ->icon('heroicon-o-megaphone')
                    ->color('warning'),

                Stat::make('Galeri', Galeri::count())
                    ->description('Foto Tersimpan')
                    ->icon('heroicon-o-photo')
                    ->color('info'),

                Stat::make('Saldo Kas', 'Rp ' . number_format($saldo, 0, ',', '.'))
                    ->description('Saldo Saat Ini')
                    ->icon('heroicon-o-banknotes')
                    ->color('success'),

                Stat::make('Total Pemasukan', 'Rp ' . number_format($totalMasuk, 0, ',', '.'))
                    ->description('Dana Masuk')
                    ->icon('heroicon-o-arrow-trending-up')
                    ->color('success'),

                Stat::make('Total Pengeluaran', 'Rp ' . number_format($totalKeluar, 0, ',', '.'))
                    ->description('Dana Keluar')
                    ->icon('heroicon-o-arrow-trending-down')
                    ->color('danger'),
            ];
    }
}