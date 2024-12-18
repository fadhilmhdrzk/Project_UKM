@extends('layouts.template', ['title' => 'Data Pendaftar Anggota'])
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Data Pendaftaran Anggota</h3>

            <!-- Form Pencarian -->
            <form action="{{ url('/daftar') }}" method="GET" class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Cari Nama, NIM, Kelas, atau Generasi"
                        value="{{ $search ?? '' }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-info">Cari</button>
                </div>
            </form>

            <!-- Tombol Tambah Data -->
            <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <a href="/daftar/create" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Generasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nim2 }}</td>
                            <td>{{ $item->nama2 }}</td>
                            <td>{{ $item->kelas2 }}</td>
                            <td>{{ $item->generasi2 }}</td>
                            <td>
                                <form action="{{ route('daftar.approve', $item->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-success btn-sm"
                                        onclick="return confirm('Approve pendaftar ini?')">Approve</button>
                                    <button type="submit" class="btn btn-danger btn-sm ml-2"
                                        onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $daftar->links() !!}
        </div>
    </div>
@endsection
