@extends('dashboard.layouts.main')

@section('content')
<form action="/dashboard/surats" method="POST">
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
                <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor"
                    autofocus value="{{old('nomor')}}">
                @error('nomor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                    value="{{old('judul')}}">
                @error('judul')
                <div class=" invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="tentang" class="form-label">Tentang</label>
                <input type="text" class="form-control @error('tentang') is-invalid @enderror" id="tentang"
                    name="tentang" value="{{old('tentang')}}">
                @error('tentang')
                <div class=" invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota"
                    value="{{old('kota')}}">
                @error('kota')
                <div class=" invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                    name="tanggal" value="{{old('tanggal')}}">
                @error('tanggal')
                <div class=" invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="" class="form-label">TTD</label>
                <select class="form-select @error('user_id') is-invalid @enderror" name="user_id">
                    <option selected>Pilih User</option>
                    @foreach ($users as $user)
                    @if ($user->nama == 'admin')@continue @endif
                    @if(old('user_id') == $user->id)
                    <option value=" {{$user->id}}" selected>{{ $user->nama }}</option>
                    @else
                    <option value=" {{$user->id}}">{{ $user->nama }}</option>
                    @endif
                    @endforeach
                </select>
                @error('user_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
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
                            <input type="text" class="form-control" id="judul_konten" name="judul_konten[]">
                            <input type="hidden" name="jlh_subkonten[]" value="1">
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="subkonten-list">
                            <div class="row mb-2">
                                <div class="col-lg-2">
                                    <label for="judul_subkonten" class="form-label">Judul Subkonten</label>
                                    <input type="text" class="form-control" id="judul_subkonten"
                                        name="judul_subkonten[]">
                                </div>
                                <div class="col-lg-9">
                                    <label for="subkonten" class="form-label">Isi</label>
                                    <input type="hidden" id="subkonten-0" name="subkonten[]">
                                    <trix-editor input="subkonten-0"></trix-editor>
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
                            <option value="{{$user->id}}">{{ $user->nama }}</option>
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


<script type="text/javascript">
    let userList = document.querySelector(".user-list");
    let tambahButton = document.querySelector(".tambahUser");
    tambahButton.addEventListener("click", function (e) {
        tambahUser();
        e.preventDefault();
    });

    function tambahUser() {
        let data = `
                <div class="row">
                    <div class="col-10 mb-3">
                        <select class="form-select" name="user[]">
                            <option selected>Pilih User</option>
                            @foreach ($users as $user)
                            @if ($user->nama == 'admin')@continue @endif
                            <option value="{{$user->id}}">{{ $user->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="btn btn-danger hapusUser w-100">-</a>
                    </div>
                </div>
                `;

        userList.insertAdjacentHTML("beforeend", data);
    }

    userList.addEventListener("click", function (e) {
        if (e.target.classList.contains("hapusUser")) {
            e.target.parentElement.parentElement.remove();
            e.preventDefault();
        }
    });

    let kontenList = document.querySelector(".konten-list");
    let tambahKontenButton = document.querySelector(".tambahKonten");

    let subkontenLists = document.querySelectorAll(`.subkonten-list`);
    let tambahSubkontenButtons = document.querySelectorAll(`.tambahSubkonten`);
    let idKonten = 1;
    let idSubkonten = 1;

    tambahKontenButton.addEventListener("click", function (e) {
        tambahKonten();
        e.preventDefault();
    });

    function tambahKonten() {
        let data = `
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex">
                        <h4>Konten</h4>
                        <a href="#" class="btn btn-danger hapusKonten ms-auto">-</a>
                    </div>

                    <div>
                        <label for="judul_konten" class="form-label">Judul Konten</label>
                        <input type="text" class="form-control" id="judul_konten" name="judul_konten[]">
                        <input type="hidden" name="jlh_subkonten[]" value="1">
                    </div>
                </div>

                <div class="card-body">
                    <div class="subkonten-list">
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="judul_subkonten" class="form-label">Judul Subkonten</label>
                                <input type="text" class="form-control" id="judul_subkonten" name="judul_subkonten[]">
                            </div>
                            <div class="col-lg-9">
                                <label for="subkonten" class="form-label">Isi</label>
                                <input type="hidden" id="subkonten-${idSubkonten}" name="subkonten[]">
                                <trix-editor input="subkonten-${idSubkonten}"></trix-editor>
                            </div>

                            <div class="col-lg-1 text-end">
                                <a href="#" class="btn btn-primary tambahSubkonten">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;

        idKonten++;
        idSubkonten++;

        kontenList.insertAdjacentHTML("beforeend", data);

        subkontenLists = document.querySelectorAll(`.subkonten-list`);
        tambahSubkontenButtons = document.querySelectorAll(`.tambahSubkonten`);

        Array.from(tambahSubkontenButtons).forEach((element, index) => {
            element.removeEventListener("click", handleTambahSubkonten, true);
            element.indexParams = index;
            element.addEventListener("click", handleTambahSubkonten);
        });

        Array.from(subkontenLists).forEach((element, index) => {
            element.indexParams = index;
            element.addEventListener("click", handleHapusSubkonten);
        });
    }

    kontenList.addEventListener("click", function (e) {
        if (e.target.classList.contains("hapusKonten")) {
            e.target.parentElement.parentElement.parentElement.remove();
        }

        e.preventDefault();
    });

    Array.from(tambahSubkontenButtons).forEach((element, index) => {
        element.indexParams = index;
        element.addEventListener("click", handleTambahSubkonten);
    });

    Array.from(subkontenLists).forEach((element, index) => {
        element.indexParams = index;
        element.addEventListener("click", handleHapusSubkonten);
    });

    function handleTambahSubkonten(e) {
        let data = `
                    <div class="row mb-2">
                        <div class="col-lg-2">
                            <label for="judul_konten" class="form-label">Judul Subkonten</label>
                            <input type="text" class="form-control" id="judul_subkonten" name="judul_subkonten[]">
                        </div>
                        <div class="col-lg-9">
                            <label for="subkonten" class="form-label">Isi</label>
                            <input type="hidden" id="subkonten-${idSubkonten}" name="subkonten[]">
                            <trix-editor input="subkonten-${idSubkonten}"></trix-editor>
                        </div>

                        <div class="col-lg-1 text-end">
                            <a href="#" class="btn btn-danger hapusSubkonten">-</a>
                        </div>
                    </div>
                    `;

        let jlh_subkonten = document.querySelectorAll(`[name="jlh_subkonten[]"]`);
        jlh_subkonten[e.target.indexParams].value = parseInt(jlh_subkonten[e.target.indexParams].value) + 1;

        e.target.parentElement.parentElement.parentElement.insertAdjacentHTML(
            "beforeend",
            data
        );

        idSubkonten++;

        e.preventDefault();
    }

    function handleHapusSubkonten(e) {
        if (e.target.classList.contains("hapusSubkonten")) {
            let jlh_subkonten = document.querySelectorAll(`[name="jlh_subkonten[]"]`);
            jlh_subkonten[e.target.indexParams].value = parseInt(jlh_subkonten[e.target.indexParams].value) - 1;

            e.target.parentElement.parentElement.remove();
        }
    }
</script>
@endsection
