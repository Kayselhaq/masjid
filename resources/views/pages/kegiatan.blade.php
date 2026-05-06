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
<section class="mb-12 flex flex-wrap items-center justify-between gap-6">
<div class="flex items-center space-x-2 overflow-x-auto pb-2 scrollbar-hide">
<button class="bg-primary text-on-primary px-6 py-2 rounded-full font-label-md text-label-md">Semua</button>
<button class="bg-surface-container-low text-on-surface-variant hover:bg-primary-container hover:text-on-primary-container px-6 py-2 rounded-full font-label-md text-label-md transition-colors">Kajian</button>
<button class="bg-surface-container-low text-on-surface-variant hover:bg-primary-container hover:text-on-primary-container px-6 py-2 rounded-full font-label-md text-label-md transition-colors">Pendidikan</button>
<button class="bg-surface-container-low text-on-surface-variant hover:bg-primary-container hover:text-on-primary-container px-6 py-2 rounded-full font-label-md text-label-md transition-colors">Sosial</button>
<button class="bg-surface-container-low text-on-surface-variant hover:bg-primary-container hover:text-on-primary-container px-6 py-2 rounded-full font-label-md text-label-md transition-colors">Ramadan</button>
</div>
<div class="relative group w-full md:w-72">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
<input class="w-full bg-surface-container-lowest border border-outline-variant rounded-full py-3 pl-12 pr-6 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-body-md text-body-md" placeholder="Cari kegiatan..." type="text"/>
</div>
</section>
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="group bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
<div class="relative h-56 overflow-hidden">
<img alt="Kajian Akbar" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Modern mosque interior with soft warm lighting and a group of people sitting in a circle for a peaceful religious discussion" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuPbEuLsqK1kQstyzWARCPizS2-X35AdfwLTrBEKQ5Lyw8y_4zM-2yVMON9CK2DLyvxgiIvrfB44LUrC-ebFIxAL78kaPEDG7V13V_te9BU0A9scvoLAlcf5qASObQPFiTs9b52sJZIjlaxkMnL5IhdAyMZebNics8_oARvbeESc6oi6JJXmkGeAj4MOUTegpNrve4QT8TE5BbXzwV-v9cPuRxhgJ93qy22E99jD-2JQOk3ZhKeSIRJkzrJjLdzss4gSEnMBtAlGWD"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Kajian</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center text-primary mb-3 gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-md text-label-md">15 Juni 2024</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">Kajian Akbar: Menjemput Keberkahan</h3>
<p class="text-on-surface-variant font-body-md text-body-md mb-6 line-clamp-2">Kajian mendalam mengenai cara mengelola spiritualitas di era modern bersama Ustadz terkemuka.</p>
<div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
<div class="flex items-center gap-2 text-outline">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="text-xs font-medium">19:30 WIB</span>
</div>
<a class="text-primary font-label-md text-label-md flex items-center gap-1 group/link" href="#">
                            Detail <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
<div class="group bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
<div class="relative h-56 overflow-hidden">
<img alt="Kelas Tahfidz" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Children learning in a bright modern classroom with colorful educational posters and natural sunlight streaming through windows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8w1yw7OVnRI6NHvHRdL-B3d6fZrSe_iZfTIGcd_lbnkPYwtJB4z3W7UBNi9vnQRRkYeOdmemr792I6QDutw1m2oeOp2f7SAj6ver4qN1YkRGlfncGuOUpcAroB9MTD1zZSYRFXiaEvGszI1GKhI2q3FzG6VI-iPH-fbAP32Vocf7Bjp_K6W8BK4SUd0EAMzoJ2FkMFxBAPed2XT5vUtwgivv87uxOqzKrWjHuwMaP8pQi_KehfxV38UojO7y2U-iLd73Trp6ZaNhC"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Pendidikan</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center text-primary mb-3 gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-md text-label-md">Setiap Sabtu</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">Kelas Tahfidz Akhir Pekan</h3>
<p class="text-on-surface-variant font-body-md text-body-md mb-6 line-clamp-2">Program hafalan Al-Qur'an intensif untuk anak-anak dan remaja dengan metode murojaah yang efektif.</p>
<div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
<div class="flex items-center gap-2 text-outline">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="text-xs font-medium">08:00 WIB</span>
</div>
<a class="text-primary font-label-md text-label-md flex items-center gap-1 group/link" href="#">
                            Detail <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
<div class="group bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
<div class="relative h-56 overflow-hidden">
<img alt="Bakti Sosial" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Volunteers smiling while distributing healthy food packages in a clean urban community center with bright lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBANpngRCzYJcnznvUDnFoFPa07zxZ0tv7wwtZXyrFbelI59nsn5j3DMtiX3Ny7Ut40urpkEL_iYUsXsS9wyRDL_wIXyLpr38v_qe-uMXt-ZfRya1nDioIaZgaSWytftuepopFjBtN-Ue4lQQ5uc78REtszDKpV_VtuebcktOhN1-ymHODTBmdDewdXTEqsH_e93VEHjtoVaYlOdrgoiDPL8LJU_7_4cYL81cm37FBQbXovMJTRaWtKtmFXq3poHn7pXbIn4O9N5JYR"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Sosial</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center text-primary mb-3 gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-md text-label-md">20 Juni 2024</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">Bakti Sosial &amp; Cek Kesehatan</h3>
<p class="text-on-surface-variant font-body-md text-body-md mb-6 line-clamp-2">Pemeriksaan kesehatan gratis dan pembagian sembako untuk warga dhuafa di sekitar lingkungan masjid.</p>
<div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
<div class="flex items-center gap-2 text-outline">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="text-xs font-medium">09:00 WIB</span>
</div>
<a class="text-primary font-label-md text-label-md flex items-center gap-1 group/link" href="#">
                            Detail <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
