<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ukm extends Model
{
    use HasFactory;
    protected $table = 'ukms';
    protected $guarded = [];
    protected $fillable = ['nim', 'nama', 'kelas', 'generasi'];

    public function daftar(): HasMany
    {
        return $this->hasMany(Daftar::class);
    }
}