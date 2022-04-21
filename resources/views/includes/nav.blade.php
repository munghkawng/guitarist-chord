<header class="p-3 mb-3 bg-primary">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-warning text-decoration-none">
                <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="54">

            </a>

            <ul class="nav nav-pills col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 {{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('index.artist') }}" class="nav-link px-2 {{ Route::is('index.artist') ? 'active' : '' }}">Artist</a></li>

            </ul>
            <div class="d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5 justify-content-center">
                <div class="g-ytsubscribe" data-channelID="UCC1dSgcWeBU6wXrrhWfDzTA" data-layout="default" data-count="default"></div>
            </div>
            {{-- <div class="g-ytsubscribe" data-channelID="UCC1dSgcWeBU6wXrrhWfDzTA" data-layout="default"
                data-count="default"></div> --}}
            <form class="d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="get" action="{{ route('search') }}">
                <input class="form-control" type="search" name="q" placeholder="song or artist name" id="search" autocomplete="off">
                <button class="btn btn-outline-info ms-2" type="submit">Search</button>
            </form>

        </div>
    </div>
</header>