<!DOCTYPE html>
<html>
<head>
    <title>Stok Gudang</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 p-4 text-white flex justify-between">
    <div class="font-bold">Stok Gudang</div>

    <div class="flex gap-4">
        <a href="/home" class="hover:underline">Home</a>
        <a href="/about" class="hover:underline">About</a>
        <a href="/product" class="hover:underline">Product</a>
        <a href="/contact" class="hover:underline">Contact</a>
        <a href="/dashboard" class="hover:underline">Dashboard</a>
        <a href="/login" class="hover:underline">Login</a>
        <a href="/register" class="hover:underline">Register</a>
    </div>
</nav>

<!-- Content -->
<div class="p-6">
    @yield('content')
</div>

</body>
</html>