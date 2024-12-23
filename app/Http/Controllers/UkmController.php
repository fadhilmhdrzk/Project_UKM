<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // UkmController
    public function index(Request $request)
    {
        // Tangkap input pencarian
        $search = $request->input('search');

        // Query data UKM
        $ukm = \App\Models\Ukm::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%")
                ->orWhere('nim', 'like', "%{$search}%")
                ->orWhere('kelas', 'like', "%{$search}%")
                ->orWhere('generasi', 'like', "%{$search}%");
        })
            ->latest()
            ->paginate(10); // Pagination

        // Kirim data ke view
        return view('ukm_index', compact('ukm', 'search'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ukm_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'generasi' => 'required',
        ]);
        $ukm = new \App\Models\ukm();
        $ukm->fill($requestData);
        $ukm->save();
        flash('Data Sudah Disimpan')->success();
        return redirect('/ukm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['ukm'] = \App\Models\Ukm::findOrFail($id);
        return view('ukm_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'generasi' => 'required|in:23,24,25',
        ]);
        $ukm = \App\Models\Ukm::findOrFail($id);
        $ukm->fill($requestData);
        $ukm->save();
        flash('Data Sudah Disimpan')->success();
        return redirect('/ukm');
    }

    /***
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ukm = \App\Models\Ukm::findOrFail($id);
        $ukm->delete();
        flash('Data Sudah Dihapus')->success();
        return back();
    }
}
