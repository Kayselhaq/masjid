<!DOCTYPE html>

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

<body class="bg-background font-body-md text-on-background">
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
<!-- Featured / Important Announcement -->
<article class="md:col-span-8 group relative overflow-hidden rounded-[24px] bg-white shadow-xl shadow-primary/5 border border-slate-100 p-8 transition-transform hover:-translate-y-1">
<div class="absolute top-0 left-0 w-2 h-full bg-secondary"></div>
<div class="flex flex-col h-full">
<div class="flex items-center justify-between mb-6">
<span class="flex items-center gap-2 bg-secondary-container text-on-secondary-fixed font-label-md text-label-md px-4 py-1.5 rounded-full">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">priority_high</span>
                            PENTING
                        </span>
<time class="font-label-md text-label-md text-outline">12 Oktober 2023</time>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-4 group-hover:text-primary transition-colors">Renovasi Area Wudhu dan Perluasan Ruang Utama</h2>
<p class="font-body-lg text-body-lg text-outline mb-8 leading-relaxed">
                        Kami menginformasikan bahwa mulai minggu depan akan dilakukan renovasi total pada area wudhu pria dan wanita. Selama masa pembangunan, akses masuk akan dialihkan melalui pintu samping utara. Mohon maaf atas ketidaknyamanannya dalam beribadah.
                    </p>
<div class="mt-auto flex items-center justify-between">
<div class="flex items-center gap-4">
<span class="inline-flex items-center gap-1.5 text-primary font-label-md text-label-md">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                                Aktif
                            </span>
</div>
<button class="flex items-center gap-2 font-label-md text-label-md text-primary hover:gap-3 transition-all">
                            Baca Selengkapnya
                            <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
</article>
<!-- Status & Filter Sidebar (Hidden on Mobile) -->
<aside class="hidden md:flex md:col-span-4 flex-col gap-6">
<div class="bg-surface-container-low rounded-[24px] p-6">
<h3 class="font-headline-md text-headline-md text-on-surface mb-4">Statistik</h3>
<div class="space-y-4">
<div class="flex justify-between items-center p-4 bg-white rounded-xl">
<span class="font-label-md text-label-md text-outline">Total Pengumuman</span>
<span class="font-headline-md text-headline-md text-primary">24</span>
</div>
<div class="flex justify-between items-center p-4 bg-white rounded-xl">
<span class="font-label-md text-label-md text-outline">Aktif</span>
<span class="font-headline-md text-headline-md text-secondary">8</span>
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
<!-- Announcement Card 1 -->
<article class="bg-white rounded-[24px] p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-6">
<span class="bg-surface-container text-on-surface font-label-md text-label-md px-3 py-1 rounded-full">Kegiatan</span>
<time class="font-label-md text-label-md text-outline">08 Okt</time>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-3">Penerimaan Zakat Fitrah Digital</h3>
<p class="font-body-md text-body-md text-outline mb-6 line-clamp-3">
                        Masjid Modern kini menyediakan layanan pembayaran zakat fitrah melalui QRIS dan Transfer Bank untuk kemudahan jamaah.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-slate-50">
<span class="inline-flex items-center gap-1.5 text-primary font-label-md text-label-md">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                            Aktif
                        </span>
<span class="material-symbols-outlined text-outline">open_in_new</span>
</div>
</article>
<!-- Announcement Card 2 (Inactive) -->
<article class="bg-white rounded-[24px] p-8 border border-slate-100 shadow-sm opacity-75 grayscale-[0.5]">
<div class="flex justify-between items-start mb-6">
<span class="bg-surface-container text-on-surface font-label-md text-label-md px-3 py-1 rounded-full">Kajian</span>
<time class="font-label-md text-label-md text-outline">30 Sep</time>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-3">Tabligh Akbar: Hijrah Digital</h3>
<p class="font-body-md text-body-md text-outline mb-6 line-clamp-3">
                        Kajian rutin bulanan dengan tema pemanfaatan teknologi untuk dakwah Islamiyah di era modern bersama Ustaz Dr. Fulan.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-slate-50">
<span class="inline-flex items-center gap-1.5 text-outline font-label-md text-label-md">
<span class="w-2 h-2 rounded-full bg-slate-300"></span>
                            Nonaktif
                        </span>
<span class="material-symbols-outlined text-outline">history</span>
</div>
</article>
<!-- Announcement Card 3 -->
<article class="bg-white rounded-[24px] p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-6">
<span class="bg-surface-container text-on-surface font-label-md text-label-md px-3 py-1 rounded-full">Donasi</span>
<time class="font-label-md text-label-md text-outline">25 Sep</time>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-3">Laporan Keuangan Masjid September</h3>
<p class="font-body-md text-body-md text-outline mb-6 line-clamp-3">
                        Transparansi adalah kunci. Klik untuk melihat detail pemasukan dan pengeluaran operasional masjid bulan September 2023.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-slate-50">
<span class="inline-flex items-center gap-1.5 text-primary font-label-md text-label-md">
<span class="w-2 h-2 rounded-full bg-primary"></span>
                            Aktif
                        </span>
<span class="material-symbols-outlined text-outline">download</span>
</div>
</article>
</div>
</div>
<!-- Load More Section -->
<div class="mt-16 flex justify-center">
<button class="bg-transparent border-2 border-primary text-primary px-10 py-3 rounded-full font-label-md text-label-md hover:bg-primary/5 transition-all">
                Tampilkan Lebih Banyak
            </button>
</div>
</main>
<!-- Footer -->

</body>
@endsection