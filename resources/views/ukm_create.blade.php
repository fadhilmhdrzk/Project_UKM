@extends('layouts.template', ['title' => 'Tambah Data Anggota'])
@section('content')
<div class="card-body">
    <h3>Tambah Data Anggota</h3>
    <form action="/ukm/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-1 mb-3">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is invalid @enderror" id="nama" name="nama">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="nim">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim">
            @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas">
            @error('kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="generasi">Generasi</label>
            <select class="form-control @error('generasi') is-invalid @enderror" id="generasi" name="generasi">
                <option value="">Pilih Generasi</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
            </select>
            @error('generasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>
@endsection
