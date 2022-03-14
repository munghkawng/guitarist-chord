<nav class="navbar navbar-expand-lg navbar-dark bg-primary  mb-4">
    <div class="container">
        <a class="navbar-brand text-uppercase text-success" href="/">Guitarist</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('home')? 'active':''}}" href="{{route('home')}}">Home
{{--                        <span class="visually-hidden">(current)</span>--}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('index.artist')? 'active':''}}" href="{{route('index.artist')}}">Artist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('lyrics')? 'active':''}}" href="{{route('lyrics')}}">Lyric</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com/c/dgtechmyanmar" target="_blank">Youtube</a>
                </li>

            </ul>

            <form class="d-flex w-50" method="get" action="{{route('search')}}" >
                <input class="form-control me-sm-2" type="search" name="q" placeholder="search a song or artist name" id="search" autocomplete="off">
                <button class="btn btn-info my-2 my-sm-0 ms-3" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>
