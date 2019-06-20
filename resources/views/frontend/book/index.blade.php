@extends('layouts.main')
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/nimagadur.jpg')}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Sharqshunoslik institutining elektron savdo tizimi</h1>
                <p>Kitob mutolaasiga yangicha yondashuv!</p>
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
                    <li>Kitoblar</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <aside class="col-lg-3 col-md-3">
                    <h5 class="text-center" id="tools">Toifalar</h5>
                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            @if(count($categories)>0)
                                @foreach($categories as $category)
                            <li><a href="{{route('category.show', $category->id)}}" ><i class="icon_set_1_icon-51"></i>{{$category->name}} <span>(15)</span></a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <h5 class="text-center" id="tools">Mualliflar</h5>
                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            @if(count($authors)>0)
                                @foreach($authors as $author)
                                    <li><a href="{{route('author.show', $author->id)}}" ><i class="icon_set_1_icon-51"></i>{{$author->name}} <span>(15)</span></a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </aside>
                <!--End aside -->
                <div class="col-lg-9 col-md-9">

                    <div id="tools">

                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="styled-select-filters">
                                    <select name="sort_price" id="sort_price">
                                        <option value="" selected>Nomi bo'yicha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="styled-select-filters">
                                    <select name="sort_rating" id="sort_rating">
                                        <option value="" selected>Turi bo'yicha</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 hidden-xs text-right">
                                <a href="" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class=" icon-list"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--/tools -->

                    @if(count($books)>0)
                        @foreach($books as $book)
                            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="ribbon_3 popular"><span>{{ ($book->category_id==1)?'popular':'new' }}</span>
                                        </div>
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                        </div>
                                        <div class="img_list">
                                            <a href="{{route('book.index')}}/{{$book->id}}"><img src="{{asset('images')}}/{{$book->photo}}" alt="Image">
                                                <div class="short_info"><i class="icon_set_1_icon-4"></i>{{$book->category->name}} </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-xs-block"></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="tour_list_desc">
                                            <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                                            </div>
                                            <h3><strong>{{$book->name}}</strong></h3>
                                            <h4>Muallif : {{$book->author->name}}</h4>
                                            <p>{{$book->description}}</p>
                                            <ul class="add_info">
                                                <li>
                                                    <div class="tooltip_styled tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="icon_set_1_icon-33"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>{{$book->name}}</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tooltip_styled tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="icon_set_1_icon-6"></i></span>
                                                        <div class="tooltip-content">
                                                            <p>{{$book->description}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tooltip_styled tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="icon_set_1_icon-70"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>{{$book->author->name}}</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tooltip_styled tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="icon-basket-1"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>{{$book->cost}} sum</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="price_list">
                                            <div><sup></sup>{{$book->cost}}<span class="normal_price_list">{{$book->discount.'%'}}</span><small>*dona</small>
                                                <h4>Uz</h4>
                                                <p><a href="{{route('book.index')}}/{{$book->id}}" class="btn_1">Ko'rish</a>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End strip -->
                        @endforeach
                    @endif

                    <hr>
                    <div class="text-center">
                        {{ $books->links() }}
                    </div>
                    <!-- end pagination-->

                </div>
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->

@endsection