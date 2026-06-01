@extends('layouts.app')

@section('content')

<section class="py-16 bg-slate-50 min-h-screen">

    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-white rounded-[32px] shadow-xl p-8 lg:p-10">

            {{-- IMAGE --}}
            <img 
                src="{{ $kegiatan->gambar ?? 'https://images.unsplash.com/photo-1542810634-71277d95dcbb' }}"
                class="w-full h-[200px] object-cover rounded-3xl mb-8"
            >

            {{-- KATEGORI --}}
            <span class="bg-yellow-400 text-black px-5 py-2 rounded-full text-sm font-bold uppercase tracking-wider">
                {{ $kegiatan->kategori }}
            </span>

            {{-- TITLE --}}
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-6 mb-6 leading-tight">
                {{ $kegiatan->judul }}
            </h1>

            {{-- META --}}
            <div class="flex flex-wrap gap-6 text-gray-500 mb-8">

                <div class="flex items-center gap-2">

                    <span class="material-symbols-outlined text-green-600">
                        calendar_today
                    </span>

                    <span>
                        {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}
                    </span>

                </div>

                <div class="flex items-center gap-2">

                    <span class="material-symbols-outlined text-red-500">
                        location_on
                    </span>

                    <span>
                        {{ $kegiatan->lokasi }}
                    </span>

                </div>

            </div>

            {{-- DESC --}}
            <div class="text-lg leading-[2] text-gray-700">

                {{ $kegiatan->deskripsi }}

            </div>

            {{-- BUTTON --}}
            <div class="mt-12 flex flex-wrap gap-4">

                <a 
                    href="{{ $kegiatan->link_daftar }}"
                    target="_blank"
                    class="px-8 py-4 rounded-full border border-gray-300 hover:bg-gray-100 transition"
                >
                    Kembali
                </a>

                <a 
                    href="/daftar/{{ $kegiatan->id }}"
                    class="px-8 py-4 rounded-full bg-green-600 hover:bg-green-700 text-white transition"
                >
                    Daftar Sekarang
                </a>

            </div>

        </div>

    </div>

</section>

@endsection