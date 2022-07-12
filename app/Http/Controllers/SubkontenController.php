<?php

namespace App\Http\Controllers;

use App\Models\Subkonten;
use App\Http\Requests\StoreSubkontenRequest;
use App\Http\Requests\UpdateSubkontenRequest;

class SubkontenController extends Controller
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
     * @param  \App\Http\Requests\StoreSubkontenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubkontenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subkonten  $subkonten
     * @return \Illuminate\Http\Response
     */
    public function show(Subkonten $subkonten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subkonten  $subkonten
     * @return \Illuminate\Http\Response
     */
    public function edit(Subkonten $subkonten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubkontenRequest  $request
     * @param  \App\Models\Subkonten  $subkonten
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubkontenRequest $request, Subkonten $subkonten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subkonten  $subkonten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subkonten $subkonten)
    {
        //
    }
}
