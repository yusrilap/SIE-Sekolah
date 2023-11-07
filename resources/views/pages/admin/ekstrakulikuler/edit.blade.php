@extends('layouts.main')
@section('title', 'Edit Mapel')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Edit Ekstrakulikuler</h4>
                            <a href="{{ route('ekstrakulikuler.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('ekstrakulikuler.update', $ekstrakulikuler->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_mapel">Nama Mapel</label>
                                    <input type="text" id="nama_ekstrakulikuler" name="nama_ekstrakulikuler"
                                        class="form-control @error('nama_ekstrakulikuler') is-invalid @enderror"
                                        placeholder="{{ __('Nama Ekstrakulikuler') }}"
                                        value="{{ $ekstrakulikuler->nama_ekstrakulikuler }}">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select id="jurusan" name="jurusan"
                                        class="select2bs4 form-control @error('jurusan') is-invalid @enderror">
                                        <option value="">-- Pilih Jurusan --</option>
                                        <option value="IPA" @if ($ekstrakulikuler->jurusan == 'IPA') selected @endif>IPA
                                        </option>
                                        <option value="IPS" @if ($ekstrakulikuler->jurusan == 'IPS') selected @endif>IPS
                                        </option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i>
                                        &nbsp; Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
