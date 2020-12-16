@extends('layouts.app')

@section('title', 'محصولات')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    <div class="container">
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
    </div>
    {{-- <div class="side-block">
        <p>Search by Games:</p>
        <form action="search.html">
            <div class="youplay-input">
                <input type="text" name="search" placeholder="enter search term">
            </div>
        </form>
    </div> --}}
    <!-- /Side Search -->
    
    <!-- Side Categories -->
    <div class="side-block">
        <h4 class="block-title">Categories</h4>
        <ul>
            @foreach ($categories as $category)
                <li class="{{ setActiveCategory($category->slug) }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
            @endforeach
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
    
    <div class="products-section container">
         
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">{{ $categoryName }}</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                @forelse ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse
            </div> <!-- end products -->

            <div class="spacer"></div>
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
