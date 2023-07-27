@extends('layout.main')
@section('content')
    <?php use Carbon\Carbon;
    ?>
    <link rel="stylesheet" href="{{ asset('css/pesanan.css') }}">
    <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('images/taluak.jpg') }});">
        <div class="custom-custom-overlay"></div>
        <div class="custom-container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="/">Home |</a></span> <span>Pesanan</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Pesanan</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="title">
        <p>Tiket Pesanan Anda</p>
    </div>
    <hr>

    @forelse ($orders as $order)
        @if ($order->user_id == Auth::user()->id)
            <div class="tiket">
                <div class="header">
                    <p>{{ $order->destination->name }}</p>
                    <p>{{ $order->service->name }}</p>
                </div>
                <div class="isi">
                    <div class="isi1">
                        <div class="keberangkatan">
                            <h3>{{ $order->invoice }}</h3>
                            <p>{{ Carbon::parse($order->date_booking)->isoFormat('dddd, D MMMM Y') }}
                            </p>
                            <p> {{ $order->destination->village->district->city->name }},
                                {{ $order->destination->village->district->city->province->name }}</p>
                        </div>
                        <div class="tujuan">
                            <h3>Status</h3>
                            <br>
                            <p>{{ $order->status }}
                            </p>
                        </div>
                        <div class="harga">
                            <h3>Rp. {{ number_format($order->service->price, 2, ',', '.') }}</h3>
                            <p>/tiket</p>
                        </div>
                    </div>
                    <div class="isi2">
                        <div class="totalharga">
                            <h3>Jumlah Tiket : {{ $order->quantity }}</h3>
                            <h1>Total : Rp. {{ $order->quantity * $order->service->price }}</h1>
                        </div>
                        <div class="button">
                            @if ($order->status != 'Accepted')
                                <form action="{{ url('order/' . $order->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="batal" name="button" type="submit"
                                        onclick="return confirm('Yakin membatalkan pesanan ini ?')">Batal</button>
                                </form>
                                <form action="{{ url('order/' . $order->id . '/edit') }}" method="get">
                                    <button class="ubah" type="submit" name="button">Ubah</button>
                                </form>
                                {{-- <form action="{{ url('order/' . $order->id) }}" method="get">
                                    <button class="bayar" name="button" type="submit">Bayar</button>
                                </form> --}}
                                <a href="{{ url('order/' . $order->id) }}" class="bayar">Bayar</a>


                            @else
                                <form action="{{ url('order/' . $order->id) }}" method="get">
                                    <button class="bayar" type="submit" name="button">Bukti Pembayaran</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @empty
    @endforelse

    <!-- end-tiket -->
@endsection
