<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\Sopir;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanans = Perjalanan::all();
        $sopirs = Sopir::join('angkots', function ($join) {
            $join->on('sopirs.id_sopir', '=', 'angkots.id_sopir');
        })->whereNotNull('angkots.id_sopir')->where('sopirs.status', 'active')->get([
            'sopirs.id_sopir',
            'sopirs.nama',
        ]);
        return view('pages.perjalanan', ['perjalanans' => $perjalanans, 'sopirs' => $sopirs]);
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
            'jumlah_penumpang' => 'required',
            'nama_sopir' => 'required',
        ]);

        $perjalanan = new Perjalanan;
        $perjalanan->id_sopir = $request->nama_sopir;
        $perjalanan->jumlah_penumpang = $request->jumlah_penumpang;

        $perjalanan->save();

        return redirect()->route('perjalanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(Perjalanan $perjalanan)
    {
        return view('pages.perjalanan_detail', ['perjalanan' => $perjalanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perjalanan $perjalanan)
    {
        $perjalanan->id_sopir = $request->get('nama_sopir'.$perjalanan->id_perjalanan);
        $perjalanan->jumlah_penumpang = $request->jumlah_penumpang_update;

        $perjalanan->save();

        return redirect()->route('perjalanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perjalanan $perjalanan)
    {
        
        $perjalanan->delete();

        return redirect()->route('perjalanan.index');
    }
}
