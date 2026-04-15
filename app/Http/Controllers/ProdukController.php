<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'tepung'],
            ['id' => 2, 'produk' => 'mentega'],
            ['id' => 3, 'produk' => 'gula']
        ];

        return view('pages.product', compact('data'));
    }
}
