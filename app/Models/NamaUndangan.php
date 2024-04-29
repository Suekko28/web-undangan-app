<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NamaUndangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_undangan',
        'undangan_alt1_id',
    ];

    public function undanganAlt1(): BelongsTo
    {
        return $this->belongsTo(UndanganAlt1::class, 'undangan_alt1_id', 'id');
    }
}
