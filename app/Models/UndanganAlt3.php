<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UndanganAlt3 extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'nama_undangan',
        'banner_img',
        'foto_prewedding',
        'foto_mempelai_laki',
        'nama_mempelai_laki',
        'nama_instagram1',
        'nama_instagram2',
        'link_instagram1',
        'link_instagram2',
        'putra_dari_bpk',
        'putra_dari_ibu',
        'foto_mempelai_perempuan',
        'nama_mempelai_perempuan',
        'putri_dari_bpk',
        'putri_dari_ibu',
        'tgl_akad',
        'alamat_akad',
        'tgl_resepsi',
        'alamat_resepsi',
        'lokasi_gmaps',
        'galeri_img1',
        'galeri_img2',
        'galeri_img3',
        'galeri_img4',
        'galeri_img5',
        'perkenalan',
        'jadian',
        'tunangan',
        'pernikahan',
        'nama_rek1',
        'no_rek1',
        'atas_nama1',
        'nama_rek2',
        'no_rek2',
        'atas_nama2',
        'alamat_tertera',
        'mulai_akad',
        'mulai_resepsi',
        'music',
        'judul_cerita1',
        'judul_cerita2',
        'judul_cerita3',
        'judul_cerita4',
        'tgl_cerita1',
        'tgl_cerita2',
        'tgl_cerita3',
        'tgl_cerita4',
        'video',
        'gambar1',
        'gambar2',
        'caption',
        'nama_pengarang',

    ];


    public function namaUndangan(): HasMany
    {
        return $this->hasMany(NamaUndanganAlt3::class, 'undangan_alt3_id', 'id');
    }

    public function alt3Models(): HasMany
    {
        return $this->hasMany(alt3model::class, 'id_alt3_rsvp', 'id');
    }

    
}
