<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{asset('/')}}" >
            <img src="{{asset('images/lgo.png')}}" alt="Logo" style="height: 80px; width: auto;" style="box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);">
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <li class="nav-item "><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('city.index')}}" class="nav-link">Wilayah</a></li>
                <li class="nav-item"><a href="{{route('destination.index')}}" class="nav-link">Destinasi</a></li>
                <li class="nav-item"><a href="{{route('article.index')}}" class="nav-link">Artikel</a></li>
                <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                {{-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
                @auth
                <li class="nav-item"><a href="{{url('/pesanan')}}" class="nav-link">Pesanan</a></li>
                @if (Auth::user()->canAccessFilament())
                <li class="nav-item"><a href="{{route('filament.pages.dashboard')}}" class="nav-link">Dashboard</a></li>
                @endif
                    <form action="{{url('/logout')}}" method="post" class="nav-item cta">
                        @csrf
                        <button class="btn">Log Out</button>
                    </form>
                    @else
                        <li class="nav-item cta"><a href="{{url('/login')}}" class="nav-link"><span>Sign In/Up</span></a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
