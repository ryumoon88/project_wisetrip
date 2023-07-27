@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
    <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('images/taluak.jpg') }});">
        <div class="custom-custom-overlay"></div>
        <div class="custom-container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="/">Home |</a></span> <span>Pesanan</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Pembayaran</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="title">
        <p>Tata Cara Pembayaran</p>
        <p>1. Transfer pembayaran ke nomor rekening </p>
        <p>Bank Nagari: 3020192310 A.N Wise Trip</p>
        <p>Bank BRI: 3508298820 A.N Wise Trip</p>
        <p>2. Screen shoot atau salin atau foto hasil transfer pembayaran.</p>
        <p>3. Kirim hasil pembayaran dengan menekan tombol "Choose File", lalu pilih gambar atau foto hasil pembayaran.</p>
        <p>4. Setelah sesuai, lalu tekan kirim untuk konfirmasi pembayaran.</p>
    </div>

    <div class="tiket">
        <div class="header">
            {{-- <p>Hahhah</p>
            <p>Hahdahs</p> --}}
        </div>
        <div class="isi">
            <form action="{{ url('order/' . $order->id) }}" class="proof-form" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="file" name="payment_proof" @error('payment_proof')is-invalid
                @enderror"
                    id="imageInput" required>

                <img src="" alt="Bukti Pembayaran" id="previewImage">

                <button class="bayar" type="submit" onclick="return confirm('Yakin kirim ini?')">Kirim</button>

            </form>

            <script>
                const imageInput = document.getElementById('imageInput');
                const previewImage = document.getElementById('previewImage');

                imageInput.addEventListener('change', function() {
                    if (imageInput.files && imageInput.files[0]) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            previewImage.src = e.target.result;
                        }

                        reader.readAsDataURL(imageInput.files[0]);
                    }
                });
            </script>
        </div>
    </div>

    <!-- end-tiket -->
@endsection
