<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery.index');
    }

    public function loadMore(Request $request)
    {
        $galleries = Gallery::paginate(20);
        return response()->json($galleries);
    }
}
