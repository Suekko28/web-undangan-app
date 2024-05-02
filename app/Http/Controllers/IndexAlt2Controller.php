<?php

namespace App\Http\Controllers;

use App\Http\Requests\alt2FormRequest;
use App\Models\alt2model;
use App\Models\UndanganAlt2;
use Illuminate\Http\Request;

class IndexAlt2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = alt2model::orderBy('id', 'desc')->get();
        return view('undangan-mufli.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(alt2FormRequest $request, $nama_mempelai_laki, $nama_mempelai_perempuan, $nama_undangan)
    {
        // Temukan undangan berdasarkan nama_mempelai_laki, nama_mempelai_perempuan, dan nama_undangan
        $undanganAlt1 = UndanganAlt2::where('nama_mempelai_laki', $nama_mempelai_laki)
            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
            ->whereHas('namaUndangan', function ($query) use ($nama_undangan) {
                $query->where('nama_undangan', $nama_undangan);
            })
            ->firstOrFail();

        // Buat instance baru dari alt2Model dan isi dengan data yang diberikan
        $alt2Model = new alt2model();
        $alt2Model->fill($request->validated());

        // Simpan alt2Model ke dalam relasi undanganAlt1RSVP pada UndanganAlt1 yang sesuai
        $undanganAlt1->alt2Models()->save($alt2Model);

        // Redirect kembali ke halaman showDetail dengan parameter yang sesuai
        return redirect()->route('undangan-alt2-index', compact('nama_mempelai_laki', 'nama_mempelai_perempuan', 'nama_undangan'))
            ->with('success', 'Berhasil menambahkan data');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $nama_mempelai_laki, string $nama_mempelai_perempuan)
    {
        $data = UndanganAlt2::where('nama_mempelai_laki', $nama_mempelai_laki)
            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
            ->firstOrFail();

        return view('admin.index-alt2 ', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showDetail(string $nama_mempelai_laki, string $nama_mempelai_perempuan, string $nama_undangan)
    {
        $data = UndanganAlt2::where('nama_mempelai_laki', $nama_mempelai_laki)
            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
            ->whereHas('namaUndangan', function ($query) use ($nama_undangan) {
                $query->where('nama_undangan', $nama_undangan);
            })
            ->firstOrFail();

        // Retrieve alt1models related to the UndanganAlt1 instance
        $alt1models = $data->alt1Models;

        // Pass both $data (UndanganAlt1) and $alt1models (related Alt1Model instances) to the view
        return view('undangan-mufli.index', compact('data', 'alt1models', 'nama_mempelai_laki', 'nama_mempelai_perempuan', 'nama_undangan'));
    }
}