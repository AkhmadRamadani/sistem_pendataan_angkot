<?php

namespace App\Http\Controllers;

use App\Models\Angkot;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class AngkotController extends HomeController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.angkot', ['angkots' => $angkots]);
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
            'no_angkot' => 'required',
            'no_pol' => 'required',
            'merk' => 'required',
        ]);

        $angkot = new Angkot;
        $angkot->no_angkot = $request->get("no_angkot");
        $angkot->no_pol = $request->get("no_pol");
        $angkot->merk = $request->get("merk");

        $angkot->save();
        
        return redirect()->route('angkot.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angkot  $angkot
     * @return \Illuminate\Http\Response
     */
    public function show($angkot)
    {
        //
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
        $angkot->no_angkot = $request->no_angkot_update;
        $angkot->no_pol = $request->no_pol_update;
        $angkot->merk = $request->merk_update;
        
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
