<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UndanganAlt2FormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'background_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'banner_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_prewedding' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_mempelai_laki' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_mempelai_laki' => 'required|string|max:255',
            'putra_dari_bpk' => 'required|string|max:255',
            'putra_dari_ibu' => 'required|string|max:255',
            'nama_instagram1' => 'required|string|max:255',
            'link_instagram1' => 'required|string|max:255',
            'nama_instagram2' => 'required|string|max:255',
            'link_instagram2' => 'required|string|max:255',
            'foto_mempelai_perempuan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_mempelai_perempuan' => 'required|string|max:255',
            'putri_dari_bpk' => 'required|string|max:255',
            'putri_dari_ibu' => 'required|string|max:255',
            'tgl_akad' => 'required|date',
            'mulai_akad' => 'required|date_format:H:i',
            'alamat_akad' => 'required|string',
            'tgl_resepsi' => 'required|date',
            'mulai_resepsi' => 'required|date_format:H:i',
            'alamat_resepsi' => 'required|string',
            'lokasi_gmaps' => 'required|string',
            'galeri_img1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'galeri_img2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'galeri_img3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'galeri_img4' => 'image|mimes:jpeg,png,jpg|max:2048',
            'galeri_img5' => 'image|mimes:jpeg,png,jpg|max:2048',
            'galeri_img6' => 'image|mimes:jpeg,png,jpg|max:2048',
            'perkenalan' => '',
            'jadian' => '',
            'tunangan' => '',
            'pernikahan' => '',
            'nama_rek1' => 'max:255',
            'no_rek1' => '',
            'atas_nama1' => 'max:255',
            'nama_rek2' => 'max:255',
            'no_rek2' => '',
            'atas_nama2' => 'max:255',
            'alamat_tertera' => 'string',
            'music' => 'required|mimes:mp3',
            'judul_cerita1' => 'max:255',
            'judul_cerita2' => 'max:255',
            'judul_cerita3' => 'max:255',
            'judul_cerita4' => 'max:255',
            
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'Kolom :attribute wajib diisi.',
            'image' => 'Kolom :attribute harus berupa gambar.',
            'mimes' => 'Kolom :attribute harus memiliki format file yang valid (jpeg, png, jpg).',
            'max' => 'Ukuran file pada kolom :attribute tidak boleh melebihi :max kilobita.',
            'string' => 'Kolom :attribute harus berupa teks.',
            'date' => 'Kolom :attribute harus berupa tanggal yang valid.',
            'date_format' => 'Format tanggal pada kolom :attribute tidak valid.',
            'integer' => 'Kolom :attribute harus berupa angka.',
        ];
    }
    }
