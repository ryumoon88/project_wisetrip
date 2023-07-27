@extends('layout.main')
@section('content')
    <?php use App\Models\Article; ?>
    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('images/bg_home.png')}});">
        <div class="overlay"></div>
    </div>
    <!-- INFORMASI ADAT -->
    <section class="ftco-section services-section ">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
                        {{-- Mulai disini --}}
                        @forelse ($cultures as $culture)
                            <div class="item">
                                <div class="destination">
                                    <a href="{{ url('article/' . $culture->id) }}"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url({{ asset('uploads/' . $culture->thumbnail) }});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="{{ url('article/' . $culture->id) }}">{{ $culture->title }}</a></h3>
                                        <span class="listing">{{ $culture->village->district->city->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
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
                    <span class="subheading">Rekomendasi wisata berdasarkan pilihan konsumer.
                </div>
            </div>
            <div class="row">
                {{-- Mulai --}}
                @forelse ($destinations as $destination)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="destination">
                            <a href="{{ url('destination/' . $destination->id) }}"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url({{ asset('uploads/' . $destination->thumbnail) }});">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a
                                        href="{{ url('destination/' . $destination->id) }}">{{ ucwords($destination->name) }}</a>
                                </h3>

                                <p>{!! Str::limit(strip_tags($destination->description), 40, '...') !!}</p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i>
                                        {{ ucwords($destination->village->district->name) }}</span>
                                    <span class="ml-auto"><a
                                            href="{{ url('destination/' . $destination->id) }}">Telusuri</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
    </section>

    <!-- VIDEO -->
    <section class="ftco-destination">
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            {{-- <img class="play-icon position-absolute w-10 h-10" src="{{ asset('images/icon.png') }}"
                                style="width: 450px; height: 450px;"> --}}
                            <a href="https://www.youtube.com/watch?v=kX-yZtVd5Sg" target="_blank">
                                <img class="position-absolute w-100 h-100" src="{{asset('images/Museum_Adityawarman_20211213.jpg')}}"
                                    style="object-fit: cover;">
                                <img class="play-icon position-absolute w-10 h-10" src="images/playbutton.png "
                                    style="width: 80px; height: 80px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5" id="Kami">
                        <div class="video bg-white p-4 p-lg-5 my-lg-5">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tentang Kami</h6>
                            <h1 class="mb-3">Kami Menyediakan destinasi Sumatera Barat yang jarang dikunjungi</h1>
                            <p>Sumatera Barat masih banyak rahasia destinasi yang menarik dan menakjubkan, sehingga pemandangannya masih asli dan asri.
                                Dengan layanan Wise Trip, kami antarkan anda ke tempat yang tak terduga.
                            </p>

                            <a href="{{ url('/destination') }}" class="btn btn-primary mt-1">Pesan Sekarang</a>
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
                        <h2 class="mb-4"><strong>Tips & Artikel Budaya</strong></h2>
                        <span class="subheading">Menyajikan konten artikel dan tips untuk pengguna mendapatkan referensi terbaru dan unik. Artikel dibuat dan dikurasi langsung oleh kurator terkenal.</span>
                    </div>
                    {{-- Mulai --}}
                    <div class="col-lg-6" style="min-height: 400px;">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('uploads/' . $first_article->thumbnail) }}"
                                alt="Destination Image" style="min-height: 400px;">
                            <div class="card-body">
                                <h6 class="text-primary text-uppercase" style="letter-spacing: 1px;">Budaya | Tips
                                </h6>
                                <h2 class="mb-3">{{ ucwords($first_article->title) }}</h2>
                                <p class="card-text">{!! Str::limit(strip_tags($first_article->body), 200, '...') !!}
                                </p><br>
                                <a href="{{ url('article/' . $first_article->id) }}"
                                    class="btn btn-primary mt-1">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    {{-- Akhir --}}
                    <div class="col-lg-6">
                        {{-- Mulai --}}
                        @forelse ($other_article as $article)
                            <div class="bg-white p-4 p-lg-5 ">
                                <h6 class="text-primary text-uppercase" style="letter-spacing: 1px;">Destinasi | Travel
                                </h6>
                                <h2 class="mb-3">{{ ucwords($article->title) }}</h2>
                                <p>{!! Str::limit(strip_tags($article->body), 200, '...') !!}</p>

                                <a href="{{ url('article/' . $article->id) }}"
                                    class="btn btn-primary mt-1">Selengkapnya</a>
                            </div> <br>
                        @empty
                        @endforelse
                        {{-- Akhir --}}
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
