<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;

class SopirController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function show(Sopir $sopir)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sopir $sopir)
    {
        //
    }
}
