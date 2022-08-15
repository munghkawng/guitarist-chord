<header class="p-3 mb-3 bg-primary">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/"
                class="d-flex align-items-center mb-2 mb-lg-0 text-warning text-decoration-none navbar-brand">
                <img src="{{ asset('img/new_logo.svg') }}" alt="guitarist-chord-logo" width="50" height="50">

            </a>
            {{-- Search Form --}}
            <form class="d-flex col-12 col-md-4 mb-lg-0 me-auto" method="get" action="{{ route('search') }}">
                <input class="form-control p-2 rounded-pill" type="search" name="q"
                    placeholder="Search Artists,Songs" id="search" autocomplete="off" value="{{ request('q') }}">
                <button class="btn d-none btn-outline-info ms-2 rounded-pill" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <ul class="nav nav-pills col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="{{ route('index.artist') }}" class="nav-link text-white">Artists</a></li>
                @guest
                    <li class="nav-item"><a href="/login" class="btn btn-primary bg-black me-2 rounded">Login</a></li>
                    <li class="nav-item"><a href="/register" class="btn btn-primary bg-black rounded">Create
                            Account</a></li>
                @else
                    <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ auth()->user()->avatar }}"
                            height="30px" class="rounded-circle me-2">{{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Sign Out</a></li>

                    </ul>


                @endguest


            </ul>

        </div>
    </div>
</header>
