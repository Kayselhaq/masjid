

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

<div class="relative mb-10">

    <!-- Background HERO ONLY -->
    <div class="absolute inset-0 h-[300px] -z-10">
        <img src="{{ asset('images/masjid.jpg') }}"
             class="w-full h-full object-cover opacity-20">
    </div>
<!-- Header Section -->
<section class="text-center mb-xl">
<h1 class="font-h1 text-h1 text-on-background mb-4">Donasi Masjid</h1>
<p class="font-body-lg text-body-lg text-tertiary max-w-2xl mx-auto">
                Mari berkontribusi dalam pembangunan dan kegiatan masjid sebagai amal jariyah
            </p>
    
</section>
<!-- Main Content Layout (Bento Grid Style) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Main Donation Card (QR & Bank) -->
<div class="lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] p-md flex flex-col md:flex-row gap-8 items-center overflow-hidden">
<div class="w-full md:w-1/2 flex flex-col items-center">
<div class="bg-white p-4 rounded-xl shadow text-center">

    <img src="{{ asset('images/qris.jpg') }}"
         class="w-40 mx-auto mb-3">

    <p class="text-sm text-gray-500 mb-2">
        Pindai QRIS untuk donasi cepat
    </p>

    <a href="{{ asset('images/qris.jpg') }}" download
       class="bg-green-600 text-white px-4 py-2 rounded text-sm inline-block">
       Download QRIS
    </a>

</div>
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-[20px]" data-icon="qr_code_scanner">qr_code_scanner</span>
                        Pindai QRIS untuk donasi cepat
                    </span>
</div>
<div class="w-full md:w-1/2 flex flex-col">
<h3 class="font-h3 text-h3 text-on-background mb-6">Transfer Bank</h3>
<div class="bg-surface-container-low p-6 rounded-xl space-y-4 mb-6">
<div>
<p class="font-label-sm text-label-sm text-tertiary uppercase tracking-wider mb-1">Nama Bank</p>
<p class="font-body-lg text-body-lg font-bold text-on-background">Bank Syariah Indonesia</p>
</div>
<div>
<p class="font-label-sm text-label-sm text-tertiary uppercase tracking-wider mb-1">Nomor Rekening</p>
<p class="font-h3 text-h3 text-primary tracking-tight">7123456789</p>
<p class="text-xs text-gray-500 mt-2">
    Dikelola oleh pengurus resmi Masjid ABBAS
</p>
</div>
<div>
<p class="font-label-sm text-label-sm text-tertiary uppercase tracking-wider mb-1">Atas Nama</p>
<p class="font-body-md text-body-md font-semibold text-on-background">Masjid ABBAS</p>
</div>
</div>
<button onclick="copyRek()" 
    class="bg-green-600 text-white px-4 py-2 rounded w-full">
    Salin No Rekening
</button>
<p id="notif" class="text-xs text-green-600 mt-2 hidden text-center">
    ✔ Berhasil disalin
</p>
<a href="https://wa.me/6281234567890" target="_blank"
   class="block mt-3 bg-green-500 text-white px-4 py-2 rounded text-sm text-center block text-center">
   Konfirmasi via WhatsApp
</a>
</div>
</div>
<!-- Side Progress Card -->
<div class="lg:col-span-4 space-y-gutter">
<!-- Progress Bar Section -->
<div class="bg-surface-container-lowest rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] p-md">

    <!-- HEADER -->
    <div class="flex items-center gap-3 mb-4">
        <span class="material-symbols-outlined text-primary">foundation</span>
        <h3 class="font-h3 text-h3 text-on-background">Target Renovasi</h3>
    </div>

    <!-- DESKRIPSI -->
    <p class="text-sm text-gray-500 mb-4">
        Target pembangunan tahap 1
    </p>

    <!-- DATA -->
    @php
        $target = 100000000; // nanti bisa dari database
        $progress = $target ? ($totalMasuk / $target) * 100 : 0;
    @endphp

    <!-- TERKUMPUL -->
    <div class="mb-3">
        <p class="text-xs text-gray-500">Terkumpul</p>
        <p class="font-bold text-primary text-lg">
            Rp {{ number_format($totalMasuk) }}
        </p>
    </div>

    <!-- PERSENTASE -->
    <p class="text-sm mb-2">
        {{ round($progress) }}%
    </p>

    <!-- PROGRESS BAR -->
    <div class="w-full h-3 bg-gray-200 rounded-full overflow-hidden">
        <div class="h-full bg-green-500 rounded-full transition-all duration-700"
             style="width: {{ $progress }}%">
        </div>
    </div>

    <!-- TARGET -->
    <div class="mt-3">
        <p class="text-xs text-gray-500">Target</p>
        <p class="font-semibold">
            Rp {{ number_format($target) }}
        </p>
    </div>
    <div class="bg-secondary-container/30 backdrop-blur-sm rounded-xl p-md border border-secondary-container/50">
<span class="material-symbols-outlined text-secondary text-4xl mb-4" data-icon="format_quote" data-weight="fill">format_quote</span>
<p class="font-body-lg text-body-lg italic text-on-secondary-container leading-relaxed mb-4">
                        "Sedekah tidak akan mengurangi harta (HR. Muslim)"
                    </p>
