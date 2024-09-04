<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UcapanAlt3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ucapan',
        'alamat',
        'undangan_alt3_id',
    ];

    public function undanganAlt1RSVP(): BelongsTo {
        return $this->belongsTo(UndanganAlt3::class, 'undangan_alt3_id', 'id');
    }
}
