@extends('layout.main')
@section('content')
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

    <div class="tiket">
        <div class="header">
            <p>Pantai Air Manis</p>
            <p>Padang</p>
        </div>
        <div class="isi">
            <div class="isi1">
                <div class="keberangkatan">
                    <h3>PAM02PDG</h3>
                    <p>21, Agustus 2023
                    </p>
                    <p> Padang, Sumatera Barat.</p>
                </div>
                {{-- <div class="tujuan">
                    <h3>Tujuan</h3>
                    <br>
                    <p>.
                    </p>
                </div> --}}
                <div class="harga">
                    <h3>Rp.5000</h3>
                    <p>/tiket</p>
                </div>
            </div>
            <div class="isi2">
                <div class="totalharga">
                    <h3>Jumlah Tiket : 5</h3>
                    <h1>Total : Rp. 25000</h1>
                </div>
                <div class="button">

                    <form action="{{ url('order/1') }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="batal" name="button" type="submit"
                            onclick="return confirm('Yakin membatalkan pesanan ini ?')">Batal</button>
                    </form>
                    <form action="{{ url('order/1/edit') }}" method="get">
                        <button class="ubah" type="submit" name="button">Ubah</button>
                    </form>
                    <form action="{{ url('order/1') }}" method="post">
                        @method('PUT')
                        @csrf
                        <button class="bayar" name="button" type="submit"
                            onclick="return confirm('Yakin membayar tiket ini')">Bayar</button>
                    </form>
                    <form action="{{ url('order/1') }}" method="get">
                        <button class="bayar" type="submit" name="button">Tampilkan tiket</button>
                    </form>

                    {{-- @if ($pesanan->status == 'dipesan')
                        <form action="{{ url('order/' . $pesanan->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="batal" name="button" type="submit"
                                onclick="return confirm('Yakin membatalkan pesanan ini ?')">Batal</button>
                        </form>
                        <form action="{{ url('order/' . $pesanan->id . '/edit') }}" method="get">
                            <button class="ubah" type="submit" name="button">Ubah</button>
                        </form>
                        <a href="{{url('order/'.$pesanan->id.'/edit')}}">Ubah</a>
                        <form action="{{ url('bayar/' . $pesanan->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <button class="bayar" name="button" type="submit" onclick="return confirm('Yakin membayar tiket ini')">Bayar</button>
                        </form>
                    @else
                        <form action="{{ url('tiketku/' . $pesanan->id) }}" method="get">
                            <button class="bayar" type="submit" name="button">Tampilkan tiket</button>
                        </form>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>

    <!-- end-tiket -->

    {{-- @forelse ($pesanans as $pesanan)
        <div class="tiket">
            <div class="header">
                <p>{{ ucwords($pesanan->jadwal->rute->bus->nama) }}</p>
                <p>{{ ucwords($pesanan->jadwal->rute->bus->class_bus->nama) }}</p>
            </div>
            <div class="isi">
                <div class="isi1">
                    <div class="keberangkatan">
                        <h3>keberangkatan</h3>
                        <p>{{ Carbon::parse($pesanan->jadwal->keberangkatan)->isoFormat('dddd, D MMMM Y') }}, Pukul:
                            {{ strftime('%H:%M', strtotime($pesanan->jadwal->keberangkatan)) }}</p>
                        <p> {{ ucwords($pesanan->jadwal->rute->awal->nama . ', ' . $pesanan->jadwal->rute->awal->alamat . ', ' . $pesanan->jadwal->rute->awal->kelurahan->nama . ', ' . $pesanan->jadwal->rute->awal->kelurahan->kecamatan->nama . ', ' . $pesanan->jadwal->rute->awal->kelurahan->kecamatan->kabupaten->nama . ', ' . $pesanan->jadwal->rute->awal->kelurahan->kecamatan->kabupaten->provinsi->nama) }}.
                        </p>
                    </div>
                    <div class="tujuan">
                        <h3>Tujuan</h3>
                        <br>
                        <p>{{ ucwords($pesanan->jadwal->rute->tujuan->nama . ', ' . $pesanan->jadwal->rute->tujuan->alamat . ', ' . $pesanan->jadwal->rute->tujuan->kelurahan->nama . ', ' . $pesanan->jadwal->rute->tujuan->kelurahan->kecamatan->nama . ', ' . $pesanan->jadwal->rute->tujuan->kelurahan->kecamatan->kabupaten->nama . ', ' . $pesanan->jadwal->rute->tujuan->kelurahan->kecamatan->kabupaten->provinsi->nama) }}.
                        </p>
                    </div>
                    <div class="harga">
                        <h3>Rp. {{ number_format($pesanan->jadwal->harga, 2, ',', '.') }}</h3>
                        <p>/kursi</p>
                    </div>
                </div>
                <div class="isi2">
                    <div class="totalharga">
                        <h3>Jumlah Bangku : {{ $pesanan->jumlah }} </h3>
                        <h1>Total : Rp. {{ number_format($pesanan->total, 2, ',', '.') }}</h1>
                    </div>
                    <div class="button">
                        @if ($pesanan->status == 'dipesan')
                            <form action="{{ url('order/' . $pesanan->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="batal" name="button" type="submit"
                                    onclick="return confirm('Yakin membatalkan pesanan ini ?')">Batal</button>
                            </form>
                            <form action="{{ url('order/' . $pesanan->id . '/edit') }}" method="get">
                                <button class="ubah" type="submit" name="button">Ubah</button>
                            </form>
                            {{-- <a href="{{url('order/'.$pesanan->id.'/edit')}}">Ubah</a> --}}
    {{-- <form action="{{ url('bayar/' . $pesanan->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <button class="bayar" name="button" type="submit" onclick="return confirm('Yakin membayar tiket ini')">Bayar</button>
                            </form>
                        @else
                            <form action="{{ url('tiketku/' . $pesanan->id) }}" method="get">
                                <button class="bayar" type="submit" name="button">Tampilkan tiket</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- end-tiket -->
        <br>

    @empty
        <div class="tiket">
            Sepertinya kamu belum pesan tiketnya... <a href="{{ url('/') }}">Yuk pesan!!! </a>
        </div>
    @endforelse --}}
@endsection
