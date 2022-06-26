<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;
use App\Models\Trayek;

class TrayekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trayeks = Trayek::paginate(10);
        return view('pages.trayek', ['trayeks' => $trayeks]);
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
            'nama_trayek' => 'required',
            'warna_angkot' => 'required',
            'jalur_trayek' => 'required',
        ]);
        
        $trayek = new Trayek;
        $trayek->nama_trayek = $request->nama_trayek;
        $trayek->jalur_trayek = $request->jalur_trayek;
        $trayek->warna_angkot = $request->warna_angkot;


        $trayek->save();

        return redirect()->route('trayek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $sopirAll = Sopir::all();
        $trayek = Trayek::where('id_trayek', $id)->first();
        return view('pages.trayek_detail', ['trayek' => $trayek, 'sopirAll' => $sopirAll]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trayek  $trayek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trayek $trayek)
    {
        $trayek->nama_trayek = $request->nama_trayek_update;
        $trayek->jalur_trayek = $request->jalur_trayek_update;
        $trayek->warna_angkot = $request->warna_angkot_update;


        $trayek->save();

        return redirect()->route('trayek.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Trayek  $trayek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trayek $trayek)
    {

        $trayek->delete();

        return redirect()->route('trayek.index');
    }
}
