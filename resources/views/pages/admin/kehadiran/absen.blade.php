@extends('layouts.main')
@section('title', 'List Jadwal')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
@endpush

@section('content')
    <section class="section custom-section">
        <div class="section-body">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header font-weight-bold">{{ __('Jadwal Absensi') }}</div>
                    <div class="card-body">
                        <table class="table table-sm table-borderless ">
                            <tr>
                                <td>Kelas</td>
                                <td class="text-left font-weight-bold">{{ $jadwal->kelas->nama_kelas }}</td>
                                <td>Hari</td>
                                <td class="text-left font-weight-bold">{{ $jadwal->hari }}</td>
                            </tr>
                            <tr>
                                <td>Ekstrakulikuler</td>
                                <td class="text-left font-weight-bold">{{ $jadwal->ekstrakulikuler->nama_ekstrakulikuler }}
                                </td>
                                <td>Waktu</td>
                                <td class="text-left font-weight-bold">{{ $jadwal->dari_jam }} s/d {{ $jadwal->sampai_jam }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <div class="card-header font-weight-bold">{{ __('Absensi') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('absensi.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <table id="table-data" class="table table-responsive-lg table-stripped">
                                <thead>
                                    <tr class="text-center">
                                        <th>NO</th>
                                        <th>NIS</th>
                                        <th>TELP</th>
                                        <th>NAMA</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                        $no1 = 0;
                                        $no2 = 0;
                                        $no3 = 0;
                                        $no4 = 0;
                                        $no5 = 0;
                                        $no6 = 0;
                                        $no7 = 0;
                                        $no8 = 0;
                                        $no9 = 0;
                                    @endphp
                                    @foreach ($siswa as $siswas)
                                        <tr>
                                            <td class="text-center col-md-1">{{ $no++ }}</td>
                                            <td class="text-center col-md-2">
                                                <input type="text" class="form-control text-center"
                                                    name="input[{{ $no1++ }}][nis]" value="{{ $siswas->nis }}"
                                                    style="border: none; outline: none;" readonly />
                                            </td>
                                            <td class="text-center col-md-2">
                                                <input type="text"class="form-control text-center"
                                                    name="input[{{ $no2++ }}][telp]" value="{{ $siswas->telp }}"
                                                    style="border: none; outline: none;" readonly />
                                            </td>
                                            <td class="text-center col-md-4">
                                                <input type="text"class="form-control"
                                                    name="input[{{ $no3++ }}][nama]" value="{{ $siswas->nama }}"
                                                    style="border: none; outline: none;" readonly />
                                            </td>
                                            <td class="text-center col-md-4">
                                                <select id="keterangan" class="form-control w-100"
                                                    name="input[{{ $no4++ }}][keterangan]" required>
                                                    <option selected>Pilih</option>
                                                    <option value="Hadir">Hadir</option>
                                                    <option value="Ijin">Ijin</option>
                                                    <option value="Sakit">Sakit</option>
                                                    <option value="Alpa">Alpa</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row d-flex justify-content-between">
                                <p></p>
                                <button type="submit" class="btn btn-primary m-3">Simpan</button>
                            </div>
                            <input type="hidden" name="jadwal_id" value="{{ $jadwal->id }}" />
                            <input type="hidden" name="ekstrakulikuler_id" value="{{ $jadwal->ekstrakulikuler_id }}" />
                            <input type="hidden" name="hari" value="{{ $jadwal->hari }}" />
                            <input type="hidden" name="dari_jam" value="{{ $jadwal->dari_jam }}" />
                            <input type="hidden" name="sampai_jam" value="{{ $jadwal->sampai_jam }}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
