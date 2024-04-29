<?php

namespace App\Http\Controllers;

use App\Models\UndanganAlt1;
use Illuminate\Http\Request;

class ViewAlt1Controller extends Controller
{
    public function index()
    {
        $data = UndanganAlt1::orderBy('id', 'desc')->paginate(10);
        return view('admin.view-alt1', compact('data'));
    }

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
    public function show(string $nama_mempelai_laki, string $nama_mempelai_perempuan, string $nama_undangan)
    {
        $data = UndanganAlt1::where('nama_undangan', $nama_undangan)
                            ->where('nama_mempelai_laki', $nama_mempelai_laki)
                            ->where('nama_mempelai_perempuan', $nama_mempelai_perempuan)
                            ->firstOrFail();
        return view('undangan-aldi.home', compact('data', 'nama_mempelai_laki', 'nama_mempelai_perempuan', 'nama_undangan'));
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


