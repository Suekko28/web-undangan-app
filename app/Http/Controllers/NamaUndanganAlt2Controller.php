<?php

namespace App\Http\Controllers;

use App\Models\NamaUndanganAlt2;
use App\Models\UndanganAlt2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NamaUndanganAlt2Controller extends Controller
{
    /**
     * Display a list2ing of the resource.
     */
    public function index($undanganAlt2Id)
    {
        $undanganAlt2 = UndanganAlt2::findOrFail($undanganAlt2Id);
        $namaUndangans = $undanganAlt2->NamaUndangan()->paginate(10);

        return view('user-alt2.index', compact('namaUndangans', 'undanganAlt2'));
    }




    public function create($undanganAlt2Id)
    {
        $undanganAlt2 = UndanganAlt2::findOrFail($undanganAlt2Id);
        return view('user-alt2.create', compact('undanganAlt2', 'undanganAlt2Id'));
    }




    public function store(Request $request, $undanganAlt2Id)
    {
        // Definisikan pesan untuk validasi
        $messages = [
            'required' => 'Kolom :attribute harus diisi.',
            'string' => 'Kolom :attribute harus berupa teks.',
            'nama_undangan.required' => 'Nama undangan harus diisi.',
        ];

        // Validasi input nama undangan
        $validator = Validator::make($request->all(), [
            'nama_undangan' => 'required|string', // Anda dapat menyesuaikan aturan validasi sesuai kebutuhan
        ], $messages);

        // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mendapatkan instance undanganAlt2 berdasarkan ID
        $undanganAlt2 = UndanganAlt2::findOrFail($undanganAlt2Id);

        // Memecah nama undangan menjadi array
        $nama_undangans = explode("\n", $request->nama_undangan);

        foreach ($nama_undangans as $nama_undangan) {
            $nama_undangan = trim($nama_undangan);

            $data = [
                'nama_undangan' => $nama_undangan,
            ];

            // Buat instance NamaUndangan
            $namaUndangan = new NamaUndanganAlt2($data);

            // Simpan model NamaUndangan terkait dengan undanganAlt2
            $undanganAlt2->namaUndangan()->save($namaUndangan);
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('nama-undangan-list2', $undanganAlt2Id)->with('success', 'Berhasil menambahkan data');
    }





    public function show($undanganAlt2Id, $id)
    {
        $namaUndangan = NamaUndanganAlt2::findOrFail($id);
        return view('user-alt2.show', compact('namaUndangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Di dalam controller
    public function edit(string $id)
    {
        $data = NamaUndanganAlt2::find($id);
        $undanganAlt2Id = $data->undangan_alt2_id;
        return view('user-alt2.edit', [
            'data' => $data,
            'undanganAlt2Id' => $undanganAlt2Id,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $undanganAlt2Id, string $id)
    {
        // Mendapatkan instance NamaUndangan berdasarkan ID
        $namaUndangan = NamaUndanganAlt2::findOrFail($id);

        // Update nama undangan
        $namaUndangan->nama_undangan = $request->nama_undangan;

        // Simpan perubahan
        $namaUndangan->save();

        // Redirect ke halaman list2 dengan pesan sukses
        return redirect()->route('nama-undangan-list2', $undanganAlt2Id)->with('success', 'Berhasil memperbarui data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id = null)
    {
        // Hapus data tunggal berdasarkan ID yang diterima
        $data = NamaUndanganAlt2::find($id);
        if ($data) {
            $data->delete();
            // Redirect back to the previous page
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }}
