<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Models\Post;
use Canvas\Models\Tag;



class SitemapXmlController extends Controller
{
    public function index(){
        $posts = Post::all();
        $artists = Tag::with('posts')->get();
        return response()->view('sitemap',compact('posts','artists'))
            ->header('Content-Type','application/xml');

    }
}
