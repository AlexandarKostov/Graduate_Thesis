<nav id="navbar-example2" class="navbar fixed-top navbar-expand-md navbar-light bg-black px-3 py-3">
    <a class="navbar-brand ps-5" href="{{ route('courses.index') }}"><img class="logo" src="{{ asset('images/Logo-white.png') }}" alt="..." /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-auto">
            @foreach ($courses as $course)
            <li class="nav-item">
                <a class="nav-link mb-0 fw-bold text-white text-uppercase" href="{{ route('courses.show', $course->slug) }}">{{ $course->name }}</a>
            </li>
            @endforeach
            <div class="dropdown">
                <button class="btn fw-bold text-white text-uppercase dropdown-toggle" type="button" id="podcastDropDownMenu" data-bs-toggle="dropdown">
                Podcast
                </button>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </ul>
        <ul class="navbar-nav pe-5">
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link"><img src="{{ asset('images/person.png') }}" alt="..." width="40" height="34" /></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link mb-0 text-white"><button type="button" class="btn btn-danger fw-bold text-uppercase shadow-white">
                        Register
                    </button></a>
            </li>
        </ul>
    </div>
</nav>