<header class="bg-white text-dark border pb-3">
    <div class="container pt-3">
        <nav class="navbar container navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand text-dark font-36 fw-600 me-4" href="{{ url('') }}">{{ $webname }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="d-flex col-lg-8 mt-1" action="{{ url('search') }}" method="GET">
                        @csrf
                        <input class="form-control me-2" name="search" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-warning me-4" type="submit">Search</button>
                    </form>

                    <ul class="navbar-nav m-auto ">

                        <li class="nav-item ml-3">
                            <a class="nav-link text-dark fw-600 " href="/brands">BRAND</a>
                        </li>

                        <li class="nav-item ml-3">
                            <a class="nav-link text-dark fw-600 " href="/dealers">DEALER</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link text-dark fw-600 " href="/contact">CONTACT</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>
