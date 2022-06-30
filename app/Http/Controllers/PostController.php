<?php

namespace App\Http\Controllers;

use Canvas\Events\PostViewed;

use Illuminate\Http\Request;
use Canvas\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::with('tags')->published()->paginate(16);

        return view('components.index');
    }

    public function show_all_lyrics()
    {
        $posts = Post::with('tags')->inRandomOrder()->published()->get();
        
        return view('components.all_lyrics', compact('posts'));
    }

    public function show($slug)
    {
        $song = Post::with('tags', 'topic')->firstWhere('slug', $slug);
       

        //dd($song->tags[0]->slug);
        $socialShareButtons = \Share::page(url()->current(), $slug)
            ->facebook()
            ->twitter()
            ->reddit()
            ->telegram()
            ->whatsapp()
            ->getRawLinks();
        $randomSong = Post::with('tags')->inRandomOrder()->where('slug', '!=', $slug)->get();

        if ($song) {
            event(new PostViewed($song));
            return view('components.view_lyric', compact('song', 'randomSong', 'socialShareButtons'));
        }
    }


}
