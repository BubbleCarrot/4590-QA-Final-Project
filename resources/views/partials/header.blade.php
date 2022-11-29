<header class="px-8">
    <div class="img-wrap">
        <a class="img-link" href="{{ route('home.index') }}" title="Home Page">
            <img src="{{asset('assets/images/logo.svg')}}" alt="Logo">
        </a>
    </div>
    <button class="gn-trigger" aria-labelledby="burger">
        <div class="burger"></div>
    </button>
    <nav class="gn">
        <ul class="gn-items">
            <li class="p-3">
                <a href="#">About</a>
            </li>
            <li class="p-3">
                <a href="{{ route('services.index') }}">Services</a>
            </li>
            <li class="p-3">
                <a href="#">Contact</a>
            </li>
            <li class="p-3">
                <a href="{{ route('book.index') }}">Book Now</a>
            </li>
        </ul>
    </nav>
</header>
