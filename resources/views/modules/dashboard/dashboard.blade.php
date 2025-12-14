@extends('layouts.master')

@section('content')

<h2 class="text-3xl font-semibold text-gray-800 mb-8">Dashboard</h2>

{{-- STATISTIC CARDS --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

    {{-- Total Pasien --}}
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-600 text-sm font-medium">Total Pasien</h3>
        <p class="text-3xl font-bold text-blue-600 mt-2">128</p>
        <span class="text-xs text-gray-400">Update hari ini</span>
    </div>

    {{-- Pasien IGD --}}
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-600 text-sm font-medium">Pasien IGD</h3>
        <p class="text-3xl font-bold text-red-500 mt-2">32</p>
        <span class="text-xs text-gray-400">Dalam penanganan</span>
    </div>

    {{-- Rawat Inap --}}
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-600 text-sm font-medium">Rawat Inap</h3>
        <p class="text-3xl font-bold text-green-600 mt-2">58</p>
        <span class="text-xs text-gray-400">Semua kamar</span>
    </div>

    {{-- Pasien Pulang --}}
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-600 text-sm font-medium">Pasien Pulang</h3>
        <p class="text-3xl font-bold text-gray-700 mt-2">38</p>
        <span class="text-xs text-gray-400">Data minggu ini</span>
    </div>
</div>

@endsection
