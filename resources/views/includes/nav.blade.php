<header class="p-3 mb-3 bg-primary">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/"
                class="d-flex align-items-center mb-2 mb-lg-0 text-warning text-decoration-none navbar-brand">
                <img src="{{ asset('img/new_logo.svg') }}" alt="guitarist-chord-logo" width="50" height="50">

            </a>
            {{-- Search Form --}}
            <form class="d-flex col-12 col-md-9 mb-lg-0 mx-auto" method="get" action="{{ route('search') }}">
                <input class="form-control p-2" type="search" name="q" placeholder="Search Artists,Songs"
                    id="search" autocomplete="off" value="{{ request('q') }}">
                <button class="btn btn-outline-info ms-2" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul class="nav nav-pills col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="{{ route('index.artist') }}"
                        class="nav-link px-2 {{ Route::is('index.artist') ? 'active' : '' }}">Artists</a></li>


            </ul>


        </div>
    </div>
</header>
