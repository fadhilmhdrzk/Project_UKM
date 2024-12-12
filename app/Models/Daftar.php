<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Daftar extends Model
{
    /** @use HasFactory<\Database\Factories\DaftarFactory> */
    use HasFactory;
    protected $guarded = [];

    public function ukm():BelongsTo
    {
        return $this->belongsTo(ukm::class)->withDefault();
    }
}
