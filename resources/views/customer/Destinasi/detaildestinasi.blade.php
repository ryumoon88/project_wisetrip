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
                                @forelse($images??[] as $image)
                                    <div class="item">
                                        <div class="hotel-img"
                                            style="background-image: url({{ asset('uploads/' . $image) }});">
                                        </div>
                                    </div>

                                @empty
                                @endforelse
                                {{-- <div class="item">
                                    <div class="hotel-img" style="background-image: url(images/hotel-3.jpg);"></div>
                                </div>
                                <div class="item">
                                    <div class="hotel-img" style="background-image: url(images/hotel-4.jpg);"></div>
                                </div> --}}
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
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Lokasi</h4>
                            <div class="block-16">
                                <figure>
                                    <iframe style="height: 500px"
                                        src="https://maps.google.com/maps?q={{ $destination->village->district->city->meta['lat'] }},{{ $destination->village->district->city->meta['long'] }}&hl=en&z=14&amp;output=embed"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                            <h4 class="mb-4">Destinasi Lainnya</h4>
                            <div class="row">
                                {{-- Mulai --}}
                                @forelse ($destinations as $related)
                                    <div class="col-md-4">
                                        <div class="destination">
                                            <a href="{{ url('destination/' . $related->id) }}" class="img img-2"
                                                style="background-image: url({{ asset('uploads/' . $related->thumbnail) }});"></a>
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <div class="one">
                                                        <h3><a
                                                                href="{{ url('destination/' . $related->id) }}">{{ ucwords($related->name) }}</a>
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
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div> --}}
                                                </div>
                                                <p>{!! ucwords(Str::limit(strip_tags($destination->description), 200, '...')) !!}</p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i>
                                                        {{ ucwords($related->village->district->name . ', ' . $related->village->district->city->name) }}</span>
                                                    <span class="ml-auto"><a
                                                            href="{{ url('destination/' . $related->id) }}">Telusuri</a></span>
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
                        <form action="{{ url('order') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="fields">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ Auth::user()->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email"
                                        value="{{ Auth::user()->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nomor HP"
                                        value="{{ Auth::user()->phonenumber }}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Tanggal Pesan"
                                        name="date_booking" value="{{ 'date_booking' }}">
                                </div>
                                <div class="form-group">
                                    <select name="service_id" class="form-control" id="priceService" required>
                                        <option value="">Pilih Tiket/Layanan</option>
                                        @forelse ($services as $service)
                                            @if ($service->destination->id == $destination->id)
                                                <option value="{{ $service->id }}" name="{{ $service->price }}">
                                                    {{ $service->name }}, Rp.
                                                    {{ number_format($service->price, 2, ',', '.') }}</option>
                                            @endif

                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Jumlah Ticket" name="quantity"
                                        value="{{ old('quantity') }}" id="sumTicket">
                                </div>
                                <a id="total" style="font-size: 48px"> Total: </a><br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary py-3 px-5">Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <script>
                        const priceService = document.getElementById('priceService');
                        const sumTicket = document.getElementById('sumTicket');
                        const total = document.getElementById('total');

                        priceService.addEventListener('change', function() {
                            const selectedOption = priceService.selectedOptions[0];
                            const price = selectedOption.getAttribute('name');
                            const sum = sumTicket.value;

                            const result = sum * price;

                            total.textContent = "Total : Rp." + result;
                        })

                        sumTicket.addEventListener('change', function() {
                            const selectedOption = priceService.selectedOptions[0];
                            const price = selectedOption.getAttribute('name');
                            const sum = sumTicket.value;

                            const result = sum * price;

                            total.textContent = "Total : Rp." + result;
                        })
                    </script>

                </div>
            </div>
        </div>
    </section> <!-- .section -->
@endsection
