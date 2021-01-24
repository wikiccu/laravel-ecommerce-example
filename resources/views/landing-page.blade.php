@extends('layouts.app')
@section('title') صفحه نخست @endsection
@section('content')
    <!--
            Banner

            Additional classes:
            .small
            .xsmall
            .big
            .full
            -->
    <section class="youplay-banner banner-top youplay-banner-parallax">

        <div class="image" data-speed="0.4">
            <img src="{{ asset('images/dark/banner-bg.jpg') }}" alt="" class="jarallax-img">
        </div>


        <div class="info">
            <div>
                <div class="container">




                    <h1>دیابلو ۳: <br></h1>
                    <em>"بهترین بازی سال"</em>
                    <br><br><br>
                    <a class="btn btn-lg" href="#">خرید</a>



                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->




    <!--
                Carousel

                Additional classes:
                    .youplay-carousel-size-1
                    .youplay-carousel-size-2
                    .youplay-carousel-size-3
                    .youplay-carousel-size-4
                    .youplay-carousel-size-5
                    .youplay-carousel-size-6

                Additional attributes:
                    data-autoplay
                    data-loop
                    data-dots
                    data-arrows
                    data-stage-padding
                    data-item-padding
            -->
    <div class="youplay-carousel" data-autoplay="5000">
        @foreach ($products as $product)

            <a class="angled-img" href="{{ route('shop.show', $product->slug) }}">
                <div class="img">
                    <img src="{{ productImage($product->image) }}" alt="{{ $product->slug }}">
                </div>
                <div class="over-info">
                    <div>
                        <div>
                            <h4>{{ $product->name }}</h4>

                            <div class="rating">
                                <div class="rating-front" style="width: 100%;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-back">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xs-6">
                    <div class="price">
                        {{ $product->presentPrice() }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <!-- /Images With Text -->
    <!-- Specials -->
    <h2 class="container h1">ویژه ها <a href="{{ route('shop.index') }}" class="btn pull-right">همه بازی ها</a></h2>

    <!--
            Carousel

            Additional classes:
                .youplay-carousel-size-1
                .youplay-carousel-size-2
                .youplay-carousel-size-3
                .youplay-carousel-size-4
                .youplay-carousel-size-5
                .youplay-carousel-size-6

            Additional attributes:
                data-autoplay
                data-loop
                data-dots
                data-arrows
                data-stage-padding
                data-item-padding
            -->
    <div class="youplay-carousel">
        @foreach ($fproducts as $product)
            <a class="angled-img" href="{{ route('shop.show', $product->slug) }}">
                <div class="img">
                    <img src="{{ productImage($product->image) }}" alt="{{ $product->slug }}">
                </div>
                <div class="over-info">
                    <div>
                        <div>
                            <h4>{{ $product->name }}</h4>

                            <div class="rating">
                                <div class="rating-front" style="width: 100%;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-back">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xs-6">
                    <div class="price">
                        {{ $product->presentPrice() }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <!-- /Specials -->
    <!-- Partners -->
    <section class="youplay-banner youplay-banner-parallax small mt-80">
        <div class="image" data-speed="0.4">
            <img class="jarallax-img" src="{{ asset('images/dark/banner-bg.jpg') }}" alt="">
        </div>

        <div class="info align-center">
            <div>
                <h2 class="mb-40">Partners</h2>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!--
                                Carousel

                                Additional classes:
                                    .youplay-carousel-size-1
                                    .youplay-carousel-size-2
                                    .youplay-carousel-size-3
                                    .youplay-carousel-size-4
                                    .youplay-carousel-size-5
                                    .youplay-carousel-size-6

                                Additional attributes:
                                    data-autoplay
                                    data-loop
                                    data-dots
                                    data-arrows
                                    data-stage-padding
                                    data-item-padding
                            -->
                        <div class="youplay-carousel youplay-carousel-size-6" data-autoplay="6000" data-arrows="false"
                            data-stage-padding="0">
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-1.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-2.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-3.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-4.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-5.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-6.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-7.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/dark/partner-logo-8.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Partners -->


    <!-- Features -->
    <h2 class="container h1">چرا از ما بخرید؟</h2>
    <section class="youplay-features container">
        <div class="col-md-3 col-sm-6">
            <a class="feature angled-bg" href="#">
                <i class="fab fa-cc-visa"></i>
                <h3>تیم پشتیبانی 24 ساعته</h3>
                <small>پشتیبانی 24 ساعته در خدمت مشتریان گرامی </small>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature angled-bg">
                <i class="fa fa-gamepad"></i>
                <h3>حفظ اطلاعات </h3>
                <small>نگهداری امن از اطلاعات شما </small>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature angled-bg">
                <i class="far fa-money-bill-alt"></i>
                <h3>ضمانت پرداخت</h3>
                <small>ضمانت بازگشت وجه در صورت مشکل</small>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="feature angled-bg">
                <i class="fa fa-users"></i>
                <h3>انجام سفارش سریع</h3>
                <small>انجام سفارش ها در کوتاه ترین زمان </small>
            </div>
        </div>
    </section>
@endsection
