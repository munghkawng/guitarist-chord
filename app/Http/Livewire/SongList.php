<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Canvas\Models\Post;
use Illuminate\Support\Collection;

class SongList extends Component
{
    public $posts;

    public $pageNumber = 1;

    public $hasMorePages;

    public function mount()
    {
        $this->posts = new Collection();

        $this->loadMore();
    }

    public function render()
    {
        
        

        return view('livewire.song-list');
    }

    public function loadMore(){
        
       $posts = Post::paginate(16, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $posts->hasMorePages();

        $this->posts->push(...$posts->items());

    }
}
