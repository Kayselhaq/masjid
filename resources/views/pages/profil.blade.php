<!DOCTYPE html>

@extends('layouts.app')
@section('content')
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profil - Masjid Modern</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
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
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-effect {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>

<body class="bg-background text-on-background font-body-md antialiased">
<!-- TopNavBar -->

<main>
<!-- Hero Section -->
<section class="relative h-[614px] flex items-center justify-center overflow-hidden">
<img class="absolute inset-0 w-full h-full object-cover" data-alt="Modern architectural mosque with intricate geometric patterns under a clear soft blue sky at sunrise" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIWobtsFBtsaWAC3zSfO5JWwRx2IlHHk7SwUUJsYur591tJ-LRVKZtqiO6Rww0taAb_yfK2NGW6xRdyZCLCHOrWJogrfOnIARzSVdYVeFDl6D_CvCdqdGr8U2JGpAldO8VCwoPgsYGfzDH_yR3V4lLDzu2W-wxC7qVd9tLwpaucOhP54MDE38ESaic7BlT0aVlumeJ1m5EiKjy36OMvl7BpvnP9rA-Bwp2wuNamaY6Lexyssq2I19eT7Jlk_R7r0EE74roiRE8eJ0G"/>
<div class="absolute inset-0 bg-gradient-to-t from-background via-on-background/20 to-transparent"></div>
<div class="relative z-10 text-center px-6">
<h1 class="font-display-lg text-display-lg text-white mb-4">Profil Masjid Modern</h1>
<p class="font-body-lg text-body-lg text-white/90 max-w-2xl mx-auto">Membangun peradaban Islam yang berkelanjutan melalui integrasi nilai spiritual dan teknologi modern.</p>
</div>
</section>
<!-- Sejarah Section -->
<section class="py-section-padding bg-surface">
<div class="max-w-4xl mx-auto px-6">
<div class="flex items-center gap-4 mb-stack-md text-primary">
<span class="material-symbols-outlined" data-icon="history">history</span>
<h2 class="font-headline-md text-headline-md uppercase tracking-wider">Sejarah Panjang</h2>
</div>
<div class="space-y-stack-md text-on-surface-variant font-body-lg leading-relaxed">
<p>
                        Masjid Modern didirikan pada tahun 1985 sebagai inisiatif komunitas lokal yang merindukan tempat ibadah yang tidak hanya menjadi pusat ritual, tetapi juga pusat pemberdayaan sosial. Berawal dari bangunan kayu sederhana di sudut kota, masjid ini telah melalui transformasi luar biasa selama lebih dari tiga dekade.
                    </p>
<p>
                        Melalui semangat gotong royong dan visi ke depan, renovasi besar-besaran pada tahun 2015 memperkenalkan arsitektur kontemporer yang ramah lingkungan, dengan sistem panel surya dan pengelolaan air wudu yang terintegrasi. Hari ini, Masjid Modern berdiri sebagai ikon harmoni antara tradisi spiritual yang mendalam dan efisiensi teknologi digital.
                    </p>
<p>
                        Lebih dari sekadar bangunan fisik, sejarah kami adalah cerita tentang ribuan wajah yang bersujud, ratusan program pemberdayaan ekonomi, dan ribuan santri yang menimba ilmu di bawah naungan atap ini. Kami berkomitmen untuk terus merajut sejarah baru bagi generasi mendatang.
                    </p>
</div>
</div>
</section>
<!-- Visi & Misi Section -->
<section class="py-section-padding bg-white relative overflow-hidden">
<div class="absolute top-0 right-0 w-64 h-64 opacity-5 pointer-events-none">
<svg viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
<path d="M45.7,-78C58.1,-70.2,66.4,-55.8,72.3,-41.2C78.3,-26.7,82,-12,81.1,2.5C80.2,17.1,74.7,31.6,66.1,44.2C57.6,56.8,46,67.6,32.7,73.5C19.5,79.4,4.5,80.5,-10.8,78.2C-26.1,75.9,-41.7,70.2,-54.6,60.1C-67.5,50,-77.7,35.4,-82.1,19.6C-86.4,3.8,-84.9,-13.2,-78.2,-28.4C-71.5,-43.5,-59.6,-56.8,-45.5,-64.1C-31.4,-71.4,-15.2,-72.7,0.7,-74C16.5,-75.2,33.2,-85.7,45.7,-78Z" fill="#006b2c" transform="translate(100 100)"></path>
</svg>
</div>
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg">
<!-- Visi Card -->
<div class="p-stack-lg bg-surface-container-low rounded-[24px] border border-outline-variant shadow-sm hover:shadow-md transition-all">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-stack-md">
<span class="material-symbols-outlined text-primary text-4xl" data-icon="visibility">visibility</span>
</div>
<h3 class="font-headline-lg text-headline-lg text-on-surface mb-stack-sm">Visi</h3>
<p class="font-body-lg text-on-surface-variant italic">
                            "Menjadi masjid teladan dalam pelayanan umat, syiar Islam yang inklusif, dan pusat integrasi teknologi demi kesejahteraan ummah dunia dan akhirat."
                        </p>
</div>
<!-- Misi Card -->
<div class="p-stack-lg bg-surface-container-low rounded-[24px] border border-outline-variant shadow-sm hover:shadow-md transition-all">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-stack-md">
<span class="material-symbols-outlined text-primary text-4xl" data-icon="task_alt">task_alt</span>
</div>
<h3 class="font-headline-lg text-headline-lg text-on-surface mb-stack-sm">Misi</h3>
<ul class="space-y-stack-sm text-on-surface-variant font-body-md">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-xl mt-1" data-icon="check_circle">check_circle</span>
<span>Menyelenggarakan peribadatan yang khusyuk dengan fasilitas terbaik dan ramah lingkungan.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-xl mt-1" data-icon="check_circle">check_circle</span>
<span>Mengembangkan pusat literasi digital dan pendidikan Al-Qur'an bagi segala usia.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-xl mt-1" data-icon="check_circle">check_circle</span>
<span>Menginisiasi program ekonomi umat berbasis masjid untuk pengentasan kemiskinan.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary text-xl mt-1" data-icon="check_circle">check_circle</span>
<span>Membangun jejaring kolaborasi dengan lembaga global untuk syiar dakwah yang luas.</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Informasi Kontak & Map -->
<section class="py-section-padding bg-surface-bright">
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg items-stretch">
<!-- Contact Column -->
<div class="lg:col-span-4 flex flex-col justify-center">
<h2 class="font-headline-lg text-headline-lg mb-stack-md text-on-surface">Hubungi Kami</h2>
<div class="space-y-stack-md">
<div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100">
<div class="w-10 h-10 bg-primary/10 flex items-center justify-center rounded-full text-primary">
<span class="material-symbols-outlined" data-icon="location_on">location_on</span>
</div>
<div>
<p class="text-label-md font-label-md text-slate-400">Alamat</p>
<p class="font-body-md text-on-surface">Jl. Raya Kebangkitan No. 45, Jakarta Pusat</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100">
<div class="w-10 h-10 bg-primary/10 flex items-center justify-center rounded-full text-primary">
<span class="material-symbols-outlined" data-icon="phone">phone</span>
</div>
<div>
<p class="text-label-md font-label-md text-slate-400">Telepon</p>
<p class="font-body-md text-on-surface">+62 21 5555 1234</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100">
<div class="w-10 h-10 bg-primary/10 flex items-center justify-center rounded-full text-primary">
<span class="material-symbols-outlined" data-icon="mail">mail</span>
</div>
<div>
<p class="text-label-md font-label-md text-slate-400">Email</p>
<p class="font-body-md text-on-surface">salam@masjidmodern.com</p>
</div>
</div>
</div>
</div>
<!-- Map Column -->
<div class="lg:col-span-8">
<div class="relative w-full h-[450px] rounded-[32px] overflow-hidden shadow-lg border-4 border-white">
<!-- Placeholder Map visualization using an image with proper data-location -->
<img class="w-full h-full object-cover" data-alt="Clean minimal map interface showing a pinpoint location in a well-planned urban residential area with green parks" data-location="Jakarta" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdDMlUqD4c23n4uH2KjMo1LwnJLUkBOIwTiV4y6RXr_yqj2ZFbjwi1Mdelmxv0VixGFbYST9o9UWM8QfQwHeCxTOXRoyBePggSDg_izFW8nuNB0VYSeHX2B5iLAtnjLS8qlfs-m_YfKgeV1oiJZI_Vl4j4pUI67BW8QF6uCQAn9ZW_JtFdlB_kyxzqksKg0FtH-SG0vZJFgtdG0U9NHHbioZ7u_JM741lr2RBVKfb-Er_26PuPb9xTQP8B7RWAkZ2MJR106VijZ2PD"/>
<div class="absolute inset-0 flex items-center justify-center bg-on-background/20 backdrop-blur-[2px]">
<div class="bg-white p-6 rounded-2xl shadow-2xl flex flex-col items-center gap-4">
<span class="material-symbols-outlined text-primary text-5xl" data-icon="location_on" data-weight="fill">location_on</span>
<p class="font-label-md text-label-md">Lihat di Google Maps</p>
<button class="bg-primary text-on-primary px-8 py-3 rounded-full font-label-md hover:shadow-lg transition-all">
                                        Petunjuk Arah
                                    </button>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->

</body>
@endsection