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
    <div class="content-wrap">
        <div class="container">
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
        </div>
        <!--Banner -->
        <section class="youplay-banner banner-top youplay-banner-parallax">

            <div class="image" data-speed="0.4">
                <img src="{{ productImage($product->image) }}" alt="$product->name" class="jarallax-img" id="currentImage">
            </div>


            <div class="info">
                <div>
                    <div class="container">
                        <h1 class="h1">{{ $product->name }}</h1>
                        <br>
                        <a href="#" class="btn btn-lg btn-success" onclick="event.preventDefault();
                                document.getElementById('addtocart').submit();"
                            title="Add to Cart">{{ $product->presentPrice() }}</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner -->
        <div class="youplay-carousel gallery-popup">
            @if ($product->images)
                @foreach (json_decode($product->images, true) as $image)
                    <a class="angled-img" href="{{ productImage($image) }}">
                        <div class="img">
                            <img src="{{ productImage($image) }}" alt="{{ $product->name }}">
                        </div>
                        <i class="fa fa-search-plus icon"></i>
                    </a>
                @endforeach
            @endif
        </div>
        <div class="container youplay-store">

            <div class="col-md-9">
                <!-- Post Info -->
                <article>

                    <!-- Description -->
                    <h2 class="mt-0">Description</h2>
                    <div class="description">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>


                    <!-- /Images With Text -->

                    <!-- Post Share -->
                    <div class="btn-group social-list social-likes" data-counters="no">
                        <span class="btn btn-default facebook" title="Share link on Facebook"></span>
                        <span class="btn btn-default twitter" title="Share link on Twitter"></span>
                    </div>
                    <!-- /Post Share -->
                </article>
                <!-- /Post Info -->


                <!-- Information -->
                <div class="requirements-block">
                    <h2>System Requirements</h2>
                    <div class="panel-group youplay-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Minimum <span class="icon-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div>
                                        <strong> {{ $product->details }} <strong>
                                    </div>
                                    <div>
                                        <strong>Processor:</strong> AMD® A8 3870 3,6 Ghz or Intel® Core ™ i3 2100 3.1Ghz
                                    </div>
                                    <div>
                                        <strong>Memory:</strong> 4 GB RAM
                                    </div>
                                    <div>
                                        <strong>Graphics:</strong> NVIDIA® GeForce GTX 465 / ATI Radeon TM HD 6870
                                    </div>
                                    <div>
                                        <strong>DirectX:</strong> Version 11
                                    </div>
                                    <div>
                                        <strong>Network:</strong> Broadband Internet connection
                                    </div>
                                    <div>
                                        <strong>Hard Drive:</strong> 23 GB available space
                                    </div>
                                    <div>
                                        <strong>Sound Card:</strong> DirectX 11 sound device
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Recommended <span class="icon-minus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div>
                                        <strong>OS:</strong> Windows 7 SP1 64bit, Windows 8.1 64bit
                                    </div>
                                    <div>
                                        <strong>Processor:</strong> AMD® FX 8150 3.6 GHz or Intel® Core™ i7 2600 3.4 GHz
                                    </div>
                                    <div>
                                        <strong>Memory:</strong> 8 GB RAM
                                    </div>
                                    <div>
                                        <strong>Graphics:</strong> NVIDIA® GeForce® GTX 750, ATI Radeon™ HD 7850
                                    </div>
                                    <div>
                                        <strong>DirectX:</strong> Version 11
                                    </div>
                                    <div>
                                        <strong>Network:</strong> Broadband Internet connection
                                    </div>
                                    <div>
                                        <strong>Hard Drive:</strong> 23 GB available space
                                    </div>
                                    <div>
                                        <strong>Sound Card:</strong> DirectX 11 sound device
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Information -->
                <div class="reviews-block mb-0">
                    <form id="addtocart" action="{{ route('cart.store', $product) }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn active btn-success">اضافه به سبد خرید</button>
                    </form>
                </div>
            </div>
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
