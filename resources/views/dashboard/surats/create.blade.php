@extends('dashboard.layouts.main')

@section('content')
<form action="/dashboard/posts" method="POST">
    @csrf
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Buat Surat</h1>
        <div class="ms-auto">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">

            <div class="mb-2">
                <label for="nomor" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control" id="nomor" name="nomor">
                <input type="hidden" id="nomor-slug">
            </div>
            <div class="mb-2">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-2">
                <label for="tentang" class="form-label">Tentang</label>
                <input type="text" class="form-control" id="tentang" name="tentang">
            </div>
            <div class="mb-2">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota">
            </div>
            <div class="mb-5">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>

            <div class="konten-list">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="d-flex">
                            <h4>Konten</h4>
                            <a href="#" class="btn btn-primary tambahKonten ms-auto">+</a>
                        </div>

                        <div>
                            <label for="judul_konten" class="form-label">Judul Konten</label>
                            <input type="text" class="form-control" id="judul_konten" name="judul_konten">
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="subkonten-list">
                            <div class="row mb-2">
                                <div class="col-lg-2">
                                    <label for="judul_konten" class="form-label">Judul Subkonten</label>
                                    <input type="text" class="form-control" id="judul_subkonten" name="judul_subkonten">
                                </div>
                                <div class="col-lg-9">
                                    <label for="subkonten" class="form-label">Isi</label>
                                    <input type="hidden" id="subkonten" name="subkonten">
                                    <trix-editor input="subkonten"></trix-editor>
                                </div>

                                <div class="col-lg-1 text-end">
                                    <a href="#" class="btn btn-primary tambahSubkonten">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <label for="" class="form-label">User terkait</label>
            <div class="user-list">
                <div class="row">
                    <div class="col-10 mb-3">
                        <select class="form-select" name="user[]">
                            <option selected>Pilih User</option>
                            @foreach ($users as $user)
                            @if ($user->nama == 'admin')@continue @endif
                            <option value="{{$user->id}}">{{$user->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="btn btn-primary tambahUser w-100">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<script src="{{ asset('js/createSurat.js') }}">
</script>
@endsection
