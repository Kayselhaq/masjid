<!DOCTYPE html>

@extends('layouts.app')
@section('content')
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed": "#00210b",
                    "inverse-surface": "#213145",
                    "on-secondary-fixed-variant": "#005226",
                    "surface-tint": "#006e2f",
                    "on-primary-container": "#004b1e",
                    "secondary-fixed": "#a6f4b5",
                    "surface-container": "#e5eeff",
                    "on-tertiary": "#ffffff",
                    "on-secondary-container": "#24703e",
                    "tertiary": "#55615a",
                    "on-primary-fixed-variant": "#005321",
                    "error-container": "#ffdad6",
                    "inverse-primary": "#4ae176",
                    "secondary-container": "#a4f1b2",
                    "on-error-container": "#93000a",
                    "background": "#f8f9ff",
                    "primary-fixed": "#6bff8f",
                    "outline": "#6d7b6c",
                    "secondary": "#1f6c3a",
                    "on-primary-fixed": "#002109",
                    "on-tertiary-fixed-variant": "#3e4943",
                    "on-background": "#0b1c30",
                    "surface-variant": "#d3e4fe",
                    "tertiary-container": "#a2afa7",
                    "surface-dim": "#cbdbf5",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed-dim": "#bdcac1",
                    "on-primary": "#ffffff",
                    "surface-bright": "#f8f9ff",
                    "on-error": "#ffffff",
                    "primary-fixed-dim": "#4ae176",
                    "primary": "#006e2f",
                    "inverse-on-surface": "#eaf1ff",
                    "surface-container-highest": "#d3e4fe",
                    "surface-container-lowest": "#ffffff",
                    "outline-variant": "#bccbb9",
                    "on-surface-variant": "#3d4a3d",
                    "on-tertiary-fixed": "#131e19",
                    "error": "#ba1a1a",
                    "surface-container-low": "#eff4ff",
                    "on-tertiary-container": "#37433c",
                    "surface-container-high": "#dce9ff",
                    "secondary-fixed-dim": "#8bd79b",
                    "surface": "#f8f9ff",
                    "tertiary-fixed": "#d9e6dd",
                    "on-surface": "#0b1c30",
                    "primary-container": "#22c55e"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "base": "8px",
                    "lg": "48px",
                    "gutter": "24px",
                    "sm": "12px",
                    "md": "24px",
                    "xs": "4px",
                    "xl": "80px",
                    "container-max": "1200px"
            },
            "fontFamily": {
                    "h3": ["Manrope"],
                    "h1": ["Manrope"],
                    "label-sm": ["Manrope"],
                    "body-md": ["Manrope"],
                    "body-lg": ["Manrope"],
                    "h2": ["Manrope"]
            },
            "fontSize": {
                    "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "h1": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-sm": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.02em", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "h2": ["32px", {"lineHeight": "1.25", "letterSpacing": "-0.01em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Manrope', sans-serif; background-color: #f8f9ff; }
    </style>

<div class="absolute inset-0 h-[300px] -z-10">
        <img src="{{ asset('images/masjid.jpg') }}"
             class="w-full h-full object-cover opacity-30">
    </div>
<!-- Top Navigation Bar -->

<main class="pt-24 pb-lg px-6 lg:px-12 max-w-7xl mx-auto">
<!-- Hero Section -->
<section class="mb-lg">
<div class="relative h-[240px] rounded-2xl overflow-hidden mb-10">

    <!-- Background -->
    
         <class="absolute inset-0 w-full h-full object-cover object-center">

    <!-- Overlay (dibikin lebih gelap biar teks kebaca) -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Content -->
    <div class="relative z-10 h-full flex items-end px-8 pb-6 text-white">
        <div>
            <h1 class="text-3xl font-bold text-white">Laporan Keuangan</h1>
            <p class="text-sm opacity-90">
                Transparansi pengelolaan dana umat secara amanah dan profesional
            </p>
        </div>
    </div>

</div>
</section>
<!-- Summary Cards Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md mb-lg">
<div class="bg-white/80 backdrop-blur-md rounded-xl shadow-md hover:shadow-lg transition-all border border-transparent hover:border-primary/30">
<div class="flex items-center justify-between mb-sm">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Total Kas</span>
<span class="material-symbols-outlined text-primary" data-icon="account_balance_wallet">account_balance_wallet</span>
</div>
<div class="font-h3 text-h3 text-on-surface">Rp {{ number_format($saldo) }}</div>
<div class="mt-xs text-xs text-green-600 flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span> +2.4% bln ini
                </div>
</div>
<div class="bg-white/80 backdrop-blur-md rounded-xl shadow-md hover:shadow-lg transition">
<div class="flex items-center justify-between mb-sm">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Total Income</span>
<span class="material-symbols-outlined text-primary" data-icon="arrow_downward">arrow_downward</span>
</div>
<div class="font-h3 text-h3 text-on-surface">{{ number_format($totalMasuk) }}</div>
<div class="mt-xs text-xs text-slate-500 font-medium">Periode: Maret 2024</div>
</div>
<div class="bg-white/80 backdrop-blur-md rounded-xl shadow-md hover:shadow-lg transition">
<div class="flex items-center justify-between mb-sm">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Total Expenses</span>
<span class="material-symbols-outlined text-error" data-icon="arrow_upward">arrow_upward</span>
</div>
<div class="font-h3 text-h3 text-on-surface">Rp {{ number_format($totalKeluar) }}</div>
<div class="mt-xs text-xs text-slate-500 font-medium">Operasional &amp; Sosial</div>
</div>
<div class="bg-white/80 backdrop-blur-md rounded-xl shadow-md hover:shadow-lg transition"">
<div class="flex items-center justify-between mb-sm">
<span class="font-label-sm text-label-sm text-on-secondary-container uppercase tracking-wider">Net Surplus</span>
<span class="material-symbols-outlined text-secondary" data-icon="savings">savings</span>
</div>
<div class="font-h3 text-h3 text-secondary">{{ number_format($saldo) }}</div>
<div class="mt-xs text-xs text-secondary-container font-medium">Surplus Bulan Berjalan</div>
</div>
</section>


<!-- Visualizations & Tools -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

    <!-- LEFT: INCOME -->
    <div class="lg:col-span-2 bg-white rounded-xl p-6 shadow-sm">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-semibold">
                Income vs Expenses
            </h2>

            <div class="flex gap-2">
                <button class="bg-gray-200 px-4 py-2 rounded-lg text-sm">
                    6 Bulan
                </button>

                

                <a href="/donasi"
       class="bg-green-600 text-white px-5 py-2 rounded-lg font-semibold shadow hover:bg-green-700 transition">
       Donasi Sekarang
    </a>

            </div>
        </div>

        <!-- CHART -->
        <div class="h-[300px]">
            <canvas id="chartKas"></canvas>
        </div>

    </div>


    <!-- RIGHT: ALOKASI -->
    <div class="bg-white rounded-xl p-6 shadow-sm">

        <h2 class="text-lg font-semibold mb-4">Alokasi Dana</h2>

        <!-- CHART -->
        <div class="flex justify-center mb-6">
            <canvas id="chartAlokasi" class="w-[200px] h-[200px]"></canvas>
        </div>

        <!-- LEGEND -->
        <div class="space-y-3 text-sm">

            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-green-600 rounded-full"></span>
                    Operasional
                </div>
                <span>71%</span>
            </div>

            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-green-400 rounded-full"></span>
                    Pembangunan
                </div>
                <span>18%</span>
            </div>

            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
                    Sosial
                </div>
                <span>11%</span>
            </div>

        </div>

    </div>

</section>
<!-- Transactions Table -->
<section class="bg-white rounded-xl overflow-hidden card-shadow">
<div class="p-md flex flex-col md:flex-row justify-between items-start md:items-center gap-md border-b border-slate-100">
<h2 class="font-h3 text-h3 text-on-surface">Transaksi Terkini</h2>
<div class="flex gap-2 w-full md:w-auto">
<div class="relative flex-1 md:w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400" data-icon="search">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-100 border-none rounded-lg focus:ring-2 focus:ring-primary focus:bg-white transition-all text-sm" placeholder="Cari transaksi..." type="text"/>
</div>
<button class="bg-slate-100 text-on-surface-variant p-2 rounded-lg hover:bg-slate-200 transition-colors">
<span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<tbody class="divide-y divide-slate-100">
@forelse($kas as $item)
<tr class="hover:bg-slate-50/50 transition-colors">

    <td class="px-md py-4 font-body-md text-on-surface">
        {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
    </td>

    <td class="px-md py-4 font-body-md text-on-surface">
        {{ $item->keterangan }}
    </td>

    <td class="px-md py-4">
        @if($item->jenis == 'masuk')
            <span class="bg-secondary-container/20 text-secondary px-3 py-1 rounded-full text-xs font-semibold">
                Pemasukan
            </span>
        @else
            <span class="bg-error-container/20 text-error px-3 py-1 rounded-full text-xs font-semibold">
                Pengeluaran
            </span>
        @endif
    </td>

    <td class="px-md py-4 font-bold">
        @if($item->jenis == 'masuk')
            <span class="text-green-600">
                + Rp {{ number_format($item->nominal, 0, ',', '.') }}
            </span>
        @else
            <span class="text-red-600">
                - Rp {{ number_format($item->nominal, 0, ',', '.') }}
            </span>
        @endif
    </td>

    <td class="px-md py-4">
        <div class="flex items-center gap-1 text-green-600 text-xs font-medium">
            ✔ Terverifikasi
        </div>
    </td>

</tr>
@empty
<tr>
    <td colspan="5" class="text-center py-6 text-slate-500">
        Belum ada data keuangan
    </td>
</tr>
@endforelse
</tbody>
</tbody>
</table>
</div>
<div class="p-md bg-slate-50 flex justify-between items-center">
<span class="text-sm text-on-surface-variant font-medium">Menampilkan 4 dari 150 transaksi</span>
<div class="flex gap-2">
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-400 hover:text-on-surface disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-sm" data-icon="chevron_left">chevron_left</span>
</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary text-white font-bold text-xs">1</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-on-surface-variant hover:bg-slate-50 font-bold text-xs">2</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-on-surface-variant hover:bg-slate-50 font-bold text-xs">3</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-on-surface-variant hover:text-on-surface">
<span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</section>
</main>
<!-- Footer Section -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('chartKas');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Pemasukan', 'Pengeluaran'],
        datasets: [{
            label: 'Keuangan',
            data: [{{ $totalMasuk }}, {{ $totalKeluar }}],
            backgroundColor: ['#16a34a', '#ef4444']
        }]
    }
});

const ctxAlokasi = document.getElementById('chartAlokasi');
if (ctxAlokasi) {
    new Chart(ctxAlokasi, {
        type: 'doughnut',
        data: {
            labels: ['Operasional', 'Pembangunan', 'Sosial'],
            datasets: [{
                data: [71, 18, 11],
                backgroundColor: [
                    '#16a34a', // hijau tua
                    '#4ade80', // hijau muda
                    '#9ca3af'  // abu
                ],
                borderWidth: 0
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false // karena lo udah bikin manual
                }
            },
            cutout: '70%'
        }
    });
}
</script>

</body>
@endsection