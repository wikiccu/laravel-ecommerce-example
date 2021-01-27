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
            <article class="news-one">

                <!-- Post Text -->
                <p> {{ $product->image }} </p>
                <p> {{ productImage($product->image) }} </p>
                <p>D:\GitHub\laravel\public\app\public\products\January2021</p>
                <div class="description">
                    <a href="{{ productImage($product->image) }}" class="angled-img pull-left video-popup">
                        <div class="img">
                            <img src="{{ productImage($product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <i class="fa fa-search-plus icon"></i>
                    </a>
                    <h2 class="mt-0">توضیحات</h2>
                    <h4> {{ $product->name }} </h4>
                    <p>
                        {!! $product->description !!}
                    </p>
                    <div class="align-left h3 mr-20 mb-20">
                        قیمت: <strong> {{ $product->presentPrice() }}</strong>
                    </div>

                </div>
                <!-- /Post Text -->
            </article>
            <div class="reviews-block mb-0">
                <form id="addtocart" action="{{ route('cart.store', $product) }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="btn active btn-success">اضافه به سبد خرید</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('mightLike')
    @include('partials.might-like')
@endsection

{{-- @section('extra-js')
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
    <script src="{{ asset('js/algolia.js') }}"></script> 
@endsection 
--}}