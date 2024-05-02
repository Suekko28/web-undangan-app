<?php

namespace App\Http\Controllers;

use App\Models\NamaUndangan;
use App\Models\UndanganAlt1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NamaUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index($undanganAlt1Id)
        {
            $undanganAlt1 = UndanganAlt1::findOrFail($undanganAlt1Id);
            $namaUndangans = $undanganAlt1->NamaUndangan()->paginate(10);

            return view('user.index', compact('namaUndangans', 'undanganAlt1'));
        }




    public function create($undanganAlt1Id)
    {
        $undanganAlt1 = UndanganAlt1::findOrFail($undanganAlt1Id);
        return view('user.create', compact('undanganAlt1', 'undanganAlt1Id'));
    }




    public function store(Request $request, $undanganAlt1Id)
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
    
        // Mendapatkan instance UndanganAlt1 berdasarkan ID
        $undanganAlt1 = UndanganAlt1::findOrFail($undanganAlt1Id);
    
        // Memecah nama undangan menjadi array
        $nama_undangans = explode("\n", $request->nama_undangan);
    
        foreach ($nama_undangans as $nama_undangan) {
            $nama_undangan = trim($nama_undangan);
    
            $data = [
                'nama_undangan' => $nama_undangan,
            ];
    
            // Buat instance NamaUndangan
            $namaUndangan = new NamaUndangan($data);
    
            // Simpan model NamaUndangan terkait dengan UndanganAlt1
            $undanganAlt1->namaUndangan()->save($namaUndangan);
        }
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('nama-undangan-list', $undanganAlt1Id)->with('success', 'Berhasil menambahkan data');
    }





    public function show($undanganAlt1Id, $id)
    {
        $namaUndangan = NamaUndangan::findOrFail($id);
        return view('user.show', compact('namaUndangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Di dalam controller
    public function edit(string $id)
    {
        $data = NamaUndangan::find($id);
        $undanganAlt1Id = $data->undangan_alt1_id;
        return view('user.edit', [
            'data' => $data,
            'undanganAlt1Id' => $undanganAlt1Id,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $undanganAlt1Id, string $id)
    {
        // Mendapatkan instance NamaUndangan berdasarkan ID
        $namaUndangan = NamaUndangan::findOrFail($id);

        // Update nama undangan
        $namaUndangan->nama_undangan = $request->nama_undangan;

        // Simpan perubahan
        $namaUndangan->save();

        // Redirect ke halaman list dengan pesan sukses
        return redirect()->route('nama-undangan-list', $undanganAlt1Id)->with('success', 'Berhasil memperbarui data');
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
            NamaUndangan::whereIn('id', $selectedIds)->delete();

            return redirect()->route('nama-undangan-list')->with('success', 'Data yang dipilih berhasil dihapus');
        } else {
            // Hapus data tunggal berdasarkan ID yang diterima
            $data = NamaUndangan::find($id);
            if ($data) {
                $data->delete();
                // Redirect back to the previous page
                return redirect()->back()->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }
        }
    }




}
