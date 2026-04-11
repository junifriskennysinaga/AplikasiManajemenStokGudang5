@extends('layouts.app')

@section('content')

<div class="min-h-screen">

    <h1 class="text-4xl font-bold text-blue-600 mb-6 text-center">
        Dashboard
    </h1>

    <p class="text-center text-gray-700 mb-10">
        Selamat datang di dashboard Aplikasi Manajemen Stok Gudang
    </p>

    <!-- Card Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">

        <div class="bg-white p-6 rounded-lg shadow text-center">
            <h2 class="text-lg font-semibold mb-2">Total Produk</h2>
            <p class="text-2xl font-bold text-blue-600">20</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow text-center">
            <h2 class="text-lg font-semibold mb-2">Barang Masuk</h2>
            <p class="text-2xl font-bold text-green-600">15</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow text-center">
            <h2 class="text-lg font-semibold mb-2">Barang Keluar</h2>
            <p class="text-2xl font-bold text-red-600">5</p>
        </div>

    </div>

</div>

@endsection