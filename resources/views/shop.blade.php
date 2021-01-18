@extends('layouts.app')

@section('title', 'محصولات')
@section('content')
    <div class="content-wrap no-banner">
        <div class="container youplay-store store-grid mt-0">
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- Games List -->
            <div class="col-md-9 isotope">
                <!-- Sort Categories -->
                <ul class="pagination isotope-options">
                    <li data-filter="all" class="active"><span>همه</span></li>
                    <li data-filter="popular"><span>محبوب</span></li>
                    <li data-filter="specials"><span>ویژه</span></li>
                    <li data-filter="upcoming"><span>در آینده</span></li>
                </ul>
                <!-- /Sort Categories -->
                <div class="isotope-list row vertical-gutter">
                    <!-- Single Product Block -->
                    @forelse ($products as $product)
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
                    @empty
                        <div style="text-align: center"> هیچ موردی یافت نشد </div>  
                    @endforelse

                </div>
                {{ $products->appends(request()->input())->links() }}
            </div>
            <!-- /Games List -->

            <!-- Right Side -->
            <div class="col-md-3">

                <!-- Side Search -->
                <div class="side-block">
                    <p>جستجو:</p>
                    <form action="search.html">
                        <div class="youplay-input">
                            <input type="text" name="search" placeholder="عبارت جستجو را وارد کنید">
                        </div>
                    </form>
                </div>
                <!-- /Side Search -->

                <!-- Side Categories -->
                <div class="side-block">
                    <h4 class="block-title">Categories</h4>
                    <ul class="block-content">
                        @foreach ($categories as $category)
                            <li class="{{ setActiveCategory($category->slug) }}"><a
                                    href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /Side Categories -->

                <!-- Side Popular News -->
                <div class="side-block">
                    <h4 class="block-title">Sort Games</h4>
                    <ul class="block-content">
                        <li>
                            <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                                Low to High
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">High
                                to Low</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right Side -->
        </div>
    </div>
@endsection

