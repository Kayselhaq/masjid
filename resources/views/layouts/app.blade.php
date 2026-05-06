<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masjid Modern</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-gradient-to-br from-green-50 via-white to-green-100 text-on-background font-body-md antialiased">

    <!-- Background pattern -->
    <div class="fixed inset-0 opacity-[0.03] pointer-events-none -z-10"
         style="background-image: radial-gradient(circle at 1px 1px, #065f46 1px, transparent 0); background-size: 20px 20px;">
    </div>

    <!-- Navbar -->
    @include('components.navbar')

    <!-- Content -->
    <main class="pt-24 max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    @stack('scripts')
</body>
</html>