@extends('layouts.template', ['title' => 'Data Pendaftar Anggota'])
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Data Pendaftaran Anggota</h3>
        <div class="row-mb-3-mt-3">
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
                        <a href="/daftar/{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">Edit</a>
                        <form action="/daftar/ {{ $item->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm ml-2" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
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

