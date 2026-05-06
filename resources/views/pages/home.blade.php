<!DOCTYPE html>

@extends('layouts.app')
@section('content')
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Masjid Modern - Membangun Ummah dengan Teknologi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;family=Manrope:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "tertiary": "#a72d51",
                      "primary-fixed": "#7ffc97",
                      "on-secondary-fixed": "#251a00",
                      "on-tertiary-fixed-variant": "#8a143c",
                      "error-container": "#ffdad6",
                      "surface-container-lowest": "#ffffff",
                      "surface-bright": "#f8f9ff",
                      "on-secondary-container": "#6d5200",
                      "on-secondary": "#ffffff",
                      "surface-container-low": "#eff4ff",
                      "surface": "#f8f9ff",
                      "secondary-fixed": "#ffdf9a",
                      "secondary-container": "#fdc425",
                      "on-tertiary-container": "#fffbff",
                      "on-surface-variant": "#3e4a3d",
                      "primary-fixed-dim": "#62df7d",
                      "primary-container": "#00873a",
                      "on-primary": "#ffffff",
                      "on-surface": "#0b1c30",
                      "primary": "#006b2c",
                      "on-primary-fixed-variant": "#005320",
                      "inverse-on-surface": "#eaf1ff",
                      "surface-variant": "#d3e4fe",
                      "on-background": "#0b1c30",
                      "tertiary-fixed": "#ffd9de",
                      "surface-container-high": "#dce9ff",
                      "inverse-surface": "#213145",
                      "on-error": "#ffffff",
                      "error": "#ba1a1a",
                      "secondary": "#785a00",
                      "tertiary-fixed-dim": "#ffb2bf",
                      "tertiary-container": "#c74668",
                      "background": "#f8f9ff",
                      "surface-container-highest": "#d3e4fe",
                      "surface-dim": "#cbdbf5",
                      "surface-tint": "#006e2d",
                      "secondary-fixed-dim": "#f7be1d",
                      "surface-container": "#e5eeff",
                      "outline-variant": "#bdcaba",
                      "outline": "#6e7b6c",
                      "on-tertiary": "#ffffff",
                      "inverse-primary": "#62df7d",
                      "on-primary-container": "#f7fff2",
                      "on-error-container": "#93000a",
                      "on-tertiary-fixed": "#3f0016",
                      "on-primary-fixed": "#002109",
                      "on-secondary-fixed-variant": "#5a4300"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "stack-sm": "12px",
                      "stack-md": "24px",
                      "gutter": "24px",
                      "container-max": "1200px",
                      "stack-lg": "48px",
                      "section-padding": "80px",
                      "unit": "8px"
              },
              "fontFamily": {
                      "label-md": ["Inter"],
                      "headline-lg": ["Manrope"],
                      "display-lg": ["Manrope"],
                      "body-lg": ["Inter"],
                      "headline-md": ["Manrope"],
                      "body-md": ["Inter"]
              },
              "fontSize": {
                      "label-md": ["14px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                      "headline-lg": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
                      "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}]
              }
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .prayer-active {
            border: 2px solid #fdc425;
            background-color: #f7fff2;
        }
    </style>

<!--body class="bg-background text-on-background selection:bg-primary-fixed"-->
<!-- TopNavBar -->

<main>
<!-- Hero Section -->
<section class="relative h-[870px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="Stunning modern mosque architecture with white marble, intricate geometric details, and golden light during a peaceful sunset" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbdimAirGPQNhc8v4WdgdedRBTBqs52ceVLLGO5TOEmM9lAz8rtNq1DyHl7RtEHfkm-ejczgM8Sil8sVhdqDWwMjIdj__5AOKWtqq7owu1Pt-jt29pVRZTnmSja1Nd2gJEn1Vjda_PTI_hN04QDAUUHV7rI7GbMZ7KUjwZSVe8pCWSNoutnzDx8DLxWOq6OhP92jmftvM17JY3l8sKiAyTw8z4tJW-NgUHfG-2A6OYF005jhVdLce_qFdvf2r5Xb5hsM56RJJS5NZH"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-background/80 to-on-background/20"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 w-full">
<div class="max-w-2xl">
<h1 class="font-display-lg text-display-lg text-on-primary-container mb-6">Membangun Peradaban dari Rumah Allah</h1>
<p class="font-body-lg text-body-lg text-surface-container-low mb-8 opacity-90">Nikmati kemudahan dalam beribadah, belajar, dan beramal melalui platform digital Masjid Modern. Bersama kita wujudkan ummah yang berdaya.</p>
<div class="flex flex-wrap gap-4">
<a href="/donasi"
   class="bg-green-600 text-white px-6 py-3 rounded-full">
   Donasi Sekarang
</a>

<a href="/kegiatan"
   class="border px-6 py-3 rounded-full">
   Lihat Kegiatan
</a>
</div>
</div>
</div>
</section>
<!-- Prayer Times Section (Bento Style Overlap) -->
<section class="relative -mt-20 z-20 px-6 lg:px-12 max-w-7xl mx-auto mb-24">
<div class="bg-white dark:bg-slate-900 rounded-[24px] shadow-2xl p-8 border border-slate-100 dark:border-slate-800">
<div class="flex items-center justify-between mb-8">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">schedule</span>
<h2 class="font-headline-md text-headline-md">Jadwal Sholat Hari Ini</h2>
</div>
<div class="text-right">
<p class="font-label-md text-label-md text-slate-500">Selasa, 21 Mei 2024</p>
<p class="font-body-md text-body-md text-primary font-semibold">Jakarta, Indonesia</p>
</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-5 gap-4">
<div class="flex flex-col items-center p-6 rounded-xl bg-slate-50 dark:bg-slate-800 transition-all hover:shadow-md border border-transparent">
<p class="font-label-md text-label-md text-slate-500 mb-2">Subuh</p>
<p class="font-headline-md text-headline-md text-on-surface">{{ $jadwal['Fajr'] }}</p>
</div>
<div class="flex flex-col items-center p-6 rounded-xl bg-slate-50 dark:bg-slate-800 transition-all hover:shadow-md border border-transparent prayer-active">
<p class="font-label-md text-label-md text-secondary mb-2 flex items-center gap-1">Dzuhur <span class="material-symbols-outlined text-xs">arrow_downward</span></p>
<p class="font-headline-md text-headline-md text-on-surface">{{ $jadwal['Dhuhr'] }}</p>
</div>
<div class="flex flex-col items-center p-6 rounded-xl bg-slate-50 dark:bg-slate-800 transition-all hover:shadow-md border border-transparent">
<p class="font-label-md text-label-md text-slate-500 mb-2">Ashar</p>
<p class="font-headline-md text-headline-md text-on-surface">{{ $jadwal['Asr'] }}</p>
</div>
<div class="flex flex-col items-center p-6 rounded-xl bg-slate-50 dark:bg-slate-800 transition-all hover:shadow-md border border-transparent">
<p class="font-label-md text-label-md text-slate-500 mb-2">Maghrib</p>
<p class="font-headline-md text-headline-md text-on-surface">{{ $jadwal['Maghrib'] }}</p>
</div>
<div class="flex flex-col items-center p-6 rounded-xl bg-slate-50 dark:bg-slate-800 transition-all hover:shadow-md border border-transparent">
<p class="font-label-md text-label-md text-slate-500 mb-2">Isya</p>
<p class="font-headline-md text-headline-md text-on-surface">{{ $jadwal['Isha'] }}</p>
</div>
</div>
</div>
</section>
<!-- Announcements Section -->
<section class="py-section-padding px-6 lg:px-12 max-w-7xl mx-auto">
<div class="flex items-end justify-between mb-12">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Pengumuman Penting</h2>
<p class="font-body-md text-body-md text-slate-500">Informasi terbaru seputar kegiatan dan layanan masjid.</p>
</div>
<button class="font-label-md text-label-md text-primary flex items-center gap-1 hover:underline">
                    Lihat Semua <span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

@php
$colors = ['bg-primary', 'bg-secondary', 'bg-tertiary'];
@endphp

@foreach($pengumuman as $p)
<div class="group bg-white dark:bg-slate-900 rounded-[24px] overflow-hidden shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-all duration-300">
    
    <!-- warna atas (optional random) -->
    <div class="h-4 w-full {{ $colors[$loop->index % 3] }}"></div>

    <div class="p-8">
        <span class="inline-block px-3 py-1 rounded-full bg-primary-container/20 text-primary font-label-md text-[12px] mb-4">
            {{ ucfirst($p->status) }}
        </span>

        <h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">
            {{ $p->judul }}
        </h3>

        <p class="font-body-md text-body-md text-slate-600 dark:text-slate-400 mb-6 line-clamp-3">
            {{ \Illuminate\Support\Str::limit($p->isi, 120) }}
        </p>

        <a class="font-label-md text-label-md text-primary font-bold inline-flex items-center gap-2" href="{{ url('/pengumuman/' . $p->id) }}">
            Baca Selengkapnya
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>
</div>
@endforeach

</div>
</section>
<!-- Recent Activities (Bento Grid) -->
<section class="py-16 bg-slate-50">
<div class="max-w-7xl mx-auto px-6 lg:px-12">

    <!-- TITLE -->
    <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Kegiatan Terbaru
        </h2>
        <p class="text-gray-500 max-w-2xl mx-auto">
            Ikuti berbagai rangkaian kegiatan keagamaan dan sosial yang kami selenggarakan untuk kemajuan jamaah.
        </p>
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

        {{-- ========================= --}}
        {{-- CARD BESAR (KIRI) --}}
        {{-- ========================= --}}
        @if(isset($kegiatan[0]))
        <a href="/kegiatan/{{ $kegiatan[0]->id }}" class="md:col-span-8 group relative rounded-[24px] overflow-hidden shadow-lg">

            <!-- IMAGE -->
            <img 
                src="{{ $kegiatan[0]->gambar ?? 'https://images.unsplash.com/photo-1542810634-71277d95dcbb' }}"
                class="w-full h-[420px] object-cover transition-transform duration-700 group-hover:scale-110"
            >

            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent pointer-events-none"></div>

            <!-- CONTENT -->
            <div class="absolute bottom-0 p-8 text-white z-10">
                <span class="text-sm opacity-80">
                    {{ \Carbon\Carbon::parse($kegiatan[0]->tanggal)->translatedFormat('d F Y') }}
                </span>

                <h3 class="text-2xl font-bold mb-3">
                    {{ $kegiatan[0]->judul }}
                </h3>

                <p class="text-sm opacity-90 mb-4 max-w-md">
                    {{ \Illuminate\Support\Str::limit($kegiatan[0]->deskripsi, 100) }}
                </p>

                <span class="bg-green-600 px-5 py-2 rounded-full text-sm">
                    Daftar Sekarang
                </span>
            </div>

        </a>
        @endif


        {{-- ========================= --}}
        {{-- CARD KANAN (2 KECIL) --}}
        {{-- ========================= --}}
        <div class="md:col-span-4 flex flex-col gap-6">

            {{-- CARD 2 --}}
            @if(isset($kegiatan[1]))
            <a href="/kegiatan/{{ $kegiatan[1]->id }}" class="group relative rounded-[24px] overflow-hidden shadow-lg h-[200px]">

                <img 
                    src="{{ $kegiatan[1]->gambar ?? 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f' }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

                <div class="absolute bottom-0 p-5 text-white z-10">
                    <h3 class="font-semibold text-lg">
                        {{ $kegiatan[1]->judul }}
                    </h3>
                </div>

            </a>
            @endif


            {{-- CARD 3 --}}
            @if(isset($kegiatan[2]))
            <a href="/kegiatan/{{ $kegiatan[2]->id }}" class="group relative rounded-[24px] overflow-hidden shadow-lg h-[200px]">

                <img 
                    src="{{ $kegiatan[2]->gambar ?? 'https://images.unsplash.com/photo-1519389950473-47ba0277781c' }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                >

                <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

                <div class="absolute bottom-0 p-5 text-white z-10">
                    <h3 class="font-semibold text-lg">
                        {{ $kegiatan[2]->judul }}
                    </h3>
                </div>

            </a>
            @endif

        </div>

    </div>
</div>
</section>
<!-- Donation CTA Section -->
<section class="py-section-padding px-6 lg:px-12 max-w-7xl mx-auto">
<div class="bg-primary rounded-[32px] p-8 md:p-16 flex flex-col md:flex-row items-center gap-12 overflow-hidden relative">
<!-- Decorative background elements -->
<div class="absolute -top-24 -right-24 w-64 h-64 bg-primary-container rounded-full opacity-20 blur-3xl"></div>
<div class="absolute -bottom-24 -left-24 w-64 h-64 bg-primary-container rounded-full opacity-20 blur-3xl"></div>
<div class="flex-1 text-center md:text-left z-10">
<h2 class="font-display-lg text-display-lg text-on-primary mb-6">Investasi Akhirat Anda Dimulai Sini</h2>
<p class="font-body-lg text-body-lg text-white/90 mb-8 max-w-xl">Setiap rupiah yang Anda sumbangkan digunakan untuk kemaslahatan umat, operasional masjid, dan program pendidikan bagi anak-anak kurang mampu.</p>
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">


</div>
</div>
<div class="w-full md:w-1/2">
    
    <form action="/donasi" method="GET" class="space-y-4">

        <!-- Nama -->
        <input 
            type="text" 
            name="nama"
            placeholder="Nama Lengkap"
            class="w-full p-4 rounded-xl bg-white/90"
        >

        <!-- Nominal -->
        <input 
            id="nominal"
            type="text" 
            name="nominal"
            placeholder="Nominal"
            oninput="formatRupiah(this)"
            class="w-full p-4 rounded-xl bg-white/90"
        >

        <!-- Tombol nominal -->
        <div class="flex gap-3 flex-wrap">
            <button type="button" onclick="setNominal(50000)"
                class="px-4 py-2 rounded-xl border border-white/30 text-white hover:bg-white/20">
                Rp 50.000
            </button>

            <button type="button" onclick="setNominal(100000)"
                class="px-4 py-2 rounded-xl border border-white/30 text-white hover:bg-white/20">
                Rp 100.000
            </button>

            <button type="button" onclick="setNominal(500000)"
                class="px-4 py-2 rounded-xl border border-white/30 text-white hover:bg-white/20">
                Rp 500.000
            </button>

            <button type="button" onclick="setCustom()"
                class="px-4 py-2 rounded-xl border-2 border-yellow-400 text-white hover:bg-yellow-400/20">
                Custom
            </button>
        </div>

        <!-- Submit -->
        <button type="submit"
            class="bg-yellow-600 text-white px-6 py-4 rounded-full w-full hover:bg-yellow-700">
            Donasi Sekarang
        </button>

    </form>
</div>
</section>
</main>
<script>
function formatRupiah(input) {
    let angka = input.value.replace(/[^,\d]/g, '');
    let formatted = angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    input.value = formatted ? 'Rp ' + formatted : '';
}

function setNominal(nominal) {
    const input = document.getElementById('nominal');
    if (!input) return;
    input.value = 'Rp ' + nominal.toLocaleString('id-ID');
}

function setCustom() {
    const input = document.getElementById('nominal');
    if (!input) return;
    input.value = '';
    input.focus();
}
</script>
@endsection