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
                                    <label for="nama_mapel">Nama Ekstrakulikuler</label>
                                    <input type="text" id="nama_ekstrakulikuler" name="nama_ekstrakulikuler"
                                        class="form-control @error('nama_ekstrakulikuler') is-invalid @enderror"
                                        placeholder="{{ __('Nama Ekstrakulikuler') }}"
                                        value="{{ $ekstrakulikuler->nama_ekstrakulikuler }}">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select id="jurusan" name="jurusan_id"
                                        class="select2bs4 form-control @error('jurusan_id') is-invalid @enderror">
                                        <option value="">-- Pilih Jurusan --</option>
                                        @foreach ($jurusan as $produk)
                                            <option value="{{ $produk->id }}"
                                                @if ($ekstrakulikuler->jurusan_id == $produk->id) selected @endif>
                                                {{ $produk->nama_jurusan }}
                                            </option>
                                        @endforeach
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
