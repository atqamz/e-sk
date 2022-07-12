<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Http\Requests\StoreKontenRequest;
use App\Http\Requests\UpdateKontenRequest;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreKontenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKontenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function show(Konten $konten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function edit(Konten $konten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKontenRequest  $request
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKontenRequest $request, Konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konten  $konten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konten $konten)
    {
        //
    }
}
