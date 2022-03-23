<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Canvas\Models\Tag;

class ArtistController extends Controller
{

    public function index()
    {
        $artists = Tag::with('posts')->get();
        return response()->json($artists);
    }


    public function showArtistSongs($slug)
    {
        $songs = Tag::with('posts')->firstWhere('slug', $slug);

        return response()->json($songs);
    }
}
