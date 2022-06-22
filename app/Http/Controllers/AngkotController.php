<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angkot;
use App\Models\Trayek;
use App\Models\Sopir;

class AngkotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angkots = Angkot::with('trayek')->get();
        $trayeks = Trayek::all();
        $sopirs = Sopir::leftJoin('angkots', function ($join)
        {
            $join->on('sopirs.id_sopir' , '=', 'angkots.id_sopir');
        })->whereNull('angkots.id_sopir')->get(['sopirs.id_sopir',
        'sopirs.nama',]);
        return view('pages.angkot', ['angkots' => $angkots, 'trayeks' => $trayeks, 'sopirs' => $sopirs]); 
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
            'no_pol' => 'required',
            'nama_trayek' => 'required',
            'nama_pemilik' => 'required',
            'merk' => 'required',
            'foto_stnk' => 'required', 
            'foto_bpkb' => 'required', 
        ]);

        $image_name_stnk = "";
        if ($request->has('foto_stnk')) {
            $image_name_stnk = $request->foto_stnk->store('foto_stnk', 'public');
        }

        $image_name_bpkb = "";
        if ($request->has('foto_bpkb')) {
            $image_name_bpkb = $request->foto_bpkb->store('foto_bpkb', 'public');
        }

        $last_no_angkot = Angkot::where('id_trayek', $request->get('nama_trayek'))->orderBy('no_angkot', 'desc')->get();

        $angkot = new Angkot;
        $angkot->no_angkot = (count($last_no_angkot) + 1);
        $angkot->no_pol = $request->no_pol;
        $angkot->merk = $request->merk;
        $angkot->id_trayek = $request->nama_trayek;
        $angkot->id_sopir = $request->nama_pemilik;
        $angkot->foto_stnk = $image_name_stnk;
        $angkot->foto_bpkb = $image_name_bpkb;
        $angkot->save();
        
        return redirect()->route('angkot.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
