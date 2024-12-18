<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftars'; // Pastikan tabelnya benar
    // Di dalam model Daftar
    protected $fillable = ['nim2', 'nama2', 'kelas2', 'generasi2'];


    public function ukm(): BelongsTo
    {
        return $this->belongsTo(ukm::class)->withDefault();
    }
}
