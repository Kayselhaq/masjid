<!DOCTYPE html>

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
<button class="px-6 py-2 rounded-full bg-primary text-on-primary font-label-md transition-all">Semua Foto</button>
<button class="px-6 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed font-label-md transition-all">Ibadah</button>
<button class="px-6 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed font-label-md transition-all">Pendidikan</button>
<button class="px-6 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed font-label-md transition-all">Sosial</button>
<button class="px-6 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed font-label-md transition-all">Ramadan</button>
<button class="px-6 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-primary-fixed-dim hover:text-on-primary-fixed font-label-md transition-all">Pemuda</button>
</div>
</section>
<!-- Photo Grid (Bento Style & Asymmetric) -->
<section class="max-w-7xl mx-auto px-6 pb-section-padding">
<div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-gutter">
<!-- Large Featured Card -->
<div class="md:col-span-2 md:row-span-2 group relative overflow-hidden rounded-[24px] shadow-sm gallery-card bg-surface-container-highest">
<img alt="Shalat berjamaah" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Cinematic wide shot of people praying in a modern mosque with soft natural light coming from arched windows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDA6hTrNF8twn_47J5oqb-kOxfbi1hjTiD7O2hTJH18RHeTn4wDjP9rYtPd8hvVjiDBNGahOgEhMeAqbiwJNczcbpA9gj5PZUpCd_34APEVn7mTiUELRIp4DB0XbbccGU2tYEhiPkrerdlJ3NzKwZJgrS4lxOYoLWw0poMWIFzp-kWhpH3ALjycd8LMs4UVZBKci7nGJPGrm5O_DqP3oz3kCZl2-9wo4CCjktK4jBHIJighoDSudqWNLBk28aCyaa6MLUV1XS-30mwZ"/>
<div class="overlay-content absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-8">
<span class="text-primary-fixed font-label-md mb-2">IBADAH</span>
<h3 class="text-white font-headline-md mb-2">Shalat Tarawih Berjamaah</h3>
<p class="text-surface-variant/80 font-body-md line-clamp-2">Kebersamaan dalam malam-malam suci Ramadan di ruang utama Masjid Modern.</p>
</div>
</div>
<!-- Medium Card -->
<div class="md:col-span-2 group relative overflow-hidden rounded-[24px] shadow-sm gallery-card bg-surface-container-highest min-h-[300px]">
<img alt="Anak mengaji" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Close-up of children reading Quran together in a bright sunlit classroom with soft bokeh background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAUzV1-kD-qZbQe97phcso9B04ZhvbU-L-dmP9zdWIWAKSbiKGrALDyRmMyH1Kw-nE99IaWhtPNNHW8JLClyUjbG-Rb_4SyFafiwaqeQGY_jPLVkAxIZtJGePjhD0Q7ru2tuv9PyqIW2GgarI0QJeWWhddDkcZrvG4z0BvFrvMh_exGiEQdG_cN-jSPAOSj8-sXiHD6qfGeNsAGvTeMWCAW3WA0ud73PX0EY7UN-tY155_4e58bKX5tw2rdmc52O60l0l4dadZrRad"/>
<div class="overlay-content absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-primary-fixed font-label-md mb-1">PENDIDIKAN</span>
<h3 class="text-white font-headline-md text-xl">Generasi Qur'ani</h3>
</div>
</div>
<!-- Small Card 1 -->
<div class="group relative overflow-hidden rounded-[24px] shadow-sm gallery-card bg-surface-container-highest min-h-[300px]">
<img alt="Bakti sosial" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Overhead view of community members sharing traditional food during an outdoor charity event at dusk" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUKsE0yuCge-1hFxqptctCu2JjRAqYiuWZHYECdS_CrrNUBArxpdRiDrPZ7WxjVLFzwbu6AtGgPdGlg1LZKT_8hC7-39BXsSJkfh3PelVxdQH-J1yxwOZbOkF0Tuq3YZcooYOxTPGMfV6CdVN3LH9LAqsqBU0R1WU4cfdAX5plcYqL7AqsTwj0hT5_6P6ncrF5X9sbXwxR2xoj916T3Q_PJJd_rgHXWTHGD8CZM-qVGz4SW1eDdN6_1zHAqBvnzpXhzWpAfdLd2bxE"/>
<div class="overlay-content absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-primary-fixed font-label-md mb-1">SOSIAL</span>
<h4 class="text-white font-headline-md text-lg">Berbagi Iftar</h4>
</div>
</div>
<!-- Small Card 2 -->
<div class="group relative overflow-hidden rounded-[24px] shadow-sm gallery-card bg-surface-container-highest min-h-[300px]">
<img alt="Diskusi pemuda" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Group of diverse young men having a passionate but respectful discussion sitting in a circle in a modern library" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrFizK7bfHRFRFRZ2wqTvgujItux0sojEqWK5VOjZ20uyyvmmtjsJY6udymNYcm8z69nDv2qQYsrGrXucFrINFMxYvYLSd1OJ9xHGSetWMkaw-_Y8PH5UQ_ePag-CSVKJL683ugAzu_4qp4siu0xHvhxbQrevbRywp7twSBMv_jPn5Z9E0zS2IqGTdigpbxyFbKsIim48PxN77tJset_NTRlwS270tv5SmhXQqMPHAc5fRS6BVhQNseTRkuLlkFRvQBCIp6Pc0UoRx"/>
<div class="overlay-content absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-primary-fixed font-label-md mb-1">PEMUDA</span>
<h4 class="text-white font-headline-md text-lg">Youth Circle</h4>
</div>
</div>
</div>
<!-- Second Grid Layout for variety -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mt-gutter">
<div class="group relative overflow-hidden rounded-[24px] shadow-sm gallery-card bg-surface-container-highest aspect-[4/5]">
<img alt="Arsitektur masjid" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Detail of intricate geometric patterns on a modern mosque wall with sunlight creating sharp shadows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgcRAm6FCeO6aop-Cj98XDcCRtvnau5s32XBoSjyjyKaQNKKpfaFaJm-eE8gxsUu8e40Bjr_ljbFIE6t0Yq81gIwm6TTNrWb-zXhtxqsHzCcQZI6B6FQjS_iSR9GxazxMW4iKcU5g5KNUpzHFuLCDyzuK2x6G1GBjvnqqZoe2_6pSuAyHvPTewaxpOwS5LqBF56TITXKNU7i7SP_LI0OiNBivxeh8ekXUH5Z_Sp7zL6MDgDDpk1d8MOteTCwhVSYw7DfzSYGChhQZm"/>
<div class="overlay-content absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-6">
<span class="text-primary-fixed font-label-md mb-1">ARSITEKTUR</span>
<h4 class="text-white font-headline-md text-lg">Sudut Sakinah</h4>
</div>
</div>
<div class="md:col-span-2 group relative overflow-hidden rounded-[24px] shadow-sm gallery-card bg-surface-container-highest aspect-[16/9]">
<img alt="Kajian Umum" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Wide angle shot of a large audience listening to a speaker in a modern hall with professional stage lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVlkVvbauRGV28PHOk3e-f4mNlPJAhVmAugjSOGUGbBqD4gM35622WSz0lyoh0SGTALNJWIjlhNabwMX61ALlpoPYPtzERRH7VHQh9TbrW-mJtl4vKkHBD04KYbWgr5gCP_mx5bsJPNABABlLQCmZGlygc0G6qfh7NIzO21R3s5HoBEtx4Eowo6oGsgmxD8MRQajTdnYOP2vPGwdzcaPRYlWfWOBgqfuS9cjJJN-yn2Wur6YyLXahfjP96HkYPwR1sA9yjwcq_fX42"/>
<div class="overlay-content absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/20 to-transparent opacity-0 transition-opacity duration-300 flex flex-col justify-end p-8">
<span class="text-primary-fixed font-label-md mb-2">KAJIAN</span>
<h3 class="text-white font-headline-md mb-2">Seminar Internasional Adab</h3>
</div>
</div>
</div>
<!-- Load More -->
<div class="mt-16 text-center">
<button class="px-8 py-3 border-2 border-primary text-primary hover:bg-primary hover:text-on-primary rounded-full font-label-md transition-all">
                    Lihat Koleksi Lainnya
                </button>
</div>
</section>
<!-- Newsletter / CTA -->
<section class="bg-surface-container-low py-section-padding px-6">
<div class="max-w-4xl mx-auto bg-white dark:bg-slate-900 rounded-[32px] p-8 md:p-12 shadow-xl shadow-green-900/5 text-center">
<h2 class="font-headline-lg text-headline-lg mb-4">Ingin Mengetahui Kegiatan Kami?</h2>
<p class="text-on-surface-variant font-body-lg mb-8">Berlangganan buletin kami untuk mendapatkan update foto dan jadwal kegiatan terbaru langsung di email Anda.</p>
<form class="flex flex-col md:flex-row gap-4 max-w-lg mx-auto">
<input class="flex-1 bg-surface-container-highest border-none rounded-full px-6 py-4 focus:ring-2 focus:ring-primary outline-none font-body-md" placeholder="Email Anda" type="email"/>
<button class="bg-primary text-on-primary px-8 py-4 rounded-full font-label-md hover:opacity-90 transition-all">Daftar Sekarang</button>
</form>
</div>
</section>
</main>
<!-- Footer -->

</body>
@endsection