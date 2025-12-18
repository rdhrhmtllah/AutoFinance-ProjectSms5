@extends('layouts.master')


@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 via-purple-100 to-blue-100">

    <div class="bg-white shadow-xl rounded-xl w-full max-w-md p-8">
        
        <!-- Header -->

        <!-- Logo -->
        <img src="{{ asset('images/budget.png') }}"
            alt="Logo AutoFinanceAi"
            class="mx-auto mb-3 w-16 h-16 object-contain">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-indigo-600">
                AutoFinance<span class="text-blue-500">Ai</span>
            </h1>
            <p class="text-gray-500 text-sm mt-1">
                Kelola keuanganmu dengan cerdas
            </p>
        </div>

        <!-- Form -->
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                <input type="email"
                    placeholder="email@example.com"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input type="password"
                    placeholder="********"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>

            <a href="/dashboard" 
                    class="w-full block text-center bg-indigo-600 text-white
                    py-2.5 rounded-lg font-semibold
                    hover:bg-indigo-700 transition shadow-md">
                Login
            </a>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Belum punya akun?
            <a href="/register" class="text-indigo-600 hover:underline">Register</a>

        </p>

    </div>

</div>




@endsection
