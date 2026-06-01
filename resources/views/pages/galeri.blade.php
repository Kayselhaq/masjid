

@extends('layouts.app')
@section('content')
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
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
        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .gallery-card:hover .overlay-content {
            opacity: 1;
        }
    </style>

<body class="bg-surface text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopNavBar -->

<main class="min-h-screen">
<!-- Hero Section -->
<section class="relative pt-20 pb-16 px-6 overflow-hidden">
<div class="max-w-7xl mx-auto text-center relative z-10">
<span class="text-primary font-label-md tracking-widest uppercase mb-4 block">Visual Ummah</span>
<h1 class="font-display-lg text-display-lg text-on-surface mb-6">Galeri Kegiatan Kami</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                    Melihat lebih dekat perjalanan spiritual dan sosial komunitas kami melalui lensa kebersamaan.
                </p>
</div>
<!-- Decorative Pattern -->
<div class="absolute top-0 right-0 -z-0 opacity-10 pointer-events-none">
<svg fill="none" height="400" viewbox="0 0 400 400" width="400" xmlns="http://www.w3.org/2000/svg">
<path class="text-primary" d="M200 0L245 155H400L275 250L320 400L200 305L80 400L125 250L0 155H155L200 0Z" fill="currentColor"></path>
</svg>
</div>
</section>
<!-- Category Filter -->
<section class="max-w-7xl mx-auto px-6 mb-12">
    <div class="flex flex-wrap items-center justify-center gap-4 py-6 border-y border-outline-variant/30">

        {{-- Semua --}}
        <a href="/galeri"
           class="px-6 py-2 rounded-full font-label-md transition-all
           {{ !request('kategori') ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed' }}">
            Semua Foto
        </a>

        {{-- Ibadah --}}
        <a href="/galeri?kategori=ibadah"
           class="px-6 py-2 rounded-full font-label-md transition-all
           {{ request('kategori') == 'ibadah' ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed' }}">
            Ibadah
        </a>

        {{-- Pendidikan --}}
        <a href="/galeri?kategori=pendidikan"
           class="px-6 py-2 rounded-full font-label-md transition-all
           {{ request('kategori') == 'pendidikan' ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed' }}">
            Pendidikan
        </a>

        {{-- Sosial --}}
        <a href="/galeri?kategori=sosial"
           class="px-6 py-2 rounded-full font-label-md transition-all
           {{ request('kategori') == 'sosial' ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed' }}">
            Sosial
        </a>

        {{-- Ramadan --}}
        <a href="/galeri?kategori=ramadan"
           class="px-6 py-2 rounded-full font-label-md transition-all
           {{ request('kategori') == 'ramadan' ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed' }}">
            Ramadan
        </a>

        {{-- Pemuda --}}
        <a href="/galeri?kategori=pemuda"
           class="px-6 py-2 rounded-full font-label-md transition-all
           {{ request('kategori') == 'pemuda' ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed' }}">
            Pemuda
        </a>

    </div>
</section>
<!-- Photo Grid (Bento Style & Asymmetric) -->


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($galeri as $g)

        <div class="group relative overflow-hidden rounded-[28px] h-[420px] bg-slate-200 shadow-md hover:shadow-2xl transition duration-500">

            <!-- IMAGE -->
            <img 
                src="{{ $g->gambar }}"
                alt="{{ $g->judul }}"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
            >

           <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>

<div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 group-hover:opacity-100 translate-y-6 group-hover:translate-y-0 transition-all duration-300">

                <span class="text-green-300 text-sm font-semibold uppercase tracking-wider">
                    {{ $g->kategori }}
                </span>

                <h3 class="text-white text-2xl font-bold mt-2">
                    {{ $g->judul }}
                </h3>

                <p class="text-white/80 text-sm mt-2 line-clamp-2">
                    {{ $g->deskripsi }}
                </p>

            </div>

        </div>

        @endforeach

    </div>

    <!-- PAGINATION -->
    @if($galeri->hasMorePages())
        <div class="mt-14 flex justify-center">
            <a href="{{ $galeri->nextPageUrl() }}"
             class="px-8 py-4 rounded-full border-2 border-primary text-primary font-semibold hover:bg-primary hover:text-white transition">
             Lihat Koleksi Lainnya
             </a>
        </div>
    @endif

</section>
<!-- Load More -->
</section>
<!-- Newsletter / CTA -->
<section class="bg-primary-fixed/30 py-24 px-6 mt-24">
    <div class="max-w-5xl mx-auto bg-white rounded-[40px] p-16 text-center shadow-sm">

        <h2 class="font-display-sm text-display-sm text-on-surface mb-6">
            Ingin Mengikuti Kegiatan Kami?
        </h2>

        <p class="font-body-lg text-body-lg text-outline max-w-3xl mx-auto mb-10">
            Dapatkan informasi terbaru seputar kajian, kegiatan sosial,
            dan agenda masjid lainnya melalui halaman pengumuman kami.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="/pengumuman"
               class="px-8 py-4 rounded-full bg-primary text-white font-semibold hover:opacity-90 transition">
                Lihat Pengumuman
            </a>

            <a href="https://wa.me/6281234567890"
                    target="_blank"
                    class="px-8 py-4 rounded-full border-2 border-primary text-primary font-semibold hover:bg-primary hover:text-white transition">
                    Hubungi via WhatsApp
            </a>
        </div>

    </div>
</section>
</main>
<!-- Footer -->

</body>
@endsection