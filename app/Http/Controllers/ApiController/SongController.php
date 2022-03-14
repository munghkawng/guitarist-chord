<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Canvas\Models\Post;

class SongController extends Controller
{
    public function index(){
        $songs = Post::with('tags')->published()->get();
        foreach ($songs as $song){
            $song->body = strip_tags($song->body);
        }
        return response()->json($songs,200,[],JSON_UNESCAPED_UNICODE);

    }

    public function show($id){
        $song = Post::firstWhere($id);
        return response()->json($song);
    }
}
