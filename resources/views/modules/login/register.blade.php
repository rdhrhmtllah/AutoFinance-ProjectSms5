@extends('layouts.master')

@section('content')
<div class="min-h-screen flex items-center justify-center 
            bg-gradient-to-br from-indigo-100 via-purple-100 to-blue-100">

    <div class="bg-white shadow-2xl rounded-2xl w-full max-w-md p-8">

        <!-- Header -->
        <div class="text-center mb-8">
            <img src="{{ asset('images/budget.png') }}"
                 alt="AutoFinanceAi Logo"
                 class="w-14 h-14 mx-auto mb-3 object-contain">

            <h1 class="text-3xl font-extrabold text-indigo-600">
                AutoFinance<span class="text-blue-500">Ai</span>
            </h1>
            <p class="text-gray-500 text-sm mt-2">
                Buat akun untuk mulai mengelola keuanganmu
            </p>
        </div>

        <!-- Form (UI Only) -->
        <form class="space-y-5">

            <!-- Nama -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nama Lengkap
                </label>
                <input type="text" placeholder="Nama lengkap"
                    class="w-full px-4 py-2.5 border rounded-lg
                           focus:outline-none focus:ring-2
                           focus:ring-indigo-500">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input type="email" placeholder="email@example.com"
                    class="w-full px-4 py-2.5 border rounded-lg
                           focus:outline-none focus:ring-2
                           focus:ring-indigo-500">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input type="password" placeholder="Minimal 8 karakter"
                    class="w-full px-4 py-2.5 border rounded-lg
                           focus:outline-none focus:ring-2
                           focus:ring-indigo-500">
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Konfirmasi Password
                </label>
                <input type="password" placeholder="Ulangi password"
                    class="w-full px-4 py-2.5 border rounded-lg
                           focus:outline-none focus:ring-2
                           focus:ring-indigo-500">
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2.5 rounded-lg
                       font-semibold hover:bg-indigo-700
                       transition shadow-md hover:shadow-lg">
                Register
            </button>

        </form>

        <!-- Footer -->
        <p class="text-center text-sm text-gray-600 mt-8">
            Sudah punya akun?
            <a href="/login"
               class="text-indigo-600 font-semibold hover:underline">
                Login
            </a>
        </p>

    </div>

</div>
@endsection
