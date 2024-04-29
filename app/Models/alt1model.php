<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class alt1model extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran',
        'id_alt1_rsvp',
    ];

    public function undanganAlt1RSVP(): BelongsTo {
        return $this->belongsTo(UndanganAlt1::class, 'id_alt1_rsvp', 'id');
    }
}
