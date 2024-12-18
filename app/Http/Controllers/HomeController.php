<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ukm;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Hitung jumlah anggota
        $jumlahAnggota = \App\Models\Ukm::count();

        // Hitung jumlah pendaftar calon anggota
        $jumlahPendaftar = \App\Models\Daftar::count();

        return view('home', compact('jumlahAnggota', 'jumlahPendaftar'));
    }
}
