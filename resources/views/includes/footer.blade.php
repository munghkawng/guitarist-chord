<footer class="container d-flex flex-wrap justify-content-between align-content-center py-3 my-4  border-top">
    <div class="col-md-4 mb-0">
        <span class="fs-4">&copy;</span> {{ date('Y') }} GuitaristChord.com
    </div>


    <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <a href="www.youtube.com"><i class="fa-brands fa-youtube text-danger fa-2xl"></i></a>


    </div>
    <ul class="nav col-md-4 justify-content-end">
        <a href="{{ route('about') }}" class="nav-link px-2 text-info">About</a>

        <a href="{{ route('privacy') }}" class="nav-link px-2 text-info">Privacy Policy</a>
        <a href="{{ route('disclaminer') }}" class="nav-link px-2 text-info">Disclaimer</a>
        <a href="{{ route('contact.submit') }}" class="nav-link px-2 text-info">Contact Us</a></li>

    </ul>
</footer>
