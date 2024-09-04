<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UcapanAlt1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran',
        'undangan_alt1_id',
    ];

    public function undanganAlt1RSVP(): BelongsTo {
        return $this->belongsTo(UndanganAlt1::class, 'undangan_alt1_id', 'id');
    }
}
