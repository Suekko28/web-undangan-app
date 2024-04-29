<?php

namespace App\Http\Controllers;

use App\Http\Requests\alt3FormRequest;
use App\Models\Alt3Model;
use Illuminate\Http\Request;

class Alt3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $data = Alt3Model::orderBy('id', 'desc')->get();
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
    public function store(alt3FormRequest $request)
    {
        $data = $request->validated();
        Alt3Model::create($data);
        return redirect()->to('/undangan-alt3/index');
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
