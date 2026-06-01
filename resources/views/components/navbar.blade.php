<header class="fixed top-0 left-0 w-full z-[99999] bg-white/80 backdrop-blur-md shadow-sm border-b">
    <nav class="flex items-center justify-between px-6 lg:px-12 py-4 max-w-7xl mx-auto">

        <div class="text-xl font-bold text-green-600">
            Masjid ABBAS
        </div>

        <div class="hidden md:flex items-center gap-8">

    <a href="/"
    class="{{ request()->is('/') 
    ? 'text-primary font-semibold' 
    : 'text-slate-700' }}
    hover:text-primary transition-all duration-300">
        Home
    </a>

    <a href="/profil"
    class="{{ request()->is('profil') 
    ? 'text-primary font-semibold' 
    : 'text-slate-700' }}
    hover:text-primary transition-all duration-300">
        Profil
    </a>

    <a href="/kegiatan"
    class="{{ request()->is('kegiatan') 
    ? 'text-primary font-semibold' 
    : 'text-slate-700' }}
    hover:text-primary transition-all duration-300">
        Kegiatan
    </a>

    <a href="/pengumuman"
    class="{{ request()->is('pengumuman') || request()->is('pengumuman/*')
    ? 'text-primary font-semibold' 
    : 'text-slate-700' }}
    hover:text-primary transition-all duration-300">
        Pengumuman
    </a>

    <a href="/keuangan"
    class="{{ request()->is('keuangan') 
    ? 'text-primary font-semibold' 
    : 'text-slate-700' }}
    hover:text-primary transition-all duration-300">
        Keuangan
    </a>

    <a href="/galeri"
    class="{{ request()->is('galeri') || request()->is('galeri/*')
    ? 'text-primary font-semibold' 
    : 'text-slate-700' }}
    hover:text-primary transition-all duration-300">
        Galeri
    </a>

</div>

        <a href="https://wa.me/6281234567890"
            target="_blank"
            class="bg-primary text-white px-6 py-3 rounded-full">
            Kontak Kami
        </a>
    </nav>
</header>