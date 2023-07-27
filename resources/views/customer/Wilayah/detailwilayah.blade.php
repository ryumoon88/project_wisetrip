@extends('layout.main')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('images/taman.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Home |</a></span> <span class="mr-2"><a
                                href="hotel.html">Wilayah |</a></span> <span>Detail Wilayah</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Detail Wilayah
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
                                <!-- Slide items -->
                            </div>
                        </div>
                        <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                            <h1>{{ $city->name }}</h1>

                            <p class="rate mb-5">
                                <span class="loc"><a href="/detaildestinasi"><i class="icon-map"></i> 291 South 21th
                                        Street,
                                        Suite 721 New York NY 10016</a></span>
                            </p>
                            <hr>
                            <p>{!! $city->body !!}</p>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Lokasi</h4>
                        <div class="block-16">
                            <figure>
                                <iframe style="height: 500px"
                                    src="https://maps.google.com/maps?q={{$city->meta['lat']}},{{$city->meta['long']}}&hl=en&z=14&amp;output=embed"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </figure>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <div class="block-16">
                                <figure>
                                    <img src="{{ asset('uploads/' . $city->images[0]) }}" alt="Image placeholder"
                                        class="img-fluid" style="width: 1000px; height: 300px;">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Destinasi yang berada di {{ $city->name }}</h4>
                            <div class="row">
                                {{-- Mulai --}}
                                @forelse ($destinations as $destination)
                                    @if ($destination->village->district->city->id == $city->id)
                                        <div class="col-md-4 ftco-animate">
                                            <div class="destination">
                                                <a href="{{ url('destination/' . $destination->id) }}"
                                                    class="img img-2 d-flex justify-content-center align-items-center"
                                                    style="background-image: url({{ asset('uploads/' . $destination->thumbnail) }});">
                                                    <div class="icon d-flex justify-content-center align-items-center">
                                                        <span class="icon-search2"></span>
                                                    </div>
                                                </a>
                                                <div class="text p-3">
                                                    <div class="d-flex">
                                                        <div class="one">
                                                            <h3><a
                                                                    href="{{ url('destination/' . $destination->id) }}">{{ $destination->name }}</a>
                                                            </h3>
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
                                                <span class="price">$200</span>
                                            </div> --}}
                                                    </div>
                                                    <p>{!! Str::limit(strip_tags($destination->description), 200, '...') !!}</p>
                                                    {{-- <p class="days"><span>2 days 3 nights</span></p> --}}
                                                    <hr>
                                                    <p class="bottom-area d-flex">
                                                        <span><i class="icon-map-o"></i>
                                                            {{ ucwords($destination->village->district->name . ', ' . $destination->village->district->city->name) }}</span>
                                                        <span class="ml-auto"><a
                                                                href="{{ url('destination/' . $destination->id) }}">Telusuri</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @empty
                                @endforelse
                                {{-- Akhir --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
