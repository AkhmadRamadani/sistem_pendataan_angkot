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
        $angkots = Angkot::with('trayek')->paginate(10);
        $trayeks = Trayek::all();
        $sopirs = Sopir::leftJoin('angkots', function ($join)
        {
            $join->on('sopirs.id_sopir' , '=', 'angkots.id_sopir');
        })->whereNull('angkots.id_sopir')->get(['sopirs.id_sopir',
        'sopirs.nama',]);
        $sopirAll = Sopir::all();
        return view('pages.angkot', ['angkots' => $angkots, 'trayeks' => $trayeks, 'sopirs' => $sopirs, 'sopirAll' => $sopirAll]); 
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
     * @param  \App\Models\Angkot  $angkot
     * @return \Illuminate\Http\Response
     */
    public function show(Angkot $angkot)
    {
        $angkot = Angkot::where('id_angkot', $angkot->id_angkot)->first();
        return view('pages.angkot_detail', ['angkot' => $angkot]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angkot  $angkot
     * @return \Illuminate\Http\Response
     */
    public function edit(Angkot $angkot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Angkot  $angkot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angkot $angkot)
    {
        //$angkot->no_angkot = $request->no_angkot_update;
        $angkot->no_pol = $request->no_pol_update;
        $angkot->merk = $request->merk_update;
        $angkot->id_trayek = $request->get('nama_trayek_update'.$angkot->id_angkot);
        $angkot->id_sopir = $request->get('nama_pemilik_update'.$angkot->id_angkot);
        
        $image_name_stnk = $angkot->foto_stnk;
        if ($request->has('foto_stnk')) {
            $image_name_stnk = $request->foto_stnk->store('foto_stnk', 'public');
        }

        $image_name_bpkb = $angkot->foto_bpkb;
        if ($request->has('foto_bpkb')) {
            $image_name_bpkb = $request->foto_bpkb->store('foto_bpkb', 'public');
        }

        $last_no_angkot = Angkot::where('id_trayek', $request->get('nama_trayek'))->orderBy('no_angkot', 'desc')->get();

        $angkot->foto_stnk = $image_name_stnk;
        $angkot->foto_bpkb = $image_name_bpkb;

        $angkot->save();
        
        return redirect()->route('angkot.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angkot  $angkot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Angkot $angkot)
    {
        $angkot->delete();
        
        return redirect()->route('angkot.index');
    }
}
