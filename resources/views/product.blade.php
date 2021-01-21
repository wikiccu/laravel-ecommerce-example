@extends('layouts.app')
@section('title', $product->name)
@section('content')

    {{-- @component('components.breadcrumbs')
    <a href="/">Home</a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{ route('shop.index') }}">Shop</a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span>{{ $product->name }}</span>
    @endcomponent --}}
    <div class="content-wrap no-banner">
        <div class="container youplay-news youplay-post">


            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Post Info -->
            <article class="news-one">

                <!-- Post Text -->
                    
                    <div>
                        <!-- 1440x900.jpg -->
                        <a href="{{ productImage($product->image) }}" class="angled-img image-popup">
                            <div class="img">
                                <img src="{{ productImage($product->image) }}" alt="{{ $product->name }}"
                                    class="jarallax-img" id="currentImage">
                            </div>
                            <i class="fa fa-search-plus icon"></i>
                        </a>
                    </div>
                    <h2 class="mt-0">توضیحات</h2>
                    <div class="description">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                    <div class="align-left h3 mr-20 mb-20">
                        قیمت: <strong> {{ $product->presentPrice() }}</strong>
                    </div>
                    <div class="reviews-block mb-0">
                        <form id="addtocart" action="{{ route('cart.store', $product) }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn active btn-success">اضافه به سبد خرید</button>
                        </form>
                    </div>
                    
            </article>
        </div>
        {{-- @include('partials.might-like') --}}
    @endsection
    @section('extra-js')
        <script>
            (function() {
                const currentImage = document.querySelector('#currentImage');
                const images = document.querySelectorAll('.product-section-thumbnail');

                images.forEach((element) => element.addEventListener('click', thumbnailClick));

                function thumbnailClick(e) {
                    currentImage.classList.remove('active');

                    currentImage.addEventListener('transitionend', () => {
                        currentImage.src = this.querySelector('img').src;
                        currentImage.classList.add('active');
                    })

                    images.forEach((element) => element.classList.remove('selected'));
                    this.classList.add('selected');
                }

            })();

        </script>

        <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        {{-- <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
        <script src="{{ asset('js/algolia.js') }}"></script> --}}
    @endsection
