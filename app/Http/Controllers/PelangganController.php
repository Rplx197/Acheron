<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan', ['pelanggan' => $pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:20',
            'alamat' => 'required|max:100',
            'telepon' => 'required|max:20',
            'email' => 'required|max:20',
        ]);

        Pelanggan::create($validatedData);

        return redirect('pelanggan')->with('success', 'New Pelanggan has been added!');
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
        return view('pelanggan.edit',[
            'data' => Pelanggan::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::where('id', $id)->firstOrFail();
        if($pelanggan){
            $rules = [
                'nama' => 'required|max:20',
            'alamat' => 'required|max:100',
            'telepon' => 'required|max:20',
            'email' => 'required|max:50',
            ];

            $validatedData = $request->validate($rules);

            Pelanggan::where('id', $id)->update($validatedData);

            return redirect('pelanggan')->with('success', 'pelanggan has been updated!');
        }
        else{
            return 'pelanggan Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return redirect('pelanggan')->with('success', 'pelanggan has been deleted!');
    }

}
