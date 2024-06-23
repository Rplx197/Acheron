<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPembayaran;
use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi_pembayaran = TransaksiPembayaran::with("pesanan")->get();
        $pesanan = Pesanan::all();
        return view('transaksi_pembayaran', ['transaksi_pembayaran' => $transaksi_pembayaran, 'pesanan' => $pesanan] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi_pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pesanan' => 'required|max:20',
            'metode' => 'required|max:20',
            'total' => 'required|max:20',
            'tanggal_pembayaran' => 'required|max:20',
        ]);
        TransaksiPembayaran::create($validatedData);

        return redirect('transaksi_pembayaran')->with('success', 'New Transaksi Pembayaran has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('transaksi_pembayaran.edit',[
            'data' => TransaksiPembayaran::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi_pembayaran = TransaksiPembayaran::where('id', $id)->firstOrFail();
        if($transaksi_pembayaran){
            $rules = [
            'id_pesanan' => 'required|max:20',
            'metode' => 'required|max:20',
            'total' => 'required|max:20',
            'tanggal_pembayaran' => 'required|max:20',
            ];

            $validatedData = $request->validate($rules);

            TransaksiPembayaran::where('id', $id)->update($validatedData);

            return redirect('transaksi_pembayaran')->with('success', 'transaksi pemabayaran has been updated!');
        }
        else{
            return 'transaksi_pembayaran Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TransaksiPembayaran::destroy($id);
        return redirect('transaksi_pembayaran')->with('success', 'transaksi pemabayaran has been deleted!');
    }
}
