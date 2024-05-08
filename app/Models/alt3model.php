<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class alt3model extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'ucapan',
        'id_alt3_rsvp',

    ];
    public function undanganAlt3RSVP(): BelongsTo {
        return $this->belongsTo(UndanganAlt3::class, 'id_alt3_rsvp', 'id');
    }
}