<div class="flex items-center gap-3">
<div class="w-8 h-px bg-secondary-container"></div>
<span class="font-label-sm text-label-sm text-secondary font-semibold uppercase tracking-widest">Amal Jariyah</span>
</div>
</div>
</div>
</div>  
</div>
</div>
</div>
</div>
</div>
<!-- Inspirational Quotes Section -->

<!-- Featured Campaigns -->
<section class="mt-xl">
<h2 class="font-h2 text-h2 text-on-background mb-8">Program Kebaikan Lainnya</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="bg-white rounded-xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] group">
<div class="h-48 overflow-hidden relative">
<img alt="Donasi Anak Yatim" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Close-up of a kind hand giving a gift to a smiling child, soft morning light, emotional and warm atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNWjoifKdiFAznRN4WYovB0GGM2j4mRz5CUWJAWaLxbC7-P7jxoB1znLorRcHCMGG_2nG0e4k5VIjc4YgAmcCD3JZxNnZsznPP2Hk0eyk6xeNn5M0t9QMmc7GChCGgc9lxJP0n_0g7J7JzTBjbHLQ7bALYWmD24p4gPtombApKsOec2TdVFgoAEGcXEfJPAMPc-_t6dx5EPQ6_bdSD8sKkXUYx-XZME-WpwRwXiNZ9ooxDCgFjF1tkqGpTj_B5K85RKnk7Vws7XqsH"/>
<div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Sosial</div>
</div>
<div class="p-6">
<h4 class="font-h3 text-h3 text-[18px] mb-2">Santunan Anak Yatim</h4>
<p class="font-body-md text-body-md text-tertiary line-clamp-2 mb-4">Berikan kebahagiaan bagi mereka yang membutuhkan melalui program santunan rutin.</p>
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                            Donasi Sekarang <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
<div class="bg-white rounded-xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] group">
<div class="h-48 overflow-hidden relative">
<img alt="Operasional Masjid" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Interior of a modern mosque with soft sunlight streaming through windows, peaceful atmosphere, clean and serene" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApLvEdgpzl63G91fgIljKCuZy5E8VAB4gH717T1SNRzUsRqhKZdQBbRX9hjOMDnpqw7QzPnyMdkFJ3vAMFnzWDHnJmdifLjpDXREhtTVXG8wBHHo6z2c5Wa3weKp6KhFmX5B-K0JC1BamsrenF_e-kaeSlHWh_X8Z9YFq_ZjNvbPsBY5lv4jVyVMmFfUp1Vu6H0_Kp2tD0lPKAVic9eQ9YUYx8T1BlIzdmLjjwUFn3EfVIC7RRR2Gvf4x9ka4SBG8JQWlLI2ioYPik"/>
<div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Fasilitas</div>
</div>
<div class="p-6">
<h4 class="font-h3 text-h3 text-[18px] mb-2">Operasional Masjid</h4>
<p class="font-body-md text-body-md text-tertiary line-clamp-2 mb-4">Mendukung kebersihan, kenyamanan, dan perawatan harian fasilitas masjid.</p>
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                            Donasi Sekarang <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
<div class="bg-white rounded-xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] group">
<div class="h-48 overflow-hidden relative">
<img alt="Pendidikan Al-Quran" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="An open Quran on a wooden stand with beautiful Arabic calligraphy, focused lighting on the pages" src="https://lh3.googleusercontent.com/aida-public/AB6AXuArBVjq65CAxzBhJ6b4rIE47QV-qdSYoK7Ch-ciH2UKW7FR4yJVulxvWk5BP7fLxLRHfgxMVbG3oX99H8CQ8ZRI37kQEBAwRjCPdBZP0jbh4dTBvAAL9r6-HmNU5Nrm9KD97UiRGGHFJu5pk3DhaMq5aC5hSq8wI8pxVGMI99wi4VGYLfyCtTey2PWaxjrUj7BoU_fSRvItXvDrFtoQIR6cLMyIoqcw1ENFiSkjL-GoG3MtpDKTLK_zV_6h5TptG64VPz1sckt1iP9Z"/>
<div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Pendidikan</div>
</div>
<div class="p-6">
<h4 class="font-h3 text-h3 text-[18px] mb-2">Pendidikan Al-Quran</h4>
<p class="font-body-md text-body-md text-tertiary line-clamp-2 mb-4">Membantu program TPQ dan tahfidz bagi generasi muda di lingkungan masjid.</p>
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                            Donasi Sekarang <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>
</section>
</main>
<script>
function copyRek() {
    const text = "7123456789";

    if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(() => {
            document.getElementById("notif").classList.remove("hidden");
        });
    } else {
        // fallback (biar pasti jalan)
        const input = document.createElement("input");
        input.value = text;
        document.body.appendChild(input);
        input.select();
        document.execCommand("copy");
        document.body.removeChild(input);

        document.getElementById("notif").classList.remove("hidden");
    }
}
</script>
@endsection