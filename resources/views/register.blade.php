@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-80">

        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">
            Register
        </h1>

        <form>
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Nama</label>
                <input type="text" placeholder="Masukkan nama"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" placeholder="Masukkan email"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" placeholder="Masukkan password"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Daftar
            </button>
        </form>

        <p class="text-sm text-center mt-4">
            Sudah punya akun?
            <a href="/login" class="text-blue-600 hover:underline">Login</a>
        </p>

    </div>

</div>

@endsection