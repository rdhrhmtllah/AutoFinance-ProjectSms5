@extends('layouts.master')

@section('content')

<!-- Page Title -->
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">
        Dashboard
    </h1>
    <p class="text-gray-500 text-sm">
        Ringkasan keuangan Anda saat ini
    </p>
</div>

<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <!-- Pemasukan -->
    <div class="bg-white rounded-xl shadow p-6">
        <p class="text-sm text-gray-500">Total Pemasukan</p>
        <h2 class="text-2xl font-bold text-green-600 mt-2">
            Rp 5.000.000
        </h2>
        <p class="text-xs text-gray-400 mt-1">
            Bulan ini
        </p>
    </div>

    <!-- Pengeluaran -->
    <div class="bg-white rounded-xl shadow p-6">
        <p class="text-sm text-gray-500">Total Pengeluaran</p>
        <h2 class="text-2xl font-bold text-red-500 mt-2">
            Rp 3.200.000
        </h2>
        <p class="text-xs text-gray-400 mt-1">
            Bulan ini
        </p>
    </div>

    <!-- Saldo -->
    <div class="bg-white rounded-xl shadow p-6">
        <p class="text-sm text-gray-500">Saldo</p>
        <h2 class="text-2xl font-bold text-indigo-600 mt-2">
            Rp 1.800.000
        </h2>
        <p class="text-xs text-gray-400 mt-1">
            Tersisa
        </p>
    </div>

    <!-- Analisis AI -->
    <div class="bg-indigo-600 rounded-xl shadow p-6 text-white">
        <p class="text-sm opacity-90">Analisis AI</p>
        <p class="mt-3 text-sm leading-relaxed">
            Pengeluaran makan meningkat 20%.
            Pertimbangkan mengatur budget harian.
        </p>
    </div>

</div>

<!-- Grafik / Info Tambahan -->
<div class="bg-white rounded-xl shadow p-6">
    <h3 class="text-lg font-semibold text-gray-700 mb-4">
        Grafik Keuangan (Dummy)
    </h3>

    <div class="h-48 flex items-center justify-center text-gray-400">
        Grafik pemasukan & pengeluaran akan ditampilkan di sini
    </div>
</div>

@endsection
