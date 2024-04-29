<?php

namespace App\Http\Controllers;

use App\Http\Requests\alt1FormRequest;
use App\Models\alt1model;
use App\Models\UndanganAlt1;
use Illuminate\Http\Request;

class Alt1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = alt1model::orderBy('id', 'desc')->get();
        return view('undangan-aldi.index', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $nama_undangan, Request $request)
    {

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(alt1FormRequest $request, $undanganAlt1Id, $nama_mempelai_laki, $nama_mempelai_perempuan, $nama_undangan)
    {
        // Temukan undangan berdasarkan ID yang diberikan
        $undanganAlt1 = UndanganAlt1::findOrFail($undanganAlt1Id);
    
        // Buat instance baru dari Alt1Model dan isi dengan data yang diberikan
        $alt1Model = new Alt1Model();
        $alt1Model->fill($request->validated());
    
        // Simpan Alt1Model ke dalam relasi undanganAlt1RSVP pada UndanganAlt1 yang sesuai
        $undanganAlt1->alt1Models()->save($alt1Model);
    
        return redirect()->route('undangan-alt1-index', [
            'nama_mempelai_laki' => $nama_mempelai_laki,
            'nama_mempelai_perempuan' => $nama_mempelai_perempuan,
            'nama_undangan' => $nama_undangan
        ])->with('success', 'Berhasil menambahkan data');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}