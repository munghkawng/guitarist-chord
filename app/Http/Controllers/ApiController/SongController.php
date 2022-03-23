<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Canvas\Events\PostViewed;
use Illuminate\Http\Request;
use Canvas\Models\Post;

class SongController extends Controller
{
    // show all available songs
    public function index()
    {
        $songs = Post::with('tags')->published()->paginate(10);
        foreach ($songs as $song) {
            $song->body = strip_tags($song->body);
        }
        return response()->json($songs, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // show individual song
    public function show($slug)
    {
        $song = Post::with('topic')->firstWhere('slug', $slug);
        if ($song) {
            event(new PostViewed($song));
            $song->body = strip_tags($song->body);
            return response()->json($song);
        }
    }
}
