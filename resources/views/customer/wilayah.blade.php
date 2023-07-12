@extends('layout.main')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
                <div class="header-text">
                    <h2><em>Wilayah</em> </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/main">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"
                                style="font-family: 'Montserrat', sans-serif;">Wilayah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->
    </div>
    {{-- TIPS&ARTICLE --}}
    <section class="contest-waiting">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Kota & Daerah</h5><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut asperiores
                        quisquam voluptas excepturi! Dolorem ad eius in obcaecati earum accusamus unde harum aliquid
                        voluptas non hic optio, rerum deserunt doloremque?</span>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="assets/images/bkt.png" class="card-img-top" alt="..."style="height: 350px; ">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/images/pdg.png" class="card-img-top" alt=""style="height: 350px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/images/padangpariaman.png" class="card-img-top"
                                alt=""style="height: 350px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/images/pariaman.png" class="card-img-top" alt=""
                                style="height: 350px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/images/pp.png" class="card-img-top" alt=""style="height: 350px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/images/solok.png" class="card-img-top" alt="" style="height: 350px;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
