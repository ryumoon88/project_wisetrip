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
                <li class="nav-item "><a href="{{asset('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{asset('/wilayah')}}" class="nav-link">Wilayah</a></li>
                <li class="nav-item"><a href="{{asset('/destinasi')}}" class="nav-link">Destinasi</a></li>
                <li class="nav-item"><a href="{{asset('/artikel')}}" class="nav-link">Artikel</a></li>
                <li class="nav-item"><a href="{{asset('/contact')}}" class="nav-link">Contact</a></li>
                {{-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
                @auth
                <li class="nav-item"><a href="{{asset('/pesanan')}}" class="nav-link">Pesanan</a></li>
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
