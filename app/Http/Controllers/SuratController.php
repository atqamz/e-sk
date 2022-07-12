<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\User;
use App\Http\Requests\StoreSuratRequest;
use App\Http\Requests\UpdateSuratRequest;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $surats = Surat::with(['kontens'])->latest()->get();
        // return view('home', [
        //     "active" => "surat",
        //     "title" => "Surat",
        //     "surats" => $surats
        // ]);

        return view('dashboard.surats.index', [
            "title" => "Surat",
            "surats" => Surat::with(['kontens'])->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.surats.create', [
            "title" => "Surat",
            "users" => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        return view('dashboard.surats.show', [
            "title" => "Surat",
            "surat" => $surat->with(['kontens'])->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratRequest  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratRequest $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        //
    }
}
