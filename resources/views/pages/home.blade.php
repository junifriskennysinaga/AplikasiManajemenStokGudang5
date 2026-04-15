@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">

    <h1 class="text-4xl font-bold text-blue-600 mb-4">
        Home
    </h1>

    <p class="text-lg text-gray-700 mb-8 text-center">
        Selamat datang di Aplikasi Manajemen Stok Gudang
    </p>

    <div class="bg-white p-6 rounded-lg shadow-md text-center w-80">
        <h2 class="text-xl font-semibold mb-3">Informasi</h2>
        <p class="text-gray-600">
            Sistem ini membantu mengelola stok barang dengan lebih mudah dan efisien.
        </p>
    </div>

    <div class="mt-6">
        <a href="/product" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Lihat Produk
        </a>
    </div>

</div>

@endsection