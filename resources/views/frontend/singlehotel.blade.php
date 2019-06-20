@extends('layouts.main')
@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend/img/single_hotel_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i></span>
                    <h1>Mariott Hotel</h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        from/per night <span><sup>$</sup>95</span>
                    </div>
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
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Category</a>
                </li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">
                <div id="single_tour_feat">
                    <ul>
                        <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                        <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                        <li><i class="icon_set_2_icon-110"></i>Poll</li>
                        <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                        <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                        <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                        <li><i class="icon_set_1_icon-27"></i>Parking</li>
                    </ul>
                </div>
                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>
                <!-- Map button for tablets/mobiles -->
                <div id="Img_carousel" class="slider-pro">
                    <div class="sp-slides">

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/1_medium.jpg')}}')}}" data-small="{{asset('frontend/img/slider_single_tour/1_small.jpg')}}')}}" data-medium="{{asset('frontend/img/slider_single_tour/1_medium.jpg')}}')}}" data-large="{{asset('frontend/img/slider_single_tour/1_large.jpg')}}')}}" data-retina="{{asset('frontend/img/slider_single_tour/1_large.jpg')}}')}}">
                        </div>
                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/2_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/2_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/2_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/2_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/2_large.jpg')}}">
                            <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                                Lorem ipsum dolor sit amet </h3>
                            <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                                consectetur adipisicing elit
                            </p>
                            <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/3_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/3_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/3_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/3_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/3_large.jpg')}}">
                            <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                                Lorem ipsum dolor sit amet
                            </p>
                            <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                                consectetur adipisicing elit
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/4_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/4_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/4_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/4_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/4_large.jpg')}}">
                            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/5_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/5_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/5_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/5_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/5_large.jpg')}}">
                            <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/6_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/6_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/6_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/6_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/6_large.jpg')}}">
                            <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/7_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/7_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/7_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/7_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/7_large.jpg')}}">
                            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/8_medium.jpg')}}" data-small="{{asset('frontend/img/slider_single_tour/8_small.jpg')}}" data-medium="{{asset('frontend/img/slider_single_tour/8_medium.jpg')}}" data-large="{{asset('frontend/img/slider_single_tour/8_large.jpg')}}" data-retina="{{asset('frontend/img/slider_single_tour/8_large.jpg')}}">
                            <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                                Lorem ipsum dolor sit amet
                            </p>
                            <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('frontend/css/images/blank.gif')}}" data-src="{{asset('frontend/img/slider_single_tour/9_medium.jpg')}}" data-small="img/slider_single_tour/9_small.jpg')}}" data-medium="img/slider_single_tour/9_medium.jpg')}}" data-large="img/slider_single_tour/9_large.jpg')}}" data-retina="img/slider_single_tour/9_large.jpg')}}">
                        </div>
                    </div>
                    <div class="sp-thumbnails">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/1_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/2_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/3_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/4_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/5_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/6_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/7_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/8_medium.jpg')}}">
                        <img alt="Image" class="sp-thumbnail" src="{{asset('frontend/img/slider_single_tour/9_medium.jpg')}}">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>Description</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                        </p>
                        <h4>Hotel facilities</h4>
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                    <li>Ut est saepe munere ceteros</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row  -->
                    </div>
                    <!-- End col-md-9  -->
                </div>
                <!-- End row  -->

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>Rooms Types</h3>
                    </div>
                    <div class="col-md-9">
                        <h4>Single Room</h4>
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                        </p>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_icons">
                                    <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                    <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                    <li><i class="icon_set_2_icon-106"></i> Safety box</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row  -->
                        <div class="carousel magnific-gallery">
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/1.jpg')}}"><img src="{{asset('frontend/img/carousel/1.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/2.jpg')}}"><img src="{{asset('frontend/img/carousel/2.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/3.jpg')}}"><img src="{{asset('frontend/img/carousel/3.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/4.jpg')}}"><img src="{{asset('frontend/img/carousel/4.jpg')}}" alt="Image">
                                </a>
                            </div>
                        </div>
                        <!-- End photo carousel  -->

                        <hr>

                        <h4>Double Room</h4>
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                        </p>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_icons">
                                    <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                    <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                    <li><i class="icon_set_2_icon-106"></i> Safety box</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row  -->
                        <div class="carousel magnific-gallery">
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/1.jpg')}}"><img src="{{asset('frontend/img/carousel/1.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/2.jpg')}}"><img src="{{asset('frontend/img/carousel/2.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/3.jpg')}}"><img src="{{asset('frontend/img/carousel/3.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('frontend/img/carousel/4.jpg')}}"><img src="{{asset('frontend/img/carousel/4.jpg')}}" alt="Image">
                                </a>
                            </div>
                        </div>
                        <!-- End photo carousel  -->
                    </div>
                    <!-- End col-md-9  -->
                </div>
                <!-- End row  -->

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>Reviews</h3>
                        <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a>
                    </div>
                    <div class="col-md-9">
                        <div id="score_detail"><span>7.5</span>Good <small>(Based on 34 reviews)</small>
                        </div>
                        <!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>Position
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Comfort
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Price
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>Quality
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            <img src="{{asset('frontend/img/avatar1.jpg')}}" alt="Image" class="img-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End review strip -->

                        <div class="review_strip_single">
                            <img src="{{asset('frontend/img/avatar2.jpg')}}" alt="Image" class="img-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End review strip -->

                        <div class="review_strip_single last">
                            <img src="{{asset('frontend/img/avatar3.jpg')}}" alt="Image" class="img-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                            </div>
                        </div>
                        <!-- End review strip -->
                    </div>
                </div>
            </div>
            <!--End  single_tour_desc-->

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>
                <div class="box_style_1 expose">
                    <h3 class="inner">Check Availability</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> Check in</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> Check out</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Adults</label>
                                <div class="numbers-row">
                                    <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Children</label>
                                <div class="numbers-row">
                                    <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <a class="btn_full" href="cart_hotel.html">Check now</a>
                    <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
                </div>
                <!--/box_style_1 -->

                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4><span>Book</span> by phone</h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>

            </aside>
        </div>
        <!--End row -->
    </div>
    <!--End container -->

    <div id="overlay"></div>
    <!-- Mask on input focus -->

</main>
<!-- End main -->

@endsection