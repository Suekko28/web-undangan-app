<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class alt2model extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran',
        'id_alt2_rsvp',

    ];
    public function undanganAlt2RSVP(): BelongsTo {
        return $this->belongsTo(UndanganAlt2::class, 'id_alt2_rsvp', 'id');
    }
}
