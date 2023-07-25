@extends('layout.main')
@section('content')
<?php use Carbon\Carbon;
?>
    <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('images/artikel.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }" style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Home |</a></span> <span>Artikel</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tips &amp;
                        Articles</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                {{-- Mulai --}}
                @forelse ($articles as $article)
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('article.show',['article'=>$article])}}" class="block-20" style="background-image: url('{{asset('uploads/'.$article->thumbnail)}}');">
                        </a>
                        <div class="text p-4 d-block">
                            <span class="tag">Tips, Travel</span>
                            <h3 class="heading mt-3"><a href="{{route('article.show',['article'=>$article])}}">{{$article->title}}</a></h3>
                            <div class="meta mb-3">
                                <div><a href="{{route('article.show',['article'=>$article])}}">{{ Carbon::parse($article->created_at)->isoFormat('dddd, D MMMM Y') }}</a></div>
                                <div><a href="{{route('article.show',['article'=>$article])}}">{{$article->user->name}}</a></div>
                                {{-- <div><a href="{{route('article.show',['article'=>$article])}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
                {{-- Akhir --}}
            </div>
            {{$articles->links()}}
        </div>
    </section>
@endsection
