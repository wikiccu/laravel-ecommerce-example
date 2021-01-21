@extends('layouts.app')
@section('title', 'سبد خرید')
@section('content')
    <div class="content-wrap no-banner">
        <div class="container youplay-store store-grid mt-0">
            <div class="col-md-9">
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
                @if (Cart::count() > 0)
                    <h2>{{ Cart::count() }} مورد در سبد خرید می باشد</h2>
                    @foreach (Cart::content() as $item)
                        <!-- Single Product Block -->
                        <div class="item angled-bg">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-4">
                                    <div class="angled-img">
                                        <div class="img">
                                            <a href="{{ route('shop.show', $item->model->slug) }}"><img
                                                    src="{{ productImage($item->model->image) }}" alt="item"
                                                    class="cart-table-img"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-9">
                                            <h4>
                                                <a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}
                                                </a>
                                            </h4>

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
                                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn remove"> <i class="fa fa-times"></i>
                                                </button>

                                            </form>
                                            <a href="#" class="">

                                            </a>
                                            <div class="price">
                                                {{ presentPrice($item->subtotal) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- /Single Product Block -->
                    <div class="align-right h3 mr-20 mb-20">
                        مجموع پرداختی: <strong>{{ presentPrice(Cart::subtotal()) }}</strong>
                    </div>
                    <div class="align-right">
                        <a href="{{ route('checkout.index') }}" class="btn btn-lg">پرداخت صورتحساب</a>
                    </div>
                @else
                    <h3>موردی در سبد خرید موجود نیست </h3> <br /><br /><br />
                    <div class="align-right">
                        <a href="{{ route('shop.index') }}" class="btn btn-lg">بازگشت به فروشگاه</a>
                    </div>
                @endif
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
                    <h4 class="block-title">دسته بندی</h4>
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
            </div>
            <!-- /Right Side -->
        </div>
        {{-- @include('partials.might-like') --}}
    @endsection
    {{-- @section('extra-js')
    <script>
        (function() {
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                            quantity: this.value,
                            productQuantity: productQuantity
                        })
                        .then(function(response) {
                            // console.log(response);
                            window.location.href = '{{ route('
                            cart.index ') }}'
                        })
                        .catch(function(error) {
                            // console.log(error);
                            window.location.href = '{{ route('
                            cart.index ') }}'
                        });
                })
            })
        })();

    </script>
    @endsection --}}
