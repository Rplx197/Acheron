<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::with("pelanggan")->get();
        $pelanggan = Pelanggan::all();
        return view('pesanan', ['pesanan' => $pesanan, 'pelanggan' => $pelanggan] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|max:20',
            'tanggal_penerimaan' => 'required|max:50',
            'tanggal_pengambilan' => 'required|max:20',
            'status_pesanan' => 'required|max:20',
            'catatan' => 'required|max:100',
        ]);
        Pesanan::create($validatedData);

        return redirect('pesanan')->with('success', 'New Pesanan has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pesanan.edit',[
            'data' => Pesanan::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::where('id', $id)->firstOrFail();
        if($pesanan){
            $rules = [
            'id_pelanggan' => 'required|max:20',
            'tanggal_penerimaan' => 'required|max:50',
            'tanggal_pengambilan' => 'required|max:20',
            'status_pesanan' => 'required|max:20',
            'catatan' => 'required|max:100',
            ];

            $validatedData = $request->validate($rules);

            Pesanan::where('id', $id)->update($validatedData);

            return redirect('pesanan')->with('success', 'pesanan has been updated!');
        }
        else{
            return 'pesanan Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pesanan::destroy($id);
        return redirect('pesanan')->with('success', 'pesanan has been deleted!');
    }
}