<div class="group bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
<div class="relative h-56 overflow-hidden">
<img alt="Buka Puasa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Beautifully arranged dinner tables with dates and traditional Middle Eastern appetizers under glowing decorative lanterns" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrxV6e14SZz-yilfxZ7CdrvkTICvdGAeTe5PCPD45SHxN-btz0wfqkNbuwsO5Ubpn1UorIXCN-Xa4o87EjV3FI3_qCG_7qpOAHddn2oX0Unpnpbcu2HaAJLV4hhhexm3nAhnJiLkYaVr50oB_g69JbfqfRhWrFvMPEDbzz5Z6q7GGwZKsMWkYUSzQumJSllAc_IWyEXBmCk0LsLfu5Qk38ArmM1khtpR4OamCwThxtEPm03LYNeYURssMUG5aGm5wiUp6lpoJDVzNe"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Ramadan</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center text-primary mb-3 gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-md text-label-md">Ramadan 1445H</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">Iftar Jama'i &amp; Tarawih</h3>
<p class="text-on-surface-variant font-body-md text-body-md mb-6 line-clamp-2">Buka puasa bersama setiap hari dan sholat tarawih dengan imam hafidz 30 juz.</p>
<div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
<div class="flex items-center gap-2 text-outline">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="text-xs font-medium">Maghrib</span>
</div>
<a class="text-primary font-label-md text-label-md flex items-center gap-1 group/link" href="#">
                            Detail <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
<div class="group bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
<div class="relative h-56 overflow-hidden">
<img alt="Workshop Digital" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="High-tech laptop on a clean wooden desk with a minimalist plant and warm coffee in a serene office environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1osLRNms2x9cVa6Nt7ZZ2huryYEUQq-rlnwW1LVaVLGAIwj5GpNuIfD4k2d2N-fmjxSFJaY5X8n3YXYu1h92FHstWSSyeQoMNLCXdmTV2NGFNSHMbm-7mSeHmgV0-B1NVbVMu_Bed-zap4oGm6dljnahLqNb0misf_sJ7pngjpS4GluWambxfdxScJQHIJFt_hah0ejNObN34cYmfIxFADBa8MmftBQvuMF0CrLJj_cAm8xxnyJoZMdIQ4S9TM3IFntszGypMiCzN"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Pendidikan</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center text-primary mb-3 gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-md text-label-md">25 Juni 2024</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">Workshop: Literasi Digital Syariah</h3>
<p class="text-on-surface-variant font-body-md text-body-md mb-6 line-clamp-2">Membekali pemuda masjid dengan kemampuan digital marketing untuk dakwah yang lebih efektif.</p>
<div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
<div class="flex items-center gap-2 text-outline">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="text-xs font-medium">13:00 WIB</span>
</div>
<a class="text-primary font-label-md text-label-md flex items-center gap-1 group/link" href="#">
                            Detail <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
<div class="group bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
<div class="relative h-56 overflow-hidden">
<img alt="Seminar Keluarga" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A peaceful living room with soft beige tones, minimalist furniture, and a large window looking out to a garden" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBFDJmFuuUCHoF_yg0g__dalgnjXeybUx-mKxV9_usjoJA6KUWtM6PAJmI9Il43vkTsAwsktz8iJnNLNoyYUyxGbkWqj3XwJ3gOhL980Pcd4RuYRNevUv6iYytfmZ_QdhFm05YXigDxXcdjeMS_E3hxCSpDEcAOYC8o3s_X8JiIgi4qUPKwRSJ8tPJazRkCqaadeHiBrT1F7VJ5CCKS7tXWgIPnUNk9Bgx850sbqOYHQcdofydpWO7NXjWP3O4k4vBLpTw8JNPn4xk"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Kajian</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<div class="flex items-center text-primary mb-3 gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span class="font-label-md text-label-md">27 Juni 2024</span>
</div>
<h3 class="font-headline-md text-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">Seminar: Membangun Baitul Jannati</h3>
<p class="text-on-surface-variant font-body-md text-body-md mb-6 line-clamp-2">Diskusi interaktif seputar parenting islami dan menjaga harmoni dalam rumah tangga muslim.</p>
<div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
<div class="flex items-center gap-2 text-outline">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="text-xs font-medium">10:00 WIB</span>
</div>
<a class="text-primary font-label-md text-label-md flex items-center gap-1 group/link" href="#">
                            Detail <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
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
