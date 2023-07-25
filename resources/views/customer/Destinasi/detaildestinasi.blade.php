@extends('layout.main')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('images/jembatan.png') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Beranda |</a></span> <span class="mr-2"><a
                                href="hotel.html">Destinasi |</a></span> <span>Detail Destinasi</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Detail Destinasi
                    </h1>
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
                            <h2>{{ ucwords($destination->name) }}</h2>
                            <p class="rate mb-5">
                                <span class="loc"><a href="#"><i class="icon-map"></i>
                                        {{ ucwords($destination->village->name . ', ' . $destination->village->district->name . ', ' . $destination->village->district->city->name) }}</a></span>

                                {{-- <span class="star">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    8 Rating</span> --}}
                            </p>
                            <hr>
                            <h4 class="mb-4">Destination Details</h4>
                            <p>{!! ucwords($destination->description) !!}</p>
                            {{-- <div class="d-md-flex mt-5 mb-5">
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
                                continued her way.</p> --}}
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Lokasi</h4>
                            <div class="block-16">
                                <figure>
                                    <iframe style="height: 500px"
                                        src="https://maps.google.com/maps?q={{$destination->village->district->city->meta['lat']}},{{$destination->village->district->city->meta['long']}}&hl=en&z=14&amp;output=embed"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </figure>
                            </div>
                        </div>


                        {{-- <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
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
                        </div> --}}
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                            <h4 class="mb-4">Destinasi Lainnya</h4>
                            <div class="row">
                                {{-- Mulai --}}
                                @forelse ($destinations as $related)
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="{{ url('destination/' . $related->id) }}" class="img img-2"
                                            style="background-image: url({{ asset('uploads/'.$related->thumbnail) }});"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="{{ url('destination/' . $related->id) }}">{{ucwords($related->name)}}</a></h3>
                                                    {{-- <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p> --}}
                                                </div>
                                                {{-- <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div> --}}
                                            </div>
                                            <p>{!! ucwords(Str::limit(strip_tags($destination->description), 200, '...')) !!}</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> {{ucwords($related->village->district->name.', '.$related->village->district->city->name)}}</span>
                                                <span class="ml-auto"><a href="{{ url('destination/' . $related->id) }}">Telusuri</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse
                                {{-- Akhir --}}
                            </div>
                        </div>

                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <center>
                            <h3 class="heading mb-4">Pemesanan</h3>
                        </center>
                        <form action="{{url('order')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
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
                                    <button type="submit" class="btn btn-primary py-3 px-5">Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section> <!-- .section -->
@endsection
