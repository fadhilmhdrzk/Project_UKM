@extends('layouts.template', ['title' => 'Tambah Pendaftar Anggota'])
@section('content')
    <div class="card-body">
        <h3>Tambah Pendaftaran Anggota</h3>
        <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-1 mb-3">
                <div class="form-group mb-3">
                    <label for="nama2">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama2') is-invalid @enderror" id="nama2"
                        name="nama2">
                    @error('nama2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nim2">NIM</label>
                    <input type="text" class="form-control @error('nim2') is-invalid @enderror" id="nim2"
                        name="nim2">
                    @error('nim2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="form-group mb-3">
                    <label for="kelas2">Kelas</label>
                    <input type="text" class="form-control @error('kelas2') is-invalid @enderror" id="kelas2"
                        name="kelas2">
                    @error('kelas2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}

                <div class="form-group mb-4">
                    <label for="kelas2">Kelas</label>
                    <select
                        class="form-control @error('kelas2') is-invalid @enderror"
                        id="kelas2"
                        name="kelas2"
                    >
                    <option value="" selected>Pilih Kelas</option>
                    <option value="1 HMKD" {{ old('kelas') == '1 HMKD' ? 'selected' : '' }}>1 HMKD</option>
                    <option value="1 BD" {{ old('kelas') == '1 BD' ? 'selected' : '' }}>1 BD</option>
                    <option value="1 AKTP A" {{ old('kelas') == '1 AKTP A' ? 'selected' : '' }}>1 AKTP A</option>
                    <option value="1 AKTP B" {{ old('kelas') == '1 AKTP B' ? 'selected' : '' }}>1 AKTP B</option>
                    <option value="1 AKTP SW" {{ old('kelas') == '1 AKTP SW' ? 'selected' : '' }}>1 AKTP SW</option>
                    <option value="2 AKTP A" {{ old('kelas') == '2 AKTP A' ? 'selected' : '' }}>2 AKTP A</option>
                    <option value="2 AKTP B" {{ old('kelas') == '2 AKTP B' ? 'selected' : '' }}>2 AKTP B</option>
                    <option value="2 AKTP C" {{ old('kelas') == '2 AKTP C' ? 'selected' : '' }}>2 AKTP C</option>
                    <option value="3 AKTP" {{ old('kelas') == '3 AKTP' ? 'selected' : '' }}>3 AKTP</option>
                    <option value="1 TRK A" {{ old('kelas') == '1 TRK A' ? 'selected' : '' }}>1 TRK A</option>
                    <option value="1 TRK B" {{ old('kelas') == '1 TRK B' ? 'selected' : '' }}>1 TRK B</option>
                    <option value="2 TRK A" {{ old('kelas') == '2 TRK A' ? 'selected' : '' }}>2 TRK A</option>
                    <option value="2 TRK B" {{ old('kelas') == '2 TRK B' ? 'selected' : '' }}>2 TRK B</option>
                    <option value="3 TRK" {{ old('kelas') == '3 TRK' ? 'selected' : '' }}>3 TRK</option>
                    <option value="1 SI A" {{ old('kelas') == '1 SI A' ? 'selected' : '' }}>1 SI A</option>
                    <option value="1 SI B" {{ old('kelas') == '1 SI B' ? 'selected' : '' }}>1 SI B</option>
                    <option value="1 SI C" {{ old('kelas') == '1 SI C' ? 'selected' : '' }}>1 SI C</option>
                    <option value="1 SI D" {{ old('kelas') == '1 SI D' ? 'selected' : '' }}>1 SI D</option>
                    <option value="1 SI E" {{ old('kelas') == '1 SI E' ? 'selected' : '' }}>1 SI E</option>
                    <option value="2 SI A" {{ old('kelas') == '2 SI A' ? 'selected' : '' }}>2 SI A</option>
                    <option value="2 SI B" {{ old('kelas') == '2 SI B' ? 'selected' : '' }}>2 SI B</option>
                    <option value="2 SI C" {{ old('kelas') == '2 SI C' ? 'selected' : '' }}>2 SI C</option>
                    <option value="2 SI D" {{ old('kelas') == '2 SI D' ? 'selected' : '' }}>2 SI D</option>
                    <option value="3 SI A" {{ old('kelas') == '3 SI A' ? 'selected' : '' }}>3 SI A</option>
                    <option value="3 SI B" {{ old('kelas') == '3 SI B' ? 'selected' : '' }}>3 SI B</option>
                    <option value="3 SI C" {{ old('kelas') == '3 SI C' ? 'selected' : '' }}>3 SI C</option>
                    <option value="3 SI D" {{ old('kelas') == '3 SI D' ? 'selected' : '' }}>3 SI D</option>
                    <option value="1 TI SW" {{ old('kelas') == '1 TI SW' ? 'selected' : '' }}>1 TI SW</option>
                    <option value="1 TI A" {{ old('kelas') == '1 TI A' ? 'selected' : '' }}>1 TI A</option>
                    <option value="1 TI B" {{ old('kelas') == '1 TI B' ? 'selected' : '' }}>1 TI B</option>
                    <option value="1 TI C" {{ old('kelas') == '1 TI C' ? 'selected' : '' }}>1 TI C</option>
                    <option value="1 TI D" {{ old('kelas') == '1 TI D' ? 'selected' : '' }}>1 TI D</option>
                    <option value="1 TI E" {{ old('kelas') == '1 TI E' ? 'selected' : '' }}>1 TI E</option>
                    <option value="1 TI F" {{ old('kelas') == '1 TI F' ? 'selected' : '' }}>1 TI F</option>
                    <option value="2 TI A" {{ old('kelas') == '2 TI A' ? 'selected' : '' }}>2 TI A</option>
                    <option value="2 TI B" {{ old('kelas') == '2 TI B' ? 'selected' : '' }}>2 TI B</option>
                    <option value="2 TI C" {{ old('kelas') == '2 TI C' ? 'selected' : '' }}>2 TI C</option>
                    <option value="2 TI D" {{ old('kelas') == '2 TI D' ? 'selected' : '' }}>2 TI D</option>
                    <option value="2 TI E" {{ old('kelas') == '2 TI E' ? 'selected' : '' }}>2 TI E</option>
                    <option value="2 TI F" {{ old('kelas') == '2 TI F' ? 'selected' : '' }}>2 TI F</option>
                    <option value="3 TI A" {{ old('kelas') == '3 TI A' ? 'selected' : '' }}>3 TI A</option>
                    <option value="3 TI B" {{ old('kelas') == '3 TI B' ? 'selected' : '' }}>3 TI B</option>
                    <option value="3 TI C" {{ old('kelas') == '3 TI C' ? 'selected' : '' }}>3 TI C</option>
                    <option value="3 TI D" {{ old('kelas') == '3 TI D' ? 'selected' : '' }}>3 TI D</option>
                    <option value="3 TI E" {{ old('kelas') == '3 TI E' ? 'selected' : '' }}>3 TI E</option>
                    <option value="3 TI F" {{ old('kelas') == '3 TI F' ? 'selected' : '' }}>3 TI F</option>
                    <option value="1 TMS A" {{ old('kelas') == '1 TMS A' ? 'selected' : '' }}>1 TMS A</option>
                    <option value="1 TMS B" {{ old('kelas') == '1 TMS B' ? 'selected' : '' }}>1 TMS B</option>
                    <option value="1 TMS C" {{ old('kelas') == '1 TMS C' ? 'selected' : '' }}>1 TMS C</option>
                    <option value="2 TMS A" {{ old('kelas') == '2 TMS A' ? 'selected' : '' }}>2 TMS A</option>
                    <option value="2 TMS B" {{ old('kelas') == '2 TMS B' ? 'selected' : '' }}>2 TMS B</option>
                    <option value="3 TMS A" {{ old('kelas') == '3 TMS A' ? 'selected' : '' }}>3 TMS A</option>
                    <option value="1 TET A" {{ old('kelas') == '1 TET A' ? 'selected' : '' }}>1 TET A</option>
                    <option value="1 TET B" {{ old('kelas') == '1 TET B' ? 'selected' : '' }}>1 TET B</option>
                    <option value="2 TET A" {{ old('kelas') == '2 TET A' ? 'selected' : '' }}>2 TET A</option>
                    <option value="2 TET B" {{ old('kelas') == '2 TET B' ? 'selected' : '' }}>2 TET B</option>
                    <option value="3 TET A" {{ old('kelas') == '3 TET A' ? 'selected' : '' }}>3 TET A</option>
                    <option value="3 TET B" {{ old('kelas') == '3 TET B' ? 'selected' : '' }}>3 TET B</option>
                    <option value="1 TL A" {{ old('kelas') == '1 TL A' ? 'selected' : '' }}>1 TL A</option>
                    <option value="1 TL B" {{ old('kelas') == '1 TL B' ? 'selected' : '' }}>1 TL B</option>
                    <option value="2 TL A" {{ old('kelas') == '2 TL A' ? 'selected' : '' }}>2 TL A</option>
                    <option value="2 TL B" {{ old('kelas') == '2 TL B' ? 'selected' : '' }}>2 TL B</option>
                    <option value="3 TL" {{ old('kelas') == '3 TL' ? 'selected' : '' }}>3 TL</option>
                    <option value="1 TRJT A" {{ old('kelas') == '1 TRJT A' ? 'selected' : '' }}>1 TRJT A</option>
                    <option value="1 TRJT B" {{ old('kelas') == '1 TRJT B' ? 'selected' : '' }}>1 TRJT B</option>
                    <option value="2 TRJT A" {{ old('kelas') == '2 TRJT A' ? 'selected' : '' }}>2 TRJT A</option>
                    <option value="2 TRJT B" {{ old('kelas') == '2 TRJT B' ? 'selected' : '' }}>2 TRJT B</option>
                    <option value="3 TRJT A" {{ old('kelas') == '3 TRJT A' ? 'selected' : '' }}>3 TRJT A</option>
                    <option value="3 TRJT B" {{ old('kelas') == '3 TRJT B' ? 'selected' : '' }}>3 TRJT B</option>
                    <option value="1 TRM A" {{ old('kelas') == '1 TRM A' ? 'selected' : '' }}>1 TRM A</option>
                    <option value="1 TRM B" {{ old('kelas') == '1 TRM B' ? 'selected' : '' }}>1 TRM B</option>
                    <option value="1 TRM C" {{ old('kelas') == '1 TRM C' ? 'selected' : '' }}>1 TRM C</option>
                    <option value="2 TRM A" {{ old('kelas') == '2 TRM A' ? 'selected' : '' }}>2 TRM A</option>
                    <option value="2 TRM B" {{ old('kelas') == '2 TRM B' ? 'selected' : '' }}>2 TRM B</option>
                    <option value="3 TRM A" {{ old('kelas') == '3 TRM A' ? 'selected' : '' }}>3 TRM A</option>
                    <option value="3 TRM B" {{ old('kelas') == '3 TRM B' ? 'selected' : '' }}>3 TRM B</option>
                    <option value="1 TRSE A" {{ old('kelas') == '1 TRSE A' ? 'selected' : '' }}>1 TRSE A</option>
                    <option value="1 TRSE B" {{ old('kelas') == '1 TRSE B' ? 'selected' : '' }}>1 TRSE B</option>
                    <option value="2 TRSE A" {{ old('kelas') == '2 TRSE A' ? 'selected' : '' }}>2 TRSE A</option>
                    <option value="2 TRSE B" {{ old('kelas') == '2 TRSE B' ? 'selected' : '' }}>2 TRSE B</option>
                    <option value="3 TRSE A" {{ old('kelas') == '3 TRSE A' ? 'selected' : '' }}>3 TRSE A</option>
                    <option value="3 TRSE B" {{ old('kelas') == '3 TRSE B' ? 'selected' : '' }}>3 TRSE B</option>
                    </select>
                    @error('kelas2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="generasi2">Generasi</label>
                    <select class="form-control" id="generasi2" name="generasi2" required>
                        <option value="">Pilih Generasi</option>
                        <option value="23" {{ old('generasi2') == '23' ? 'selected' : '' }}>23</option>
                        <option value="24" {{ old('generasi2') == '24' ? 'selected' : '' }}>24</option>
                        <option value="25" {{ old('generasi2') == '25' ? 'selected' : '' }}>25</option>
                    </select>
                    @error('generasi2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
@endsection
