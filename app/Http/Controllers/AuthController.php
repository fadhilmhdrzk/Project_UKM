<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ukm;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.regis');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')
                ->with('success', 'Welcome, Guest!');
        }

        // Jika autentikasi gagal

    }

    public function doRegister(Request $request)
    {
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email sudah terdaftar. Silahkan gunakan email lain.');
        }
        $request->validate([

            // 'nama' => 'required|string|',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            // 'nama' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registration successful. You are now logged in.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing');
    }

    public function adminDashboard()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {

        // Hitung jumlah anggota
        $jumlahAnggota = \App\Models\Ukm::count();

        // Hitung jumlah pendaftar calon anggota
        $jumlahPendaftar = \App\Models\Daftar::count();

            // Return view dengan data yang dibutuhkan
            return view('home', [
                'jumlahAnggota' => $jumlahAnggota,
                'jumlahPendaftar' => $jumlahPendaftar,
            ]);
        }

    }


    public function guestDashboard()
    {
        $ukm = ukm::All();
        if (Auth::check() && Auth::user()->role === 'guest') {
            return view('landing_page', compact('home'));
        }
        abort(403, 'Unauthorized access');
    }
}
