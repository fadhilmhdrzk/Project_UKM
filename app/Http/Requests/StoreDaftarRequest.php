<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDaftarRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan diubah menjadi true
    }

    public function rules()
    {
        return [
            'nim2' => 'required', // Validasi minimal 8 angka
            'nama2' => 'required|string|max:255',
            'kelas2' => 'required|string',
            'generasi2' => 'required|in:23,24,25',
        ];
    }

    public function messages()
    {
        return [
            'nama2.required' => 'Nama harus diisi.',
            'nim2.required' => 'NIM harus diisi.',
            'kelas2.required' => 'Kelas harus diisi.',
            'nim2.min' => 'NIM minimal 9 angka.',
            'generasi2.required' => 'Generasi harus diisi.',
        ];
    }
}
