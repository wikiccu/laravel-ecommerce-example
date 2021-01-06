@extends('layouts.app')
@section('title', 'سبد خرید')
@section('content')
<div class="content-wrap">
        
    <!--
Banner

Additional classes:
.small
.xsmall
.big
.full
-->

<section class="youplay-banner banner-top youplay-banner-parallax xsmall">

<div class="image" data-speed="0.4">
    <img src="assets/images/dark/banner-blog-bg.jpg" alt="" class="jarallax-img">
</div>


<div class="info">
<div>
    <div class="container">
        
        
            <h1 class="h1">Cart</h1>
        
        
        
    </div>
</div>
</div>
</section>
<!-- /Banner -->

@if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


<div class="container youplay-content">

<div class="col-md-9">

    <h2 class="mt-0">Your Games in Cart</h2>

    <!-- Single Product Block -->
    <div class="item angled-bg">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                    <div class="img">
                        <img src="assets/images/dark/game-skyrim-500x375.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                    <div class="col-xs-6 col-md-9">
                        <h4>Skyrim</h4>
                        
<div class="rating hidden-xs">
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
                    <div class="col-xs-6 col-md-3 align-right">
                        <div class="price">
                            $11.99
                        </div>
                        <a href="#" class="remove">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Single Product Block -->

    <!-- Single Product Block -->
    <div class="item angled-bg">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                    <div class="img">
                        <img src="assets/images/dark/game-dragons-dogma-500x375.jpg" alt="">
                        <div class="badge show bg-default">-30%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                    <div class="col-xs-6 col-md-9">
                        <h4>Dragons Dogma</h4>
                        
<div class="rating hidden-xs">
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
                    <div class="col-xs-6 col-md-3 align-right">
                        <div class="price">
                            $34.99 <sup><del>$49.99</del></sup>
                        </div>
                        <a href="#" class="remove">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Single Product Block -->

    <!-- Single Product Block -->
    <div class="item angled-bg">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                    <div class="img">
                        <img src="assets/images/dark/game-the-witcher-500x375.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                    <div class="col-xs-6 col-md-9">
                        <h4>The Witcher</h4>
                        
<div class="rating hidden-xs">
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
                    <div class="col-xs-6 col-md-3 align-right">
                        <div class="price">
                            $14.99
                        </div>
                        <a href="#" class="remove">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Single Product Block -->

    <div class="align-right h3 mr-20 mb-20">
        Total: <strong>$46.88</strong>
    </div>
    <div class="align-right">
        <a href="checkout.html" class="btn btn-lg">Proceed to Checkout</a>
    </div>
</div>

<!-- Right Side -->
<div class="col-md-3">
    
<!-- Side Search -->
<div class="side-block">
<p>Search by Games:</p>
<form action="search.html">
<div class="youplay-input">
    <input type="text" name="search" placeholder="enter search term">
</div>
</form>
</div>
<!-- /Side Search -->

<!-- Side Categories -->
<div class="side-block">
<h4 class="block-title">Categories</h4>
<ul class="block-content">
<li><a href="#">All</a></li>
<li><a href="#">Action</a></li>
<li><a href="#">Adventure</a></li>
<li><a href="#">Casual</a></li>
<li><a href="#">Indie</a></li>
<li><a href="#">Racing</a></li>
<li><a href="#">RPG</a></li>
<li><a href="#">Simulation</a></li>
<li><a href="#">Strategy</a></li>
</ul>
</div>
<!-- /Side Categories -->

<!-- Side Popular News -->
<div class="side-block">
<h4 class="block-title">Popular Games</h4>
<div class="block-content p-0">
<!-- Single News Block -->
<div class="row youplay-side-news">
    <div class="col-xs-3 col-md-4">
        <a href="store-product-1.html" class="angled-img">
            <div class="img">
                <img src="assets/images/dark/game-bloodborne-500x375.jpg" alt="">
            </div>
        </a>
    </div>
    <div class="col-xs-9 col-md-8">
        <h4 class="ellipsis"><a href="store-product-1.html" title="Bloodborne">Bloodborne</a></h4>
        <span class="price">$50.00</span>
    </div>
</div>
<!-- /Single News Block -->

