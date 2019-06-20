@extends('layouts.main')
@section('content')
    @push('styles')
        <link href="{{ asset('frontend/css/shop.css') }}" rel="stylesheet">
    @endpush
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/single_author_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>{{$author->name}}</h1>
                        <span>{{$author->name}}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Bosh menu</a>
                    </li>
                    <li>Muallif</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-9">
                    <div class="related-products">
                        <div class="normal-title">
                            <h3>O'xshash kitoblar</h3>
                        </div>
                        <div class="row">
                            @foreach($books as $book)
                                <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{{route('book.show', $book->id)}}"><img src="{{asset('images')}}/{{$book->photo}}" alt="">
                                                </a>
                                            </figure>
                                            <div class="item-options clearfix">
                                                <a href="" class="btn_shop"><span class="icon-basket"></span>
                                                    <div class="tool-tip">
                                                        Ko'chirib olish
                                                    </div>
                                                </a>
                                                <a href="" class="btn_shop"><span class="icon-heart-8"></span>
                                                    <div class="tool-tip">
                                                        Add to Fav
                                                    </div>
                                                </a>
                                                <a href="{{route('book.show', $book->id)}}" class="btn_shop"><span class="icon-eye"></span>
                                                    <div class="tool-tip">
                                                        View
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product_description">
                                            <div class="rating">
                                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                                            </div>
                                            <h3><a href="{{route('book.show', $book->id)}}">{{$book->name}}</a></h3>
                                            <div class="price">
                                                <span class="offer">{{$book->discount}} %</span> {{$book->cost}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Shop Item-->
                            @endforeach
                        </div>
                    </div>
                    <!--End Related products-->

                </div>
                <!--End Product-details-->
            </div>
            <!--End Col-->

            <div class="col-md-3">
                <aside class="sidebar">
                    <div class="widget" id="cat_shop">
                        <h4>Mualliflar</h4>
                        <hr>
                        <ul>
                            @foreach($authors as $author)
                                <li><a href="{{route('author.show', $author->id)}}">{{$author->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End widget -->
                    <hr>
                    <div class="widget related-products">
                        <h4>Yangi </h4>
                        @foreach($asides as $aside)
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="{{route('book.show', $aside->id)}}"><img src="{{asset('images')}}/{{$aside->photo}}" alt=""></a>
                                </figure>
                                <h5><a href="{{route('book.show', $aside->id)}}">{{$aside->name}}</a></h5>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                                </div>
                                <div class="price">{{$aside->cost}} sum</div>
                            </div>
                        @endforeach
                    </div>
                </aside>
            </div>
            <!--Sidebar-->
        </div>
        </div>
        <!-- End Container -->
    </main>
    <!-- End main -->
@endsection