@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Halo, {{auth()->user()->nama}}</h1>
    <div class="ms-auto">
        <a href="/dashboard/surats/create" class="btn btn-primary">Buat Surat</a>
    </div>
</div>
<div class="table-responsive ">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal</th>
                <th scope="col-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surats as $surat)
            <tr>
                <td>{{$surat->nomor}}</td>
                <td>{{$surat->judul}}</td>
                <td>{{$surat->tanggal}}</td>
                <td>
                    <a href="/dashboard/surats/{{$surat->id}}" class="badge bg-info"><span
                            data-feather="eye"></span></a>
                    <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
