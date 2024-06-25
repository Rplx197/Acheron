<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use App\Models\Pelanggan;

class KaryawanController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with("pelanggan")
            ->whereIn('status_pesanan', ['Proses', 'Done'])
            ->get();
        $pelanggan = Pelanggan::all();
        return view('karyawan', ['pesanan' => $pesanan, 'pelanggan' => $pelanggan]);
    }
}
