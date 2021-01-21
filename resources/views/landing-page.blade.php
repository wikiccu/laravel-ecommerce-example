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
{{-- @forelse ($products as $product)
                        <div class="item col-lg-4 col-md-6 col-xs-12" data-filters="popular">
                            <a href="{{ route('shop.show', $product->slug) }}" class="angled-img">
                                <div class="img img-offset">
                                    <img src="{{ productImage($product->image) }}" alt="{{ $product->slug }}">
                                </div>
                                <div class="bottom-info">
                                    <h4>{{ $product->name }}</h4>
                                    <div class="row">
                                        <div class="col-xs-6">

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
                                        <div class="col-xs-6">
                                            <div class="price">
                                                {{ $product->presentPrice() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                     @endforelse --}}
<div class="youplay-carousel" data-autoplay="5000">
<a class="angled-img" href="store-product-1.html">
    <div class="img">
        <img src="{{ asset('images/dark/game-bloodborne-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Bloodborne</h4>
                
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-dark-souls-ii-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Dark Souls II</h4>
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-lords-of-the-fallen-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Lords of the Fallen</h4>
                
<div class="rating">
<div class="rating-front" style="width: 80%;">
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-middle-eart-shadow-of-mordor-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Middle-earth: Shadow of Mordor</h4>
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-soul-sacrifice-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Soul Sacrifice</h4>
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-kingdoms-of-amalur-reckoning-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Kingdoms of Amalur: Reckoning</h4>
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-the-witcher-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>The Witcher: Rise of the White Wolf</h4>
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-diablo-iii-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Diablo III: Reaper of Souls</h4>
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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

            </div></div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img">
        <img src="{{ asset('images/dark/game-dragons-dogma-500x375.jpg') }}" alt="">
    </div>
    <div class="over-info">
        <div><div>
                <h4>Dragons Dogma</h4>
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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

            </div></div>
    </div>
</a>
</div>
<!-- /Images With Text -->


<!-- Specials -->
<h2 class="container h1">Specials <a href="#" class="btn pull-right">See More</a></h2>

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
<a class="angled-img" href="#">
    <div class="img img-offset">
        <img src="{{ asset('images/dark/game-dark-souls-ii-500x375.jpg') }}" alt="">
        <div class="badge bg-default">
            -20%
        </div>
    </div>
    <div class="bottom-info">
        <h4>Dark Souls II</h4>
        <div class="row">
            <div class="col-xs-6">
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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
            <div class="col-xs-6">
                <div class="price">$39.99 <sup><del>$49.99</del></sup></div>
            </div>
        </div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img img-offset">
        <img src="{{ asset('images/dark/game-prototype-500x375.jpg') }}" alt="">
        <div class="badge bg-default">
            +10%
        </div>
    </div>
    <div class="bottom-info">
        <h4>Prototype 3</h4>
        <div class="row">
            <div class="col-xs-6">
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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
            <div class="col-xs-6">
                <div class="price">$52 <sup><del>$47</del></sup></div>
            </div>
        </div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img img-offset">
        <img src="{{ asset('images/dark/game-half-life-3-500x375.jpg') }}" alt="">
        <div class="badge bg-default">
            So Sad
        </div>
    </div>
    <div class="bottom-info">
        <h4>Half Life 3</h4>
        <div class="row">
            <div class="col-xs-6">
                
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
            <div class="col-xs-6">
                <div class="price"><span class="text-danger">NEVER</span></div>
            </div>
        </div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img img-offset">
        <img src="{{ asset('images/dark/game-lords-of-the-fallen-500x375.jpg') }}" alt="">
        <div class="badge bg-default">
            -25%
        </div>
    </div>
    <div class="bottom-info">
        <h4>Lords of the Fallen</h4>
        <div class="row">
            <div class="col-xs-6">
                
<div class="rating">
<div class="rating-front" style="width: 70%;">
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
            <div class="col-xs-6">
                <div class="price">$26.25 <sup><del>$35.00</del></sup></div>
            </div>
        </div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img img-offset">
        <img src="{{ asset('images/dark/game-dragons-dogma-500x375.jpg') }}" alt="">
        <div class="badge bg-default">
            -30%
        </div>
    </div>
    <div class="bottom-info">
        <h4>Dragons Dogma</h4>
        <div class="row">
            <div class="col-xs-6">
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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
            <div class="col-xs-6">
                <div class="price">$34.99 <sup><del>$49.99</del></sup></div>
            </div>
        </div>
    </div>
</a>
<a class="angled-img" href="#">
    <div class="img img-offset">
        <img src="{{ asset('images/dark/game-soul-sacrifice-500x375.jpg') }}" alt="">
        <div class="badge bg-success">
            -100%
        </div>
    </div>
    <div class="bottom-info">
        <h4>Soul Sacrifice</h4>
        <div class="row">
            <div class="col-xs-6">
                
<div class="rating">
<div class="rating-front" style="width: 90%;">
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
            <div class="col-xs-6">
                <div class="price"><span class="text-success"> </span> <sup><del> </del></sup></div>
            </div>
        </div>
    </div>
</a>
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
                <div class="youplay-carousel youplay-carousel-size-6" data-autoplay="6000" data-arrows="false" data-stage-padding="0">
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
