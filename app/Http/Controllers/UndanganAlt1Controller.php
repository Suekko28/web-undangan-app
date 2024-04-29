<?php

namespace App\Http\Controllers;

use App\Http\Requests\UndanganAlt1FormRequest;
use App\Models\NamaUndangan;
use App\Models\UndanganAlt1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UndanganAlt1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch data from the respective tables
        $nama_mempelai_laki = UndanganAlt1::value('nama_mempelai_laki');
        $nama_mempelai_perempuan = UndanganAlt1::value('nama_mempelai_perempuan');
        // $nama_undangan = UndanganAlt1::value('nama_undangan');

        // Mengambil data, termasuk yang telah dihapus secara lembut
        $data = UndanganAlt1::orderBy('id', 'asc')->paginate(10);

        // Mengirimkan data ke view bersama dengan variabel
        return view('undangan-aldi.admin', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('undangan-aldi.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(UndanganAlt1FormRequest $request)
    {
        // Simpan gambar ke penyimpanan
        $banner_img = $request->file('banner_img');
        $foto_mempelai_laki = $request->file('foto_mempelai_laki');
        $foto_mempelai_perempuan = $request->file('foto_mempelai_perempuan');
        $music = $request->file('music');

        // Simpan jalur penyimpanan untuk gambar utama
        $banner_img_path = $banner_img->storeAs('public/images', $banner_img->hashName());
        $foto_mempelai_laki_path = $foto_mempelai_laki->storeAs('public/images', $foto_mempelai_laki->hashName());
        $foto_mempelai_perempuan_path = $foto_mempelai_perempuan->storeAs('public/images', $foto_mempelai_perempuan->hashName());
        $music_path = $music->storeAs('public/images', $music->hashName());

        // Memisahkan nama undangan yang dipisahkan oleh baris menjadi array
        $nama_undangans = explode("\n", $request->nama_undangan);

        // Buat entri baru untuk setiap nama undangan dengan ID yang berbeda
        $data = [
            'banner_img' => $banner_img_path,
            'foto_mempelai_laki' => $foto_mempelai_laki_path,
            'nama_mempelai_laki' => $request->nama_mempelai_laki,
            'putra_dari_bpk' => $request->putra_dari_bpk,
            'putra_dari_ibu' => $request->putra_dari_ibu,
            'foto_mempelai_perempuan' => $foto_mempelai_perempuan_path,
            'nama_mempelai_perempuan' => $request->nama_mempelai_perempuan,
            'putri_dari_bpk' => $request->putri_dari_bpk,
            'putri_dari_ibu' => $request->putri_dari_ibu,
            'tgl_akad' => $request->tgl_akad,
            'alamat_akad' => $request->alamat_akad,
            'tgl_resepsi' => $request->tgl_resepsi,
            'alamat_resepsi' => $request->alamat_resepsi,
            'lokasi_gmaps_akad' => $request->lokasi_gmaps_akad,
            'lokasi_gmaps_resepsi' => $request->lokasi_gmaps_resepsi,
            'caption' => $request->caption,
            'pertemuan' => $request->pertemuan,
            'pendekatan' => $request->pendekatan,
            'lamaran' => $request->lamaran,
            'pernikahan' => $request->pernikahan,
            'nama_rek1' => $request->nama_rek1,
            'no_rek1' => $request->no_rek1,
            'atas_nama1' => $request->atas_nama1,
            'nama_rek2' => $request->nama_rek2,
            'no_rek2' => $request->no_rek2,
            'atas_nama2' => $request->atas_nama2,
            'nama_rek3' => $request->nama_rek3,
            'no_rek3' => $request->no_rek3,
            'atas_nama3' => $request->atas_nama3,
            'alamat_tertera' => $request->alamat_tertera,
            'mulai_akad' => $request->mulai_akad,
            'selesai_akad' => $request->selesai_akad,
            'mulai_resepsi' => $request->mulai_resepsi,
            'selesai_resepsi' => $request->selesai_resepsi,
            'music' => $music_path,
            'judul_cerita1' => $request->judul_cerita1,
            'judul_cerita2' => $request->judul_cerita2,
            'judul_cerita3' => $request->judul_cerita3,
            'judul_cerita4' => $request->judul_cerita4,
        ];

        // Periksa apakah file galeri diunggah sebelum menyimpannya
        foreach (range(1, 6) as $index) {
            $galeri_field = 'galeri_img' . $index;
            if ($request->hasFile($galeri_field)) {
                $galeri_img = $request->file($galeri_field);
                $galeri_img_path = $galeri_img->storeAs('public/images', $galeri_img->hashName());
                $data[$galeri_field] = $galeri_img_path;
            } else {
                // Jika file galeri tidak diunggah, set bidang galeri menjadi default
                $data[$galeri_field] = 'default.jpg'; // Atur default.jpg sesuai kebutuhan Anda
            }
        }

        // Check if files are uploaded before saving them
        // Check if files are uploaded before saving them
        foreach (['foto_pertemuan', 'foto_pendekatan', 'foto_lamaran', 'foto_pernikahan'] as $file) {
            if ($request->hasFile($file)) {
                $fileInstance = $request->file($file);
                $filePath = $fileInstance->storeAs('public/images', $fileInstance->hashName());
                $data[$file] = $filePath;
            } else {
                $data[$file] = 'default.jpg'; // or set it to null if preferred
            }
        }


        UndanganAlt1::create($data);
        return redirect()->route('undangan-alternative1')->with('success', 'Data berhasil ditambahkan');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = UndanganAlt1::findOrFail($id);
        $nama_undangan = $data->namaUndangan;
        return view('undangan-aldi.view', compact('data', 'nama_undangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = UndanganAlt1::find($id);
        return view('undangan-aldi.edit', [
            'data' => $data,
        ]);
    }


    public function update(UndanganAlt1FormRequest $request, string $id)
    {
        // Temukan data dengan ID yang diberikan
        $data = UndanganAlt1::findOrFail($id);

        // Validasi data yang diterima dari formulir
        $validatedData = $request->validated();

        // Simpan jalur gambar lama
        // Simpan jalur gambar lama
        $gambarFields = ['banner_img', 'foto_mempelai_laki', 'foto_mempelai_perempuan', 'galeri_img1', 'galeri_img2', 'galeri_img3', 'galeri_img4', 'galeri_img5', 'galeri_img6', 'music', 'foto_pertemuan', 'foto_pendekatan', 'foto_lamaran', 'foto_pernikahan'];
        foreach ($gambarFields as $field) {
            $oldImagePaths[$field] = $data->$field;
        }

        // Update setiap gambar jika ada perubahan
        foreach ($gambarFields as $field) {
            if ($request->hasFile($field)) {
                // Upload gambar yang baru
                $image = $request->file($field);
                $imagePath = $image->storeAs('public/images', $image->hashName());

                // Update data dengan informasi gambar yang baru
                $data->$field = $imagePath;
            } elseif ($request->has($field)) {
                // Jika bidang tidak diunggah tetapi ada dalam permintaan, pertahankan nilai yang ada
                $data->$field = $request->$field;
            } else {
                // Jika tidak ada file yang diunggah dan tidak ada nilai baru dalam permintaan, pertahankan gambar lama
                $data->$field = $oldImagePaths[$field];
            }
        }

        // Update data dengan informasi yang diperbarui
        $data->update([
            // 'nama_undangan' => $validatedData['nama_undangan'],
            'nama_mempelai_laki' => $validatedData['nama_mempelai_laki'],
            'putra_dari_bpk' => $validatedData['putra_dari_bpk'],
            'putra_dari_ibu' => $validatedData['putra_dari_ibu'],
            'nama_mempelai_perempuan' => $validatedData['nama_mempelai_perempuan'],
            'putri_dari_bpk' => $validatedData['putri_dari_bpk'],
            'putri_dari_ibu' => $validatedData['putri_dari_ibu'],
            'tgl_akad' => $validatedData['tgl_akad'],
            'mulai_akad' => $validatedData['mulai_akad'],
            'selesai_akad' => $validatedData['selesai_akad'],
            'alamat_akad' => $validatedData['alamat_akad'],
            'tgl_resepsi' => $validatedData['tgl_resepsi'],
            'mulai_resepsi' => $validatedData['mulai_resepsi'],
            'selesai_resepsi' => $validatedData['selesai_resepsi'],
            'alamat_resepsi' => $validatedData['alamat_resepsi'],
            'lokasi_gmaps_akad' => $validatedData['lokasi_gmaps_akad'],
            'lokasi_gmaps_resepsi' => $validatedData['lokasi_gmaps_resepsi'],
            'caption' => $validatedData['caption'],
            'pertemuan' => $validatedData['pertemuan'],
            'pendekatan' => $validatedData['pendekatan'],
            'lamaran' => $validatedData['lamaran'],
            'pernikahan' => $validatedData['pernikahan'],
            'nama_rek1' => $validatedData['nama_rek1'],
            'no_rek1' => $validatedData['no_rek1'],
            'atas_nama1' => $validatedData['atas_nama1'],
            'nama_rek2' => $validatedData['nama_rek2'],
            'no_rek2' => $validatedData['no_rek2'],
            'atas_nama2' => $validatedData['atas_nama2'],
            'nama_rek3' => $validatedData['nama_rek3'],
            'no_rek3' => $validatedData['no_rek3'],
            'atas_nama3' => $validatedData['atas_nama3'],
            'alamat_tertera' => $validatedData['alamat_tertera'],
            'judul_cerita1' => $validatedData['judul_cerita1'],
            'judul_cerita2' => $validatedData['judul_cerita2'],
            'judul_cerita3' => $validatedData['judul_cerita3'],
            'judul_cerita4' => $validatedData['judul_cerita4'],
        ]);

        return redirect()->route('undangan-alternative1')->with('success', 'Data berhasil diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id = null)
    {
        // Cek apakah ada ID yang diterima, jika tidak, artinya sedang menghapus data yang dipilih
        if ($id === null) {
            // Mendapatkan data yang dipilih dari form
            $selectedIds = $request->input('selected', []);

            // Menghapus data yang dipilih
            UndanganAlt1::whereIn('id', $selectedIds)->delete();

            return redirect()->route('undangan-alternative1')->with('success', 'Data yang dipilih berhasil dihapus');
        } else {
            // Hapus data tunggal berdasarkan ID yang diterima
            $data = UndanganAlt1::find($id);
            if ($data) {
                $data->delete();
                return redirect()->route('undangan-alternative1')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->route('undangan-alternative1')->with('error', 'Data tidak ditemukan');
            }
        }
    }


}
