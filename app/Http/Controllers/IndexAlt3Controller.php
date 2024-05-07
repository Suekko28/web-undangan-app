<?php

namespace App\Http\Controllers;

use App\Models\alt3models;
use App\Models\UndanganAlt3;
use Illuminate\Http\Request;

class IndexAlt3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = alt3models::orderBy('id', 'desc')->get();
        return view('undangan-nanang.index', compact('data'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nama_mempelai_laki, string $nama_mempelai_perempuan)
    {
        $data = UndanganAlt3::where('nama_mempelai_laki', $nama_mempelai_laki)
            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
            ->firstOrFail();

        return view('admin.index-alt3 ', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan'));
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
        $data = UndanganAlt3::where('nama_mempelai_laki', $nama_mempelai_laki)
            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
            ->whereHas('namaUndangan', function ($query) use ($nama_undangan) {
                $query->where('nama_undangan', $nama_undangan);
            })
            ->firstOrFail();

        // Retrieve alt1models related to the UndanganAlt1 instance
        $alt3models = $data->alt3Models;

        // Pass both $data (UndanganAlt1) and $alt1models (related Alt1Model instances) to the view
        return view('undangan-nanang.index', compact('data', 'alt3models', 'nama_mempelai_laki', 'nama_mempelai_perempuan', 'nama_undangan'));
    }

}
