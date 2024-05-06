<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NamaUndanganAlt2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_undangan',
        'undangan_alt2_id',
    ];

    public function undanganAlt2(): BelongsTo
    {
        return $this->belongsTo(UndanganAlt2::class, 'undangan_alt2_id', 'id');
    }
}
