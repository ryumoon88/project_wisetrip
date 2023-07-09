@extends('layout.main')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/jembatan.png');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Home |</a></span> <span class="mr-2"><a
                                href="hotel.html">Destination |</a></span> <span>Destination Details</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination
                        Details</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="single-slider owl-carousel">
                                <div class="item">
                                    <div class="hotel-img" style="background-image: url(images/hotel-2.jpg);"></div>
                                </div>
                                <div class="item">
                                    <div class="hotel-img" style="background-image: url(images/hotel-3.jpg);"></div>
                                </div>
                                <div class="item">
                                    <div class="hotel-img" style="background-image: url(images/hotel-4.jpg);"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                            <h2>Museum Adityawarman</h2>
                            <p class="rate mb-5">
                                <span class="loc"><a href="#"><i class="icon-map"></i> 291 South 21th Street,
                                        Suite 721 New York NY 10016</a></span>

                                <span class="star">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    8 Rating</span>
                            </p>
                            <hr>
                            <h4 class="mb-4">Destination Details</h4>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                                her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                continued her way.</p>
                            <div class="d-md-flex mt-5 mb-5">
                                <ul>
                                    <li>The Big Oxmox advised her not to do so</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>She had a last view back on the skyline of her hometown </li>
                                    <li>Bookmarksgrove, the headline of Alphabet </li>
                                </ul>
                                <ul class="ml-md-5">
                                    <li>Question ran over her cheek, then she continued</li>
                                    <li>Pityful a rethoric question ran</li>
                                    <li>Mountains, she had a last view back on the skyline</li>
                                    <li>Headline of Alphabet Village and the subline</li>
                                </ul>
                            </div>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                                her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                continued her way.</p>
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Locations</h4>
                            <div class="block-16">
                                <figure>
                                    <img src="images/map.png" alt="Image placeholder" class="img-fluid"
                                        style="height: 500px">

                                </figure>
                            </div>
                        </div>


                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Review &amp; Ratings</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post" class="star-rating">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star"></i> 100
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star-o"></i> 30
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star-o"></i><i
                                                            class="icon-star-o"></i> 5
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star"></i><i
                                                            class="icon-star"></i><i class="icon-star-o"></i><i
                                                            class="icon-star-o"></i><i class="icon-star-o"></i> 0
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="icon-star"></i><i
                                                            class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                            class="icon-star-o"></i><i class="icon-star-o"></i> 0
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                            <h4 class="mb-4">Related Destination</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="/detaildestinasi" class="img img-2"
                                            style="background-image: url(images/hotel-1.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="/detaildestinasi">Pulau Mandeh</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Discover</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="/detaildestinasi" class="img img-2"
                                            style="background-image: url(images/hotel-2.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="/detaildestinasi">Lembah Harau</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Discover</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="/detaildestinasi" class="img img-2"
                                            style="background-image: url(images/hotel-3.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="/detaildestinasi">Gunung Singalang</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Discover</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <center>
                            <h3 class="heading mb-4">PEMESANAN</h3>
                        </center>
                        <form action="#">
                            <div class="fields">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="FullName">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="checkin_date" class="form-control"
                                        placeholder="Date from">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Jumlah Ticket">
                                </div>
                                <a> Total: </a><br>
                                <div class="form-group">
                                    <input type="submit" value="Pesan" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section> <!-- .section -->
@endsection
