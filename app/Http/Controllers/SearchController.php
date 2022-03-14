<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Models\Post;
class SearchController extends Controller
{

    public function search(Request $request){
        $songs = Post::where('title','ilike','%'.$request->q.'%')
            ->orWhere('summary','ilike','%'.$request->q.'%')->get();
        if(count($songs)){
            return view('components.search',compact('songs'));

        }
        return view('components.empty_result');

    }
}
