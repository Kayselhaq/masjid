<!DOCTYPE html>

@extends('layouts.app')
@section('content')
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kegiatan - Masjid Modern</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .bento-item {
            grid-column: span 12;
        }
        @media (min-width: 768px) {
            .bento-item-sm { grid-column: span 6; }
        }
        @media (min-width: 1024px) {
            .bento-item-lg { grid-column: span 4; }
            .bento-item-wide { grid-column: span 8; }
        }
    </style>

<body class="bg-surface font-body-md text-on-surface">
<header class="sticky top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-100 dark:border-slate-800 shadow-sm">

</header>
<main class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
<header class="mb-12 text-center">
<h1 class="font-display-lg text-display-lg text-on-background mb-4">Eksplorasi Kegiatan Kami</h1>
<p class="text-body-lg font-body-lg text-on-surface-variant max-w-2xl mx-auto">
                Temukan berbagai program keagamaan, sosial, dan pendidikan yang dirancang untuk memperkuat iman dan silaturahmi ummah.
            </p>
</header>
@foreach($kegiatan as $item)

<div class="group bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">

    {{-- GAMBAR --}}
    <div class="relative h-56 overflow-hidden">

        <img 
            src="{{ $item->gambar ?? 'https://images.unsplash.com/photo-1542810634-71277d95dcbb' }}"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        >

        <div class="absolute top-4 left-4">

            <span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                {{ $item->kategori }}
            </span>

        </div>

    </div>

    {{-- CONTENT --}}
    <div class="p-8 flex flex-col flex-grow">

        {{-- TANGGAL --}}
        <div class="flex items-center text-primary mb-3 gap-2">

            <span class="material-symbols-outlined text-sm">
                calendar_today
            </span>

            <span class="font-label-md text-label-md">
                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
            </span>

        </div>

        {{-- JUDUL --}}
        <h3 class="font-headline-md text-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">
            {{ $item->judul }}
        </h3>

        {{-- DESKRIPSI --}}
        <p class="text-on-surface-variant font-body-md text-body-md mb-6 line-clamp-2">
            {{ $item->deskripsi }}
        </p>

        {{-- FOOTER --}}
        <div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">

            <div class="flex items-center gap-2 text-outline">

                <span class="material-symbols-outlined text-sm">
                    location_on
                </span>

                <span class="text-xs font-medium">
                    {{ $item->lokasi }}
                </span>

            </div>

            {{-- DETAIL --}}
            <a 
                href="/kegiatan/{{ $item->id }}"
                class="text-primary font-label-md text-label-md flex items-center gap-1 group/link"
            >

                Detail

                <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">
                    arrow_forward
                </span>

            </a>

        </div>

    </div>

</div>

@endforeach
<nav class="mt-16 flex justify-center">
<ul class="flex items-center gap-2">
<li>
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
</li>
<li>
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary text-on-primary font-label-md text-label-md">1</button>
</li>
<li>
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-surface-container-low transition-colors font-label-md text-label-md">2</button>
</li>
<li>
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-surface-container-low transition-colors font-label-md text-label-md">3</button>
</li>
<li>
<span class="px-2 text-outline">...</span>
</li>
<li>
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</li>
</ul>
</nav>
</main>

</body>
@endsection
