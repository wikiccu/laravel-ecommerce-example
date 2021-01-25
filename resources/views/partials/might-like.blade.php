<!-- Mght like section -->
<h3 class="container ">شاید از این بازی ها هم خوشتان بیاید ... </h3>
<div class="youplay-carousel">
    @foreach ($mightAlsoLike as $product)
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
        </a>
    @endforeach
</div>
<!-- / Might like section -->
