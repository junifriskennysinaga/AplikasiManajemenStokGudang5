@extends('layouts.app')

@section('content')

<div class="min-h-screen">

    <h1 class="text-4xl font-bold text-blue-600 text-center mt-10 mb-10">
        Product
    </h1>

    <div class="flex justify-center gap-10 flex-wrap">

        <!-- Produk 1 -->
        <div class="bg-white p-5 rounded-lg shadow-md text-center w-60">
            <h2 class="text-xl font-semibold mb-3">Gula</h2>
            <img src="{{ asset('images/gula.jpg') }}" class="w-40 mx-auto mb-3">
            <p class="text-gray-600">Bahan dasar untuk membuat kue.</p>
        </div>

        <!-- Produk 2 -->
        <div class="bg-white p-5 rounded-lg shadow-md text-center w-60">
            <h2 class="text-xl font-semibold mb-3">Tepung</h2>
            <img src="{{ asset('images/tepung.jpg') }}" class="w-40 mx-auto mb-3">
            <p class="text-gray-600">Digunakan untuk berbagai jenis adonan.</p>
        </div>

        <!-- Produk 3 -->
        <div class="bg-white p-5 rounded-lg shadow-md text-center w-60">
            <h2 class="text-xl font-semibold mb-3">Mentega</h2>
            <img src="{{ asset('images/mentega.jpg') }}" class="w-40 mx-auto mb-3">
            <p class="text-gray-600">Memberikan rasa gurih pada makanan.</p>
        </div>

    </div>

</div>

@endsection