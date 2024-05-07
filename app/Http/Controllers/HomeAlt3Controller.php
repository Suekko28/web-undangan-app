<?php

namespace App\Http\Controllers;

use App\Models\UndanganAlt3;
use Illuminate\Http\Request;

class HomeAlt3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        $data = UndanganAlt3::orderBy('id', 'desc')->paginate(10);
        return view('admin.view-alt3', compact('data'));
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
        return view('admin.home-alt3', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan'));
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

        return view('undangan-nanang.home', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan', 'nama_undangan'));
    }

}
