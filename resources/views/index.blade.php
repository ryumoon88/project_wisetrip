@extends('layout.main')
@section('content')
<<<<<<< Updated upstream
=======
    <?php use App\Models\Article; ?>
>>>>>>> Stashed changes
    <div class="hero-wrap js-fullheight" style="background-image: url('images/Museum_Adityawarman_20211213.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- INFORMASI ADAT -->
    <section class="ftco-section services-section ">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
<<<<<<< Updated upstream
=======
                        {{-- Mulai disini --}}
                        <div class="item">
                            <div class="destination">
                                <a href="{{url('article/1')}}" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{asset('images/pacujawi.jpg')}});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{url('article/1')}}">Pacu Jawi</a></h3>
                                    <span class="listing">Pariaman</span>
                                </div>
                            </div>
                        </div>
                        {{-- akhir --}}
                        {{-- Mulai disini --}}
                        {{-- @forelse ($cultures as culture)
>>>>>>> Stashed changes
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/pacujawi.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Pacu Jawi</a></h3>
                                    <span class="listing">Pariaman</span>
                                </div>
                            </div>
                        </div>
<<<<<<< Updated upstream
=======
                        @empty

                        @endforelse --}}
                        {{-- akhir --}}
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------- -->


    <!-- WISATA POPULAR -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">

                    <h2 class="mb-4"><strong>Wisata Popular</strong></h2>
<<<<<<< Updated upstream
                    <span class="subheading">SIn publishing and graphic design, Lorem ipsum is a placeholder text
                        commonly used to demonstrate the visual form of a document or a typeface without relying on
                        meaningful content.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-1.jpg);">
=======
                    <span class="subheading">Rekomendasi wisata berdasarkan pilihan konsumer.
                </div>
            </div>
            <div class="row">
                {{-- Mulai --}}
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="{{url('/detaildestinasi')}}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url({{asset('images/restaurant-1.jpg')}});">
>>>>>>> Stashed changes
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
<<<<<<< Updated upstream
                            <h3><a href="#">Luxury Restaurant</a></h3>
=======
                            <h3><a href="{{url('/detaildestinasi')}}">Luxury Restaurant</a></h3>
>>>>>>> Stashed changes

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
<<<<<<< Updated upstream
                                <span class="ml-auto"><a href="#">Discover</a></span>
=======
                                <span class="ml-auto"><a href="{{url('/detaildestinasi')}}">Discover</a></span>
>>>>>>> Stashed changes
                            </p>
                        </div>
                    </div>
                </div>
