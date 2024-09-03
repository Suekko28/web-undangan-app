<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFormRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::orderBy('id', 'desc')->paginate(4);
        return view('blog.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogFormRequest $request)
    {
        $data = $request->all();
        $userId = auth()->user()->id;

        $data['user_id'] = $userId;

        Blog::create($data);

        return redirect()->route('blog.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Blog::find($id);
        return view('blog.edit', [
            "data" => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogFormRequest $request, string $id)
    {

        $data = $request->all();
        $userId = auth()->user()->id;
        $data['user_id'] = $userId;

        Blog::create($data);

        return redirect()->route('blog.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Blog::find($id)->delete();
        return redirect()->route('blog.index')->with('success', 'Berhasil Menghapus Data');
    }
}
