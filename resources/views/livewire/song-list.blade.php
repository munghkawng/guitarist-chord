<div class="row">

    @foreach ($posts as $key => $post)
        <div class="col-12 col-md-3 my-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-info"><i class="fa-solid fa-music"></i> {{ $post['title'] }}</h5>
                    <p class="card-text text-muted"><i class="fa-solid fa-microphone"></i>
                        {{ $post['summary'] }}</p>
                    <div class="d-grid">
                        <a href="{{ route('lyric.show', $post['slug']) }}" class="btn btn-outline-primary"><i
                                class="fa-solid fa-guitar"></i> Lyric</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @if ($hasMorePages)
        <div class="d-flex justify-content-center">
            <button wire:click="loadMore" class="btn btn-primary">
                Load More...
            </button>
        </div>
    @endif

</div>