<<<<<<< Updated upstream
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-2.jpg);">
=======
                {{-- @forelse ($destinations as $destination)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="{{url('/detaildestinasi')}}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url({{asset('uploads/'.$destination->image)}});">
>>>>>>> Stashed changes
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
<<<<<<< Updated upstream
                            <h3><a href="#">Luxury Restaurant</a></h3>

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                <span class="ml-auto"><a href="#">Book Now</a></span>
=======
                            <h3><a href="{{url('/detaildestinasi')}}">{{$destination->name}}</a></h3>

                            <p>{{$destination->description}}s</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i>{{$destionation->kelurahan}}</span>
                                <span class="ml-auto"><a href="{{url('/detaildestinasi')}}">Telusuri</a></span>
>>>>>>> Stashed changes
                            </p>
                        </div>
                    </div>
                </div>
<<<<<<< Updated upstream
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-3.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Luxury Restaurant</a></h3>

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                <span class="ml-auto"><a href="#">Book Now</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-4.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Luxury Restaurant</a></h3>

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                <span class="ml-auto"><a href="#">Book Now</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Luxury Restaurant</a></h3>

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                <span class="ml-auto"><a href="#">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-2.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Luxury Restaurant</a></h3>

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                <span class="ml-auto"><a href="#">Book Now</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-3.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Luxury Restaurant</a></h3>

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                <span class="ml-auto"><a href="#">Book Now</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(images/restaurant-4.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Luxury Restaurant</a></h3>

                            <p>Far far away, behind the word mountains, far from the countries</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                <span class="ml-auto"><a href="#">Book Now</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



=======
                @empty

                @endforelse --}}
                {{-- Akhir --}}
        </div>
    </section>

>>>>>>> Stashed changes
    <!-- VIDEO -->
    <section class="ftco-destination">
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
<<<<<<< Updated upstream
                            <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID_HERE" target="_blank">
=======
                            <img class="play-icon position-absolute w-10 h-10" src="{{asset('images/icon.png')}}"
                                style="width: 450px; height: 450px;">
                            {{-- <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID_HERE" target="_blank">
>>>>>>> Stashed changes
                                <img class="position-absolute w-100 h-100" src="images/destination-1.jpg"
                                    style="object-fit: cover;">
                                <img class="play-icon position-absolute w-10 h-10" src="images/playbutton.png "
                                    style="width: 80px; height: 80px;">
<<<<<<< Updated upstream
                            </a>
=======
                            </a> --}}
>>>>>>> Stashed changes
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="video bg-white p-4 p-lg-5 my-lg-5">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                            <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                            <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                                duo eos et erat sed diam duo</p>

<<<<<<< Updated upstream
                            <a href="" class="btn btn-primary mt-1">Book Now</a>
=======
                            <a href="{{url('/destination')}}" class="btn btn-primary mt-1">Book Sekarang</a>
>>>>>>> Stashed changes
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTIKEL -->
    <section class="ftco-destination bg-light">
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-7 heading-section ftco-animate">
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
                        <h2 class="mb-4"><strong>Tips & Artikel</strong></h2>
                        <span class="subheading">SIn publishing and graphic design, Lorem ipsum is a placeholder text
                            commonly used to demonstrate the visual form of a document or a typeface without relying on
                            meaningful content.</span>
                    </div>
<<<<<<< Updated upstream
                    <div class="col-lg-6" style="min-height: 400px;">
=======
                    {{-- Mulai --}}
                    <?php $articles = Article::All(); ?>
                    @forelse ($articles as $article)
                        <div class="col-lg-6" style="min-height: 400px;">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('uploads/' . $article->thumbnail) }}"
                                    alt="Destination Image">
                                <div class="card-body">
                                    <h6 class="text-primary text-uppercase" style="letter-spacing: 1px;">Budaya | Tips
                                    </h6>
                                    <h2 class="mb-3">{{ucwords($article->title)}}</h2>
                                    <p class="card-text">{!!(Str::limit(strip_tags($article->body), 200, '...'))!!}
                                    </p><br>
                                    <a href="{{url('article/'.$article->id)}}" class="btn btn-primary mt-1">Read More</a>
                                </div>
                            </div>
                        </div>
                    @empty
>>>>>>> Stashed changes
                        <div class="card">
                            <img class="card-img-top" src="images/destination-1.jpg" alt="Destination Image">
                            <div class="card-body">
                                <h6 class="text-primary text-uppercase" style="letter-spacing: 1px;">Cerita | Tips
                                </h6>
                                <h2 class="mb-3">Travel Stories</h2>
                                <p class="card-text">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore
                                    sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed
                                    ipsum et kasd ut. Erat duo eos et erat sed diam duo Dolores lorem lorem ipsum sit et
                                    ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                </p>
                                <a href="" class="btn btn-primary mt-1">Read More</a>
                            </div>
                        </div>
<<<<<<< Updated upstream
                    </div>

                    <div class="col-lg-6">
=======
                    @endforelse
                    {{-- <div class="col-lg-6" style="min-height: 400px;">
                        <div class="card">
                            <img class="card-img-top" src="images/destination-1.jpg" alt="Destination Image">
                            <div class="card-body">
                                <h6 class="text-primary text-uppercase" style="letter-spacing: 1px;">Cerita | Tips
                                </h6>
                                <h2 class="mb-3">Travel Stories</h2>
                                <p class="card-text">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore
                                    sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed
                                    ipsum et kasd ut. Erat duo eos et erat sed diam duo Dolores lorem lorem ipsum sit et
                                    ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                </p>
                                <a href="" class="btn btn-primary mt-1">Read More</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- Akhir --}}
                    <div class="col-lg-6">
                        {{-- Mulai --}}
>>>>>>> Stashed changes
                        <div class="bg-white p-4 p-lg-5 ">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 1px;">Destinasi | Travel
                            </h6>
                            <h2 class="mb-3">We Provide Best Tour Packages In Your Budget</h2>
                            <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                                duo eos et erat sed diam duo</p>

                            <a href="" class="btn btn-primary mt-1">Read More</a>
                        </div> <br>
                        <div class="bg-white p-4 p-lg-5 ">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 1px;">Tips | Travel</h6>
                            <h2 class="mb-3">We Provide Best Tour Packages In Your Budget</h2>
                            <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                                duo eos et erat sed diam duo</p>

                            <a href="" class="btn btn-primary mt-1">Read More</a>
                        </div>
<<<<<<< Updated upstream
                    </div>

=======
                        {{-- Akhir --}}
                    </div>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>

    </section>
@endsection