<!-- Single News Block -->
<div class="row youplay-side-news">
    <div class="col-xs-3 col-md-4">
        <a href="#" class="angled-img">
            <div class="img">
                <img src="assets/images/dark/game-dark-souls-ii-500x375.jpg" alt="">
            </div>
        </a>
    </div>
    <div class="col-xs-9 col-md-8">
        <h4 class="ellipsis"><a href="#" title="Dark Souls II">Dark Souls II</a></h4>
        <span class="price">$39.99 <sup><del>$49.99</del></sup></span>
    </div>
</div>
<!-- /Single News Block -->

<!-- Single News Block -->
<div class="row youplay-side-news">
    <div class="col-xs-3 col-md-4">
        <a href="#" class="angled-img">
            <div class="img">
                <img src="assets/images/dark/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
            </div>
        </a>
    </div>
    <div class="col-xs-9 col-md-8">
        <h4 class="ellipsis"><a href="#" title="Kingdoms of Amalur">Kingdoms of Amalur</a></h4>
        <span class="price">$20.00</span>
    </div>
</div>
<!-- /Single News Block -->

<!-- Single News Block -->
<div class="row youplay-side-news">
    <div class="col-xs-3 col-md-4">
        <a href="#" class="angled-img">
            <div class="img">
                <img src="assets/images/dark/game-diablo-iii-500x375.jpg" alt="">
            </div>
        </a>
    </div>
    <div class="col-xs-9 col-md-8">
        <h4 class="ellipsis"><a href="#" title="Let's Grind Diablo III">Diablo III</a></h4>
        <span class="price">$10.00</span>
    </div>
</div>
<!-- /Single News Block -->
</div>
</div>
<!-- /Side Popular News -->


</div>
<!-- /Right Side -->

</div>


    <div class="cart-section container">
        <div>
            

            @if (Cart::count() > 0)

            <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

            <div class="cart-table">
                @foreach (Cart::content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ productImage($item->model->image) }}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="cart-options">Remove</button>
                            </form>

                            <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                <button type="submit" class="cart-options">Save for Later</button>
                            </form>
                        </div>
                        <div>
                            <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                @for ($i = 1; $i < 5 + 1 ; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div>{{ presentPrice($item->subtotal) }}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end cart-table -->

            @if (! session()->has('coupon'))

                <a href="#" class="have-code">Have a Code?</a>

                <div class="have-code-container">
                    <form action="{{ route('coupon.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="coupon_code" id="coupon_code">
                        <button type="submit" class="button button-plain">Apply</button>
                    </form>
                </div> <!-- end have-code-container -->
            @endif

            <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        @if (session()->has('coupon'))
                            Code ({{ session()->get('coupon')['name'] }})
                            <form action="{{ route('coupon.destroy') }}" method="POST" style="display:block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" style="font-size:14px;">Remove</button>
                            </form>
                            <hr>
                            New Subtotal <br>
                        @endif
                        Tax ({{config('cart.tax')}}%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{ presentPrice(Cart::subtotal()) }} <br>
                        @if (session()->has('coupon'))
                            -{{ presentPrice($discount) }} <br>&nbsp;<br>
                            <hr>
                            {{ presentPrice($newSubtotal) }} <br>
                        @endif
                        {{ presentPrice($newTax) }} <br>
                        <span class="cart-totals-total">{{ presentPrice($newTotal) }}</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                <a href="{{ route('checkout.index') }}" class="button-primary">Proceed to Checkout</a>
            </div>

            @else

                <h3>No items in Cart!</h3>
                <div class="spacer"></div>
                <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                <div class="spacer"></div>

            @endif

            @if (Cart::instance('saveForLater')->count() > 0)

            <h2>{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</h2>

            <div class="saved-for-later cart-table">
                @foreach (Cart::instance('saveForLater')->content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('img/products/'.$item->model->slug.'.jpg') }}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="cart-options">Remove</button>
                            </form>

                            <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                <button type="submit" class="cart-options">Move to Cart</button>
                            </form>
                        </div>

                        <div>{{ $item->model->presentPrice() }}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end saved-for-later -->

            @else

            <h3>You have no items Saved for Later.</h3>

            @endif

        </div>

    </div> <!-- end cart-section -->

    @include('partials.might-like')


@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
