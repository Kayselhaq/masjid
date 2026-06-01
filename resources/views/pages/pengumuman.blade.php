

@extends('layouts.app')
@section('content')
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pengumuman - Masjid Modern</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(241, 245, 249, 1);
        }
    </style>


<!-- TopNavBar -->

<main class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
<!-- Header Section -->
<header class="mb-16">
<h1 class="font-display-lg text-display-lg text-on-surface mb-4">Pengumuman Terbaru</h1>
<p class="font-body-lg text-body-lg text-outline max-w-2xl">
                Dapatkan informasi terkini mengenai agenda, berita, dan pemberitahuan penting dari ekosistem Masjid Modern.
            </p>
</header>
<!-- Bento Grid / Asymmetric Layout for Announcements -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-8">
@php
$featured = $pengumuman->first();
@endphp

@if($featured)

<article class="md:col-span-8 bg-white rounded-[24px] overflow-hidden shadow-xl border border-slate-100">

    {{-- IMAGE --}}
    <div class="w-full h-[320px] bg-slate-200">

        <img 
            src="{{ $featured->gambar }}"
            alt="{{ $featured->judul }}"
            class="w-full h-full object-cover"
        >

    </div>

    {{-- CONTENT --}}
    <div class="p-8">

        <div class="flex items-center justify-between mb-6">

            <span class="px-4 py-1.5 rounded-full bg-secondary-container text-on-secondary-fixed text-sm font-semibold">

                {{ strtoupper($featured->status) }}

            </span>

            <time class="text-sm text-gray-500">

                {{ \Carbon\Carbon::parse($featured->tanggal)->translatedFormat('d F Y') }}

            </time>

        </div>

        <h2 class="text-3xl font-bold text-slate-800 mb-4">

            {{ $featured->judul }}

        </h2>

        <p class="text-gray-600 leading-relaxed mb-8">

            {{ \Illuminate\Support\Str::limit($featured->isi, 250) }}

        </p>

        <a 
            href="{{ url('/pengumuman/' . $featured->id) }}"
            class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all"
        >

            Baca Selengkapnya

            <span class="material-symbols-outlined">
                arrow_forward
            </span>

        </a>

    </div>

</article>

@endif
<!-- Status & Filter Sidebar (Hidden on Mobile) -->
<aside class="hidden md:flex md:col-span-4 flex-col gap-6">
<div class="bg-surface-container-low rounded-[24px] p-6">
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">Statistik</h3>
<div class="space-y-4">
<div class="flex justify-between items-center p-4 bg-white rounded-xl">
<span class="font-label-md text-label-md text-outline">Total Pengumuman</span>
<span class="font-headline-md text-headline-md text-primary">{{ $allPengumuman->count() }}</span>
</div>
<div class="flex justify-between items-center p-4 bg-white rounded-xl">
<span class="font-label-md text-label-md text-outline">Aktif</span>
<span class="font-headline-md text-headline-md text-secondary">{{ $allPengumuman->where('status', 'aktif')->count() }}</span>
</div>
</div>
</div>
<div class="relative rounded-[24px] overflow-hidden aspect-square shadow-lg">
<img alt="Suasana Masjid" class="object-cover w-full h-full" data-alt="Modern mosque interior with sunlight streaming through geometric windows and clean white walls for a serene spiritual atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHLMhWEwuTyThiVqVFL3dgQhEHu_shj5ozufkiWoSWYVEu_gQfuGSkapWgjf30LvztF08X-EHmNMtSmnfv_9NV3--1TecKc38OxJnh8-L0xNHT6rtMRc_JS6hDPNzo0qKHR7iUTHzMpUt3OUEXlYeCPlKeZ13o6aRcYM3-Q0vvLZta2JjljTsgdzGLRY7pG3NpAlcYWpt2SnhNSGc9AXWvRIAkx9JITbza0C4Zbb2L7-0dIAx2zgxPLMPexpc35KD7hsE9j2uluaz9"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
<p class="text-white font-headline-md text-headline-md">Sakinah dalam Teknologi</p>
</div>
</div>
</aside>
<!-- List of Secondary Announcements -->
<div class="md:col-span-12 grid grid-cols-1 md:grid-cols-3 gap-8 mt-4">
<div class="md:col-span-12 grid grid-cols-1 md:grid-cols-3 gap-8 mt-4">

@foreach($pengumuman->skip(1) as $p)

<a 
    href="{{ url('/pengumuman/' . $p->id) }}"
    class="block bg-white rounded-[24px] p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow hover:-translate-y-1 duration-300"
>

    {{-- HEADER --}}
    <div class="flex justify-between items-start mb-6">

        <span class="bg-surface-container text-on-surface font-label-md text-label-md px-3 py-1 rounded-full">

            {{ ucfirst($p->status) }}

        </span>

        <time class="font-label-md text-label-md text-outline">

            {{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d M') }}

        </time>

    </div>

    {{-- TITLE --}}
    <h3 class="font-headline-md text-headline-md text-on-surface mb-3">

        {{ $p->judul }}

    </h3>

    {{-- DESC --}}
    <p class="font-body-md text-body-md text-outline mb-6 line-clamp-3">

        {{ \Illuminate\Support\Str::limit($p->isi, 120) }}

    </p>

    {{-- FOOTER --}}
    <div class="flex items-center justify-between pt-4 border-t border-slate-50">

        <span class="inline-flex items-center gap-1.5 text-primary font-label-md text-label-md">

            <span class="w-2 h-2 rounded-full bg-primary"></span>

            {{ ucfirst($p->status) }}

        </span>

        <span class="material-symbols-outlined text-outline">
            open_in_new
        </span>

    </div>

</a>

@endforeach

</div>
<!-- Load More Section -->

<div class="mt-12 flex justify-center">
    {{ $pengumuman->links() }}

</div>
</main>
<!-- Footer -->


@endsection