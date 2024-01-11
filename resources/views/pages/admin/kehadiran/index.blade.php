@extends('layouts.main')
@section('title', 'List Jadwal')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
@endpush

@section('content')
<section class="section custom-section">
    <div class="section-body">
        @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $day)
            <div class="card card-default">
                <div class="card-header font-weight-bold" data-toggle="collapse" data-target="#{{ strtolower($day) }}">
                    {{__('Hari ' . $day)}}
                </div>
                <div class="card-body collapse" id="{{ strtolower($day) }}">
                    <div class="row">
                        @foreach ($jadwal as $days)
                        @if ($days->hari == $day)
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-sm table-borderless ">
                                            <tr>
                                                <td>Ekstrakulikuler</td>
                                                <td class="text-right font-weight-bold">{{$days->ekstrakulikuler_id}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kelas</td>
                                                <td class="text-right font-weight-bold">{{$days->kelas_id}}</td>
                                            </tr>
                                            <tr>
                                                <td>Waktu</td>
                                                <td class="text-right font-weight-bold">{{$days->dari_jam}} s/d {{$days->sampai_jam}}</td>
                                            </tr>
                                        </table>
                                        <a href="absensi/absen/{{$days->id}}" class="btn btn-sm btn-primary w-100 mt-1">Mulai Absensi</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>List Informasi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jadwal ID</th>
                            <th>Ekstrakulikuler ID</th>
                            <th>Hari</th>
                            <th>Nama Siswa</th>
                            <th>NIS</th>
                            <th>Telp</th>
                            <th>Keterangan</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kehadiran as $result => $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->jadwal_id }}</td>
                                <td>{{ $data->ekstrakulikuler_id }}</td>
                                <td>{{ $data->hari }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->telp }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>{{ $data->dari_jam }} s/d {{ $data->sampai_jam }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection