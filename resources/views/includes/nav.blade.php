<header class="p-3 mb-3 bg-primary">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-warning text-decoration-none">
                <img src="{{asset('img/logo.png')}}" alt="" width="50" height="54">

            </a>

            <ul class="nav nav-pills col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 {{Route::is('home')? 'active':''}}">Home</a></li>
                <li class="nav-item"><a href="{{route('index.artist')}}" class="nav-link px-2 {{Route::is('index.artist')? 'active':''}}">Artist</a></li>
                <li class="nav-item"><a href="{{route('lyrics')}}" class="nav-link px-2 {{Route::is('lyrics')? 'active':''}} ">Lyrics</a></li>
                <li class="nav-item"><a href="https://www.youtube.com/c/kachinsonglyrics" target="_blank" class="nav-link px-2 ">Youtube</a></li>

            </ul>
            <form class="d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="get" action="{{route('search')}}" >
                <input class="form-control" type="search" name="q" placeholder="song or artist name" id="search" autocomplete="off">
                <button class="btn btn-outline-info ms-2" type="submit">Search</button>
            </form>







        </div>
    </div>
</header>

{{--<nav class="navbar navbar-expand-lg navbar-dark bg-primary  mb-4">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand text-uppercase text-success" href="/">Guitarist</a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarColor01">--}}
{{--            <ul class="navbar-nav me-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link {{Route::is('home')? 'active':''}}" href="{{route('home')}}">Home--}}
{{--                        <span class="visually-hidden">(current)</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link {{Route::is('index.artist')? 'active':''}}" href="{{route('index.artist')}}">Artist</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link {{Route::is('lyrics')? 'active':''}}" href="{{route('lyrics')}}">Lyric</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="https://www.youtube.com/c/dgtechmyanmar" target="_blank">Youtube</a>--}}
{{--                </li>--}}

{{--            </ul>--}}

{{--            <form class="d-flex w-50" method="get" action="{{route('search')}}" >--}}
{{--                <input class="form-control me-sm-2" type="search" name="q" placeholder="search a song or artist name" id="search" autocomplete="off">--}}
{{--                <button class="btn btn-info my-2 my-sm-0 ms-3" type="submit">Search</button>--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
