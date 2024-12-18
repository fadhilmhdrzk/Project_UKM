@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Card Jumlah Anggota -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">{{ __('Jumlah Anggota UKM') }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $jumlahAnggota }}</h5>
                    <p class="card-text">Jumlah anggota.</p>
                </div>
            </div>
        </div>

        <!-- Card Jumlah Pendaftar -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">{{ __('Jumlah Pendaftar') }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $jumlahPendaftar }}</h5>
                    <p class="card-text">Jumlah pendaftar.</p>
                </div>
            </div>
        </div>

        <!-- Card lainnya atau konten dashboard dapat ditambahkan di sini -->
    </div>
</div>
@endsection
