@extends('layouts.main')

@section('content')
<h1 class="mb-5">Semua SK</h1>

@foreach ($surats as $surat)
<article class="text-center">
    <p>{{strtoupper($surat->judul)}}</p>
    <p>NOMOR : {{strtoupper($surat->nomor)}}</p>
    <p>TENTANG</p>
    <p>{{strtoupper($surat->tentang)}}</p>

    @foreach ($surat->kontens as $konten)
    <p>{{strtoupper($konten->judul_konten)}}</p>

    @foreach ($konten->subkontens as $subkonten)
    <div class="row">
        <div class="col-md-3 text-start">
            <p>{{strtoupper($subkonten->judul_subkonten)}}</p>
        </div>
        <div class="col-md-1">
            <p>:</p>
        </div>
        <div class="col-md-8 text-start">
            {!!$subkonten->subkonten!!}
        </div>
    </div>
    @endforeach

    @endforeach
</article>
@endforeach

@endsection
