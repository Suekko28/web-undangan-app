<?php

namespace App\Http\Controllers;

use App\Http\Requests\alt2FormRequest;
use App\Models\alt2model;
use Illuminate\Http\Request;

class Alt2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = alt2model::orderBy('id', 'desc')->get();
        return view('undangan-mufli.index', compact('data'));
        //
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
    public function store(alt2FormRequest $request)
    {
        $data = $request->validated();
        alt2model::create($data);
        return redirect()->to('/undangan-alt2/index');
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
