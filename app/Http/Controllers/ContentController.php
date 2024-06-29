<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::all();
        return view('content', ['content' => $content]);
    }

    public function edit(string $id)
    {
        return view('content.edit',[
            'data' => Content::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $content = Content::where('id', $id)->firstOrFail();
        if($content){
            $rules = [
                'judul' => 'required|max:20',
            'desc1' => 'required|max:50',
            'desc2' => 'required|max:50',
            'desc3' => 'required|max:50',
            'harga' => 'required|max:20',
            'icon' => 'required|max:100',
            ];

            $validatedData = $request->validate($rules);

            Content::where('id', $id)->update($validatedData);

            return redirect('content')->with('success', 'content has been updated!');
        }
        else{
            return 'content Not Faund';
        }
    }
}
