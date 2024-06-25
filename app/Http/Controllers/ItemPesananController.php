<?php

namespace App\Http\Controllers;

use App\Models\ItemPesanan;
use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item_pesanan = ItemPesanan::with("pesanan")->get();
        $pesanan = Pesanan::all();
        return view('item_pesanan', ['item_pesanan' => $item_pesanan, 'pesanan' => $pesanan] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item_pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pesanan' => 'required|max:20',
            'jenis_layanan' => 'required|max:50',
            'jumlah_item' => 'required|max:20',
            'harga_per_item' => 'required|max:20',
        ]);
        ItemPesanan::create($validatedData);

        return redirect('item_pesanan')->with('success', 'New Item Pesanan has been added!');
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
        return view('item_pesanan.edit',[
            'data' => ItemPesanan::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item_pesanan = ItemPesanan::where('id', $id)->firstOrFail();
        if($item_pesanan){
            $rules = [
            'id_pesanan' => 'required|max:20',
            'jenis_layanan' => 'required|max:50',
            'jumlah_item' => 'required|max:20',
            'harga_per_item' => 'required|max:20',
            ];

            $validatedData = $request->validate($rules);

            ItemPesanan::where('id', $id)->update($validatedData);

            return redirect('item_pesanan')->with('success', 'item pesanan has been updated!');
        }
        else{
            return 'item_pesanan Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ItemPesanan::destroy($id);
        return redirect('item_pesanan')->with('success', 'item pesanan has been deleted!');
    }

    public function search(Request $request)
    {
        $data = ItemPesanan::where('id_pesanan', 'LIKE', '%'.$request->search.'%')->get();
        $pesanan = Pesanan::all();
        return view('item_pesanan', ['item_pesanan' => $data, 'pesanan' => $pesanan]);
    }
    
}
