@extends('layouts.app')

@section('content')

<div class="min-h-screen flex flex-col items-center justify-center">

    <h1 class="text-4xl font-bold text-blue-600 mb-4">
        About
    </h1>

    <p class="text-lg text-gray-700 mb-6 text-center max-w-xl">
        Aplikasi Manajemen Stok Gudang adalah sistem yang digunakan untuk mengelola data barang,
        memantau stok, serta membantu proses keluar masuk barang dengan lebih efisien.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-md text-center w-96">
        <h2 class="text-xl font-semibold mb-2">Tujuan Aplikasi</h2>
        <p class="text-gray-600">
            Mempermudah pengelolaan stok barang dan meningkatkan efisiensi kerja di gudang.
        </p>
    </div>

</div>

@endsection