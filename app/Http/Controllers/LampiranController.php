<?php

namespace App\Http\Controllers;

use App\Models\Lampiran;
use App\Http\Requests\StoreLampiranRequest;
use App\Http\Requests\UpdateLampiranRequest;

class LampiranController extends Controller
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
     * @param  \App\Http\Requests\StoreLampiranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLampiranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lampiran  $lampiran
     * @return \Illuminate\Http\Response
     */
    public function show(Lampiran $lampiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lampiran  $lampiran
     * @return \Illuminate\Http\Response
     */
    public function edit(Lampiran $lampiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLampiranRequest  $request
     * @param  \App\Models\Lampiran  $lampiran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLampiranRequest $request, Lampiran $lampiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lampiran  $lampiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lampiran $lampiran)
    {
        //
    }
}
