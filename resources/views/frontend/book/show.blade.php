@extends('layouts.main')
@section('content')
    @push('styles')
        <link href="{{ asset('frontend/css/shop.css') }}" rel="stylesheet">
    @endpush
    <section class="parallax-window" data-parallax="scroll"
             data-image-src="{{asset('frontend/img/single_tour_bg_1.jpg')}}" data-natural-width="1400"
             data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>{{$book->company_name}}</h1>
                        <span>{{$book->address}}</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3 class="text-right text-primary"><b>{{$book->telephone}}</b></h3>
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
                    <li><a href="#">Bosh sahifa</a>
                    </li>
                    <li><a href="#">Kitoblar</a>
                    </li>
                    <li>Kitob</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-9">

                    <div class="product-details">

                        <div class="basic-details">
                            <div class="row">
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <figure class="image-box"><img src="{{asset('images/')}}/{{$book->photo}}" alt="">
                                    </figure>
                                </div>
                                <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="details-header">
                                        <h2>{{$book->name}}</h2>
                                        <div class="item-price">
                                            <span class="offer">{{$book->discount}} %</span> {{$book->cost}}
                                        </div>
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i> (3 marta yuklangan)
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>{{$book->description}}</p>
                                    </div>
                                    <div class="other-options">
                                        <div class="numbers-row">
                                            <input type="text" value="0" id="quantity_1" class="qty2 form-control"
                                                   name="quantity_1">
                                        </div>
                                                                                <a href="{{asset('upload')}}/{{$book->name}}.pdf" class="btn_1">Ko'rish </a>
                                        <a href="{{route('book.download',[$book->id, $book->name])}}" class="btn_1">Yuklab
                                            olish</a>
                                    </div>
                                    <!--Item Meta-->
                                    <ul class="item-meta">
                                        <li>Toifasi: <a
                                                    href="{{route('category.show', $book->category->id)}}">{{$book->category->name}}</a>
                                        <li>Muallif: <a
                                                    href="{{route('author.show', $book->author->id)}}">{{$book->author->name}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Basic Details-->

                        <div class="related-products">
                            <div class="normal-title">
                                <h3>Tegishli kitoblar</h3>
                            </div>
                            <div class="row">
                                @foreach($books as $book)
                                    <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="{{route('book.show', $book->id)}}"><img
                                                                src="{{asset('images')}}/{{$book->photo}}" alt="">
                                                    </a>
                                                </figure>
                                                <div class="item-options clearfix">
                                                    <a href="" class="btn_shop"><span class="icon-basket"></span>
                                                        <div class="tool-tip">Yuklab olish</div>
                                                    </a>
                                                    <a href="" class="btn_shop"><span class="icon-heart-8"></span>
                                                        <div class="tool-tip">Like</div>
                                                    </a>
                                                    <a href="{{route('book.show', $book->id)}}" class="btn_shop"><span
                                                                class="icon-eye"></span>
                                                        <div class="tool-tip">Ko'rish</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product_description">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                            class="icon-star voted"></i><i
                                                            class="icon-star voted"></i><i class="icon-star-empty"></i>
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
                            <h4>Toifalar</h4>
                            <hr>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{route('category.show', $category->id)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End widget -->
                        <hr>
                        <div class="widget related-products">
                            <h4>Kitoblar </h4>
                            @foreach($asides as $aside)
                                <div class="post">
                                    <figure class="post-thumb">
                                        <a href="{{route('book.show', $aside->id)}}"><img
                                                    src="{{asset('images')}}/{{$aside->photo}}" alt=""></a>
                                    </figure>
                                    <h5><a href="{{route('book.show', $aside->id)}}">{{$aside->name}}</a></h5>
                                    <div class="rating">
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star-empty"></i>
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
