<?php

namespace App\Http\Controllers;

use App\Models\NamaUndanganAlt3;
use App\Models\UndanganAlt3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NamaUndanganAlt3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($undanganAlt3Id)
    {
        $undanganAlt3 = UndanganAlt3::findOrFail($undanganAlt3Id);
        $namaUndangans = $undanganAlt3->NamaUndangan()->paginate(10);

        return view('user-alt3.index', compact('namaUndangans', 'undanganAlt3'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($undanganAlt3Id)
    {
        $undanganAlt3 = UndanganAlt3::findOrFail($undanganAlt3Id);
        return view('user-alt3.create', compact('undanganAlt3', 'undanganAlt3Id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $undanganAlt3Id)
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
        $undanganAlt3 = UndanganAlt3::findOrFail($undanganAlt3Id);

        // Memecah nama undangan menjadi array
        $nama_undangans = explode("\n", $request->nama_undangan);

        foreach ($nama_undangans as $nama_undangan) {
            $nama_undangan = trim($nama_undangan);

            $data = [
                'nama_undangan' => $nama_undangan,
            ];

            // Buat instance NamaUndangan
            $namaUndangan = new NamaUndanganAlt3($data);

            // Simpan model NamaUndangan terkait dengan undanganAlt2
            $undanganAlt3->namaUndangan()->save($namaUndangan);
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('nama-undangan-list3', $undanganAlt3Id)->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show($undanganAlt3Id, $id)
    {
        $namaUndangan = NamaUndanganAlt3::findOrFail($id);
        return view('user-alt3.show', compact('namaUndangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = NamaUndanganAlt3::find($id);
        $undanganAlt3Id = $data->undangan_alt3_id;
        return view('user-alt3.edit', [
            'data' => $data,
            'undanganAlt3Id' => $undanganAlt3Id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $undanganAlt3Id, string $id)
    {
        // Mendapatkan instance NamaUndangan berdasarkan ID
        $namaUndangan = NamaUndanganAlt3::findOrFail($id);

        // Update nama undangan
        $namaUndangan->nama_undangan = $request->nama_undangan;

        // Simpan perubahan
        $namaUndangan->save();

        // Redirect ke halaman list2 dengan pesan sukses
        return redirect()->route('nama-undangan-list3', $undanganAlt3Id)->with('success', 'Berhasil memperbarui data');
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
            NamaUndanganAlt3::whereIn('id', $selectedIds)->delete();

            return redirect()->route('nama-undangan-list3')->with('success', 'Data yang dipilih berhasil dihapus');
        } else {
            // Hapus data tunggal berdasarkan ID yang diterima
            $data = NamaUndanganAlt3::find($id);
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
