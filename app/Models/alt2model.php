<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alt2model extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran',
    ];
}
