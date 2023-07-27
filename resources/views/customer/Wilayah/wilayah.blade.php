@extends('layout.main')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/wl.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Home |</a></span> <span>Wilayah</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Wilayah</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Cari Kota</h3>
                        <form method="GET" role="form" action="{{url('/city')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="fields">
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control"
                                            placeholder="Keyword search" required>
                                            <option value="">Pilih Kota</option>
                                            @forelse ($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                            @empty

                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="row">
                        {{-- Mulai --}}
                        @forelse ($cities as $city)
                            <div class="col-md-4 ftco-animate" >
                                <div class="destination">
                                    <a href="{{url('city/'.$city->id)}}"
                                        class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url({{ asset('uploads/' . $city->thumbnail) }});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="{{url('city/'.$city->id)}}">{{ ucwords($city->name) }}</a></h3>
                                            </div>
                                        </div>
                                        <p>{!! Str::limit(strip_tags($city->body), 200, '...') !!}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                        {{-- Akhir --}}

                    </div>
                    {{$cities->links()}}
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
@endsection
