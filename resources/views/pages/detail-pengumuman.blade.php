@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto px-6 py-16">

    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">

        {{-- 🔥 GAMBAR (BONUS) --}}
        <img src="{{ asset('images/' . $pengumuman->gambar) }}" class="w-full h-64 object-cover" 
             class="w-full h-64 object-cover">

        <div class="p-10">

            {{-- Badge --}}
            <span class="inline-block px-4 py-1 rounded-full bg-green-100 text-green-600 text-sm mb-6">
                {{ ucfirst($pengumuman->status) }}
            </span>

            {{-- Judul --}}
            <h1 class="text-4xl font-bold mb-4 leading-tight">
                {{ $pengumuman->judul }}
            </h1>

            {{-- Tanggal --}}
            <p class="text-gray-400 mb-8">
                {{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d M Y') }}
            </p>

            {{-- Isi --}}
            <div class="text-gray-700 text-lg leading-relaxed mb-10">
                {{ $pengumuman->isi }}
            </div>

            {{-- Tombol --}}
            <a href="/" class="inline-flex items-center gap-2 text-green-600 font-semibold hover:underline">
                ← Kembali ke Beranda
            </a>

        </div>
    </div>

</section>
@endsection