<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UcapanAlt2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran',
        'undangan_alt2_id',
    ];

    public function undanganAlt1RSVP(): BelongsTo {
        return $this->belongsTo(UndanganAlt2::class, 'undangan_alt2_id', 'id');
    }
}
