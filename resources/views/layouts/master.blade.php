<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-white shadow-lg min-h-screen p-6 fixed">
        <!-- Logo -->
    <div class="flex flex-col items-center mb-8">
        <img 
            src="{{ asset('images/budget.png') }}" 
            alt="AutoFinanceAi Logo"
            class="w-16 h-16 mb-2"
    </div>
        
        <h1 class="text-2xl font-bold text-blue-600 mb-8">AutoFinanceAi</h1>

        <nav class="space-y-3">
            <a href="/rsHome" class="block px-4 py-2 rounded-lg hover:bg-blue-100">Dashboard</a>
            <a href="/rsInput" class="block px-4 py-2 rounded-lg hover:bg-blue-100">Transaksi</a>
            <a href="/form-tampil" class="block px-4 py-2 rounded-lg hover:bg-blue-100">Laporan</a>
            <a href="/login" class="block px-4 py-2 rounded-lg hover:bg-blue-100">Analisis Ai</a>
            <a href="/login" class="block px-4 py-2 rounded-lg hover:bg-blue-100">Kategori</a>
            <a href="/register" class="block px-4 py-2 rounded-lg hover:bg-blue-100">Pengaturan</a>
            <a href="/login"
            onclick="return confirm('Apakah Anda yakin ingin logout?')"
            class="block px-4 py-2 rounded-lg text-red-600
                   hover:bg-red-50 transition"">Logout</a>
        </nav>
    </aside>

    {{-- CONTENT WRAPPER --}}
    <div class="flex-1 ml-64">

        {{-- TOPBAR --}}
        <header class="bg-white shadow px-8 py-4 flex justify-between items-center sticky top-0 z-30">
            <h2 class="text-xl font-semibold text-gray-700">
                {{ $title ?? 'Dashboard' }}
            </h2>

            <div class="text-gray-600">
                {{ auth()->user()->name ?? 'Login' }}
            </div>
        </header>

        {{-- MAIN CONTENT --}}
        <main class="px-10 py-8">
            @yield('content')
        </main>

    </div>

</body>
</html>
