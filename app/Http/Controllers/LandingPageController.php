<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = Blog::orderBy('id', 'desc')->paginate(4);
        return view('landing-page.index', [
          'data' => $data
        ]);
    }
}
