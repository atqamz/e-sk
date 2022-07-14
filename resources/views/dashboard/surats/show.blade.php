{{-- <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="me-auto">
        <a href="/dashboard/surats" class="badge bg-info"><span data-feather="arrow-left"></span></a>
        <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
        <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
    </div>
    <h1>{{$surat->nomor}}</h1>
</div> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>{{$surat->nomor}}</title>

    <style>
        body {
            font-family: 'Times New Roman', Times, serif !important;
            margin: 0 !important;
            padding: 0 !important;
            text-align: justify;
        }

        table {
            page-break-after: auto
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto
        }

        td {
            page-break-inside: avoid;
            page-break-after: auto
        }

        thead {
            display: table-header-group;
        }

        tfoot {
            display: table-footer-group;
        }
    </style>
</head>

<body>
    <table class="report-container">
        <thead>
            <tr>
                <th class="report-header">
                </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td class="report-footer">
                </td>
            </tr>
        </tfoot>
        <tbody class="report-content">
            <tr>
                <td>
                    <div class="row w-100">
                        <div class="col-12">
                            <img src="{{asset('img/header.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 text-center">
                            <p>{{$surat->judul}}<br />NOMOR {{$surat->nomor}}</p>
                        </div>
                        <div class="col-12 text-center">
                            <p>TENTANG</p>
                        </div>
                        <div class="col-12 text-center">
                            <p>{{$surat->tentang}}</p>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    @foreach ($surat->kontens as $konten)
                    <div class="row w-100">
                        <div class="col-12 text-center">
                            <p>{{$konten->judul_konten}}</p>
                        </div>
                        @foreach ($konten->subkontens as $subkonten)
                        <div class="row w-100">
                            <div class="col-2 text-start d-flex justify-content-between">
                                <p>{{$subkonten->judul_subkonten}}</p>
                                <p>:</p>
                            </div>
                            <div class="col-10">
                                {!!$subkonten->subkonten!!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row w-100">
                        <div class="col-5 text-center">
                        </div>
                        <div class="col-7 text-start">
                            <p>Ditetapkan di {{$surat->kota}}<br />Pada tanggal {{$tanggal}}<br />DIREKTUR POLITEKNIK
                                ELEKTRONIKA NEGERI SURABAYA,</p>

                            <br />
                            <br />

                            <p>{{strtoupper($surat->user->nama)}}<br />NIP. {{$surat->user->nip}}</p>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
