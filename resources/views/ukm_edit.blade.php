@extends('layouts.template', ['title' => 'Edit Data Anggota'])
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="class-title">Edit Data Anggota : <b {{ strtoupper($ukm->nama) }}></b></h5>
            <form action="/ukm/{{ $ukm->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group mt-1 mb-3">
                    <label for="nama">Nama Lengkap</label>
                    <input type="input" class="form-control @error('nama') is invalid
                    @enderror"
                        id="nama" name="nama" value="{{ old('nama') ?? $ukm->nama }}" placeholder="Masukkan Nama">
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid
                    @enderror"
                        id="nim" name="nim" value="{{ old('nim') ?? $ukm->nim }}" placeholder="Masukkan Nama">
                    <span class="text-danger">{{ $errors->first('nim') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid
                    @enderror"
                        id="kelas" name="kelas" value="{{ old('kelas') ?? $ukm->kelas }}" placeholder="Masukkan Nama">
                    <span class="text-danger">{{ $errors->first('kelas') }}</span>
                </div>
                <div class="form-group mb-3">
                    <label for="generasi">Generasi</label>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                            class="form-check-input @error('generasi')is-invalid
                        @enderror"
                            id="23" name="generasi" value="23"
                            {{ old('generasi') ?? $ukm->generasi === '23' ? 'checked ' : '' }}>23
                        <label for="23" class="form-check-label"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                            class="form-check-input @error('generasi')is-invalid
                        @enderror"
                            id="24" name="generasi" value="24"
                            {{ old('generasi') ?? $ukm->generasi === '24' ? 'checked ' : '' }}>24
                        <label for="24" class="form-check-label"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                            class="form-check-input @error('generasi')is-invalid
                        @enderror"
                            id="25" name="generasi" value="25"
                            {{ old('generasi') ?? $ukm->generasi === '25' ? 'checked ' : '' }}>25
                        <label for="24" class="form-check-label"></label>
                        <span class="text-danger">{{ $errors->first('generasi') }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    @endsection
