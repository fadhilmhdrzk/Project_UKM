@extends('layouts.template', ['title' => 'Data Anggota'])

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Data Anggota</h3>

            <!-- Form Pencarian -->
            <form action="{{ url('/ukm') }}" method="GET" class="row mb-3">
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
                    <a href="{{ url('/ukm/create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>

            <!-- Tabel Data -->
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
                    @forelse ($ukm as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->generasi }}</td>
                            <td>
                                <a href="{{ url('/ukm/' . $item->id . '/edit') }}"
                                    class="btn btn-warning btn-sm ml-2">Edit</a>
                                <form action="{{ url('/ukm/' . $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm ml-2"
                                        onclick="return confirm('Yakin ingin menghapus data?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {!! $ukm->links() !!}
    </div>
@endsection
