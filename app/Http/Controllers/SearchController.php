<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Models\Post;
class SearchController extends Controller
{

    public function search(Request $request){
        if($request->has('q')){
             $songs = Post::where('title','like','%'.$request->q.'%')
            ->orWhere('summary','like','%'.$request->q.'%')->get();
          
        }
       
        if(count($songs)){
            return view('components.search',compact('songs'));

        }
        return view('components.empty_result');

    }
}
