<?php

namespace App\Http\Controllers;

use App\Http\Requests\UndanganAlt3FormRequest;
use App\Models\UndanganAlt3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UndanganAlt3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch data from the respective tables
        $nama_mempelai_laki = UndanganAlt3::value('nama_mempelai_laki');
        $nama_mempelai_perempuan = UndanganAlt3::value('nama_mempelai_perempuan');
        // $nama_undangan = UndanganAlt3::value('nama_undangan');

        // Mengambil data, termasuk yang telah dihapus secara lembut
        $data = UndanganAlt3::orderBy('id', 'asc')->paginate(10);

        // Mengirimkan data ke view bersama dengan variabel
        return view('undangan-nanang.admin', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('undangan-nanang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UndanganAlt3FormRequest $request)
    {
        // Simpan gambar ke penyimpanan
        $banner_img = $request->file('banner_img');
        $foto_prewedding = $request->file('foto_prewedding');
        $foto_mempelai_laki = $request->file('foto_mempelai_laki');
        $foto_mempelai_perempuan = $request->file('foto_mempelai_perempuan');
        $music = $request->file('music');
        $gambar1 = $request->file('gambar1');
        $gambar2 = $request->file('gambar2');

        // Simpan jalur penyimpanan untuk gambar utama
        $banner_img_path = $banner_img->storeAs('public/images', $banner_img->hashName());
        $foto_prewedding_path = $foto_prewedding->storeAs('public/images', $foto_prewedding->hashName());
        $foto_mempelai_laki_path = $foto_mempelai_laki->storeAs('public/images', $foto_mempelai_laki->hashName());
        $foto_mempelai_perempuan_path = $foto_mempelai_perempuan->storeAs('public/images', $foto_mempelai_perempuan->hashName());
        $music_path = $music->storeAs('public/images', $music->hashName());
        $gambar1_path = $gambar1->storeAs('public/images', $gambar1->hashName());
        $gambar2_path = $gambar2->storeAs('public/images', $gambar2->hashName());

        // Memisahkan nama undangan yang dipisahkan oleh baris menjadi array
        // $nama_undangans = explode("\n", $request->nama_undangan);

        // Buat entri baru untuk setiap nama undangan dengan ID yang berbeda
        $data = [
            'gambar1' => $gambar1_path,
            'gambar2' => $gambar2_path,
            'banner_img' => $banner_img_path,
            'foto_prewedding' => $foto_prewedding_path,
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
            'lokasi_gmaps' => $request->lokasi_gmaps,
            'perkenalan' => $request->perkenalan,
            'jadian' => $request->jadian,
            'tunangan' => $request->tunangan,
            'pernikahan' => $request->pernikahan,
            'nama_rek1' => $request->nama_rek1,
            'no_rek1' => $request->no_rek1,
            'atas_nama1' => $request->atas_nama1,
            'nama_rek2' => $request->nama_rek2,
            'no_rek2' => $request->no_rek2,
            'atas_nama2' => $request->atas_nama2,
            'alamat_tertera' => $request->alamat_tertera,
            'mulai_akad' => $request->mulai_akad,
            'mulai_resepsi' => $request->mulai_resepsi,
            'music' => $music_path,
            'judul_cerita1' => $request->judul_cerita1,
            'judul_cerita2' => $request->judul_cerita2,
            'judul_cerita3' => $request->judul_cerita3,
            'judul_cerita4' => $request->judul_cerita4,
            'nama_instagram1' => $request->nama_instagram1,
            'nama_instagram2' => $request->nama_instagram2,
            'link_instagram1' => $request->link_instagram1,
            'link_instagram2' => $request->link_instagram2,
            'tgl_cerita1' => $request->tgl_cerita1,
            'tgl_cerita2' => $request->tgl_cerita2,
            'tgl_cerita3' => $request->tgl_cerita3,
            'tgl_cerita4' => $request->tgl_cerita4,
            'caption' => $request->caption,
            'nama_pengarang' => $request->nama_pengarang,
        ];

        // Periksa apakah file galeri diunggah sebelum menyimpannya
        foreach (range(1, 5) as $index) {
            $galeri_field = 'galeri_img' . $index;
            if ($request->hasFile($galeri_field)) {
                $galeri_img = $request->file($galeri_field);
                $galeri_img_path = $galeri_img->storeAs('public/images', $galeri_img->hashName());
                $data[$galeri_field] = $galeri_img_path;
            } else {
                // Jika file galeri tidak diunggah, set bidang galeri menjadi default
                $data[$galeri_field] = NULL; // Atur default.jpg sesuai kebutuhan Anda
            }
        }

        // Check if files are uploaded before saving them
        foreach (['video'] as $file) {
            if ($request->hasFile($file)) {
                $fileInstance = $request->file($file);
                $filePath = $fileInstance->storeAs('public/images', $fileInstance->hashName());
                $data[$file] = $filePath;
            } else {
                $data[$file] = NULL; 
            }
        }



        UndanganAlt3::create($data);
        return redirect()->route('undangan-alternative3')->with('success', 'Data berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = UndanganAlt3::findOrFail($id);
        $nama_undangan = $data->namaUndangan;
        return view('undangan-nanang.view', compact('data', 'nama_undangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = UndanganAlt3::find($id);
        return view('undangan-nanang.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UndanganAlt3FormRequest $request, string $id)
    {
        // Temukan data dengan ID yang diberikan
        $data = UndanganAlt3::findOrFail($id);

        // Validasi data yang diterima dari formulir
        $validatedData = $request->validated();

        // Simpan jalur gambar lama
        $gambarFields = ['banner_img', 'foto_prewedding', 'foto_mempelai_laki', 'foto_mempelai_perempuan', 'galeri_img1', 'galeri_img2', 'galeri_img3', 'galeri_img4', 'galeri_img5', 'music', 'video', 'gambar1', 'gambar2'];
        foreach ($gambarFields as $field) {
            $oldImagePaths[$field] = $data->$field;
        }

        // Update setiap gambar jika ada perubahan
        foreach ($gambarFields as $field) {
            if ($request->hasFile($field)) {
                // Hapus gambar lama jika ada
                if ($data->$field) {
                    Storage::delete($data->$field);
                }

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
            'alamat_akad' => $validatedData['alamat_akad'],
            'tgl_resepsi' => $validatedData['tgl_resepsi'],
            'mulai_resepsi' => $validatedData['mulai_resepsi'],
            'alamat_resepsi' => $validatedData['alamat_resepsi'],
            'lokasi_gmaps' => $validatedData['lokasi_gmaps'],
            'perkenalan' => $validatedData['perkenalan'],
            'jadian' => $validatedData['jadian'],
            'tunangan' => $validatedData['tunangan'],
            'pernikahan' => $validatedData['pernikahan'],
            'nama_rek1' => $validatedData['nama_rek1'],
            'no_rek1' => $validatedData['no_rek1'],
            'atas_nama1' => $validatedData['atas_nama1'],
            'nama_rek2' => $validatedData['nama_rek2'],
            'no_rek2' => $validatedData['no_rek2'],
            'atas_nama2' => $validatedData['atas_nama2'],
            'alamat_tertera' => $validatedData['alamat_tertera'],
            'judul_cerita1' => $validatedData['judul_cerita1'],
            'judul_cerita2' => $validatedData['judul_cerita2'],
            'judul_cerita3' => $validatedData['judul_cerita3'],
            'judul_cerita4' => $validatedData['judul_cerita4'],
            'nama_instagram1' => $validatedData['nama_instagram1'],
            'nama_instagram2' => $validatedData['nama_instagram2'],
            'link_instagram1' => $validatedData['link_instagram1'],
            'link_instagram2' => $validatedData['link_instagram2'],
            'tgl_cerita1' => $validatedData['tgl_cerita1'],
            'tgl_cerita2' => $validatedData['tgl_cerita2'],
            'tgl_cerita3' => $validatedData['tgl_cerita3'],
            'tgl_cerita4' => $validatedData['tgl_cerita4'],
            'caption' => $validatedData['caption'],
            'nama_pengarang' =>$validatedData['nama_pengarang'],
            'video' => $request->hasFile('video') ? $data->video : null,
            'galeri_img1' => $request->hasFile('galeri_img1') ? $data->galeri_img1 : null,
            'galeri_img2' => $request->hasFile('galeri_img2') ? $data->galeri_img2 : null,
            'galeri_img3' => $request->hasFile('galeri_img3') ? $data->galeri_img3 : null,
            'galeri_img4' => $request->hasFile('galeri_img4') ? $data->galeri_img4 : null,
            'galeri_img5' => $request->hasFile('galeri_img5') ? $data->galeri_img5 : null,
        ]);

        return redirect()->route('undangan-alternative3')->with('success', 'Data berhasil diperbarui');

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
            UndanganAlt3::whereIn('id', $selectedIds)->delete();

            return redirect()->route('undangan-alternative3')->with('success', 'Data yang dipilih berhasil dihapus');
        } else {
            // Hapus data tunggal berdasarkan ID yang diterima
            $data = UndanganAlt3::find($id);
            if ($data) {
                $data->delete();
                return redirect()->route('undangan-alternative3')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->route('undangan-alternative3')->with('error', 'Data tidak ditemukan');
            }
        }

    }
}
