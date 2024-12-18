<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Http\Requests\StoreDaftarRequest;
use App\Http\Requests\UpdateDaftarRequest;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Query data UKM
        $daftar = \App\Models\Daftar::when($search, function ($query, $search) {
            return $query->where('nama2', 'like', "%{$search}%")
                ->orWhere('nim2', 'like', "%{$search}%")
                ->orWhere('kelas2', 'like', "%{$search}%")
                ->orWhere('generasi2', 'like', "%{$search}%");
        })
            ->latest()
            ->paginate(10); // Pagination
        return view('daftar_index', compact('daftar', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('daftar_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nim2' => 'required',
            'nama2' => 'required',
            'kelas2' => 'required',
            'generasi2' => 'required',
        ]);
        $daftar = new \App\Models\Daftar();
        $daftar->fill($requestData);
        $daftar->save();
        flash('Data Sudah Disimpan')->success();
        return redirect('/daftar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $requestData = $request->validate([
            'nim2' => 'required',
            'nama2' => 'required',
            'kelas2' => 'required',
            'generasi2' => 'required',
        ]);
        $daftar = \App\Models\Daftar::findOrFail($id);
        $daftar->fill($requestData);
        $daftar->save();
        flash('Data Sudah Disimpan')->success();
        return redirect('/daftar');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar $daftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDaftarRequest $request, Daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $daftar = \App\Models\Daftar::findOrFail($id);
        $daftar->delete();
        flash('Data Sudah Dihapus')->success();
        return back();
    }

    // DaftarController
    public function approve($id)
    {
        // Ambil data dari tabel daftar
        $daftar = \App\Models\Daftar::findOrFail($id);

        // Pindahkan data ke tabel ukm
        \App\Models\Ukm::create([
            'nim' => $daftar->nim2,
            'nama' => $daftar->nama2,
            'kelas' => $daftar->kelas2,
            'generasi' => $daftar->generasi2,
        ]);

        // Hapus data dari daftar setelah dipindahkan
        $daftar->delete();

        // Beri notifikasi
        flash('Pendaftar berhasil di-approve dan dipindahkan ke Anggota')->success();

        // Redirect ke halaman daftar
        return back();
        $exists = \App\Models\ukm::where('nim', $daftar->nim2)->exists();
        if ($exists) {
            flash('Data sudah ada di tabel UKM')->error();
            return back();
        }
    }
}
