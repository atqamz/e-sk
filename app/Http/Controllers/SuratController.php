<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Konten;
use App\Models\Subkonten;
use App\Models\User;
use App\Models\UserTerkait;
use App\Http\Requests\StoreSuratRequest;
use App\Http\Requests\UpdateSuratRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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

        $surats = Surat::with(['kontens'])->whereHas('userTerkaits', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->latest()->get();
        if (auth()->user()->role == "admin") {
            $surats = Surat::with(['kontens'])->latest()->get();
        }


        return view('dashboard.surats.index', [
            "title" => "Surat",
            "surats" => $surats
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
        $validatedDataSurat = $request->validate([
            'nomor' => 'required|unique:surats',
            'judul' => 'required',
            'tentang' => 'required',
            'kota' => 'required',
            'tanggal' => 'required',
            'user_id' => 'required',
        ]);

        $surat = Surat::create($validatedDataSurat);

        $x = 0;
        foreach ($request->judul_konten as $key => $konten) {
            if ($konten == null) continue;
            $kontenData = Konten::create([
                'surat_id' => $surat->id,
                'judul_konten' => $konten
            ]);

            for ($i = 0; $i < $request->jlh_subkonten[$key]; $i++) {
                $subkontenData = Subkonten::create([
                    'konten_id' => $kontenData->id,
                    'judul_subkonten' => $request->judul_subkonten[$x],
                    'subkonten' => $request->subkonten[$x]
                ]);
                $x++;
            }
        }

        foreach ($request->user as $user) {
            UserTerkait::create([
                'surat_id' => $surat->id,
                'user_id' => $user
            ]);
        }

        return redirect('/dashboard/surats')->with('success', 'Surat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        $tanggal = Carbon::parse($surat->tanggal)->locale('id_ID')->isoFormat('D MMMM Y');

        return view('dashboard.surats.show', [
            "title" => "Surat",
            "surat" => $surat,
            "tanggal" => $tanggal
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
