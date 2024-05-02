<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function table()
    {
        $kode_produk = ["BRG001", "BRG002"];
        $nama_produk = ["Pena", "Buku"];
        $jenis_produk = ["Alat tulis", "Alat tulis"];
        $harga_produk = [20000, 15000];

        $n = 0;

        return view('produk', compact('kode_produk', 'nama_produk', 'jenis_produk', 'harga_produk', 'n'));
    }

    public function create()
    {

        $jenis_produk = ["Alat tulis", "Elektronik", "Sembako"];
        $n = 0;

        return view('tambah', compact('jenis_produk', 'n'));
    }
}
