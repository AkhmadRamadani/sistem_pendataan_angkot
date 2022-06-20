<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class SopirController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sopirs  = Sopir::with('angkot.trayek')->get();
        return view('pages.sopir', ['sopirs' => $sopirs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto' => 'required', 
        ]);

        $image_name = "";
        if ($request->has('foto')) {
            $image_name = $request->foto->store('foto_sopir', 'public');
        }

        $sopir = new Sopir;
        $sopir->nama = $request->get("name");
        $sopir->jenis_kelamin = $request->get("jenis_kelamin");
        $sopir->alamat = $request->get("alamat");
        $sopir->status = 'inactive';
        $sopir->foto = $image_name;

        $sopir->save();
        
        return redirect()->route('sopir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function show($sopir)
    {
        $sopir = Sopir::where('id_sopir', $sopir)->with('angkot.trayek')->first();
        return view('pages.sopir_detail', ['sopir' => $sopir]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function edit(Sopir $sopir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sopir $sopir)
    {
        $sopir->nama = $request->name_update;
        $sopir->alamat = $request->alamat_update;
        $sopir->jenis_kelamin = $request->get('jenis_kelamin_update'.$sopir->id_sopir);
        $sopir->status = $request->get('status_update'.$sopir->id_sopir);
        
        $image_name = $sopir->foto;
        if ($request->has('foto_update')) {
            $image_name = $request->foto_update->store('foto_sopir', 'public');
        }

        $sopir->foto = $image_name;

        $sopir->save();
        
        return redirect()->route('sopir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sopir $sopir)
    {
        $sopir->delete();
        
        return redirect()->route('sopir.index');
    }
}
