@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="me-auto">
        <a href="/dashboard/surats" class="badge bg-info"><span data-feather="arrow-left"></span></a>
        <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
        <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
    </div>
    <h1>{{$surat->nomor}}</h1>
</div>
@endsection
