<!-- Navbar -->
<nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo-light.png') }}" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-hover">
                    <a href="{{ route('shop.index') }}" role="button">
                        فروشگاه
                        <span class="label">اکانت بازی</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="search-toggle" href="search.html">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="dropdown dropdown-hover dropdown-cart">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                    <div class="dropdown-menu">
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
                            <h5>{{ Cart::count() }} مورد در سبد خرید می باشد</h5>
                            @foreach (Cart::content() as $item)
                                <div class="row youplay-side-news">
                                    <div class="col-xs-3 col-md-4">
                                        <a href="#" class="angled-img">
                                            <div class="img">
                                                <a href="{{ route('shop.show', $item->model->slug) }}"><img
                                                        src="{{ productImage($item->model->image) }}" alt="item"
                                                        class="cart-table-img"></a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-9 col-md-8">
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="pull-right mr-10"> <i class="fa fa-times"></i>
                                            </button>
                                        </form>

                                        <h4 class="ellipsis"><a
                                                href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}
                                            </a></h4>

                                        <span class="quantity"><span
                                                class="amount">{{ presentPrice($item->subtotal) }}</span></span>
                                    </div>
                                </div>
                            @endforeach

                            <div class="ml-20 mr-20 pull-left">مجموع پرداختی:
                                <strong>{{ presentPrice(Cart::subtotal()) }}</strong></div>

                            <div class="btn-group pull-right m-15">
                                <a href="{{ route('cart.index') }}" class="btn btn-default btn-sm">سبد خرید</a>
                                <a href="{{ route('checkout.index') }}" class="btn btn-default btn-sm">پرداخت</a>
                            </div>
                        @else
                            <h3>موردی در سبد خرید موجود نیست </h3> <br /><br /><br />
                            <div class="align-right">
                                <a href="{{ route('shop.index') }}" class="btn btn-lg">بازگشت به فروشگاه</a>
                            </div>
                        @endif
                    </div>
                </li>
                <li class="dropdown dropdown-hover dropdown-user">
                    @guest
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            <i class="fa fa-user"></i>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
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
                            <form class="navbar-login-form" action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}
                                <p>نام کاربری:</p>
                                <div class="youplay-input">
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Email" required autofocus>
                                </div>
                                <p>رمز عبور:</p>
                                <div class="youplay-input">
                                    <input type="password" id="password" name="password" value="{{ old('password') }}"
                                        placeholder="Password" required>
                                </div>

                                <div class="youplay-checkbox mb-15 ml-5">
                                    <input type="checkbox" id="nav-rememberme" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="nav-rememberme">مرا به خاطر بسپار</label>
                                </div>

                                <button type="submit" class="btn btn-sm ml-0 mr-0" name="submit">ورود</button>
                                <br>
                                <p>
                                    <a href="{{ route('password.request') }}" class="no-fade">رمز عبور را فرموش کرده اید؟
                                    </a> | <a href="{{ route('register') }}" class="no-fade">ثبت نام</a>
                                </p>
                            </form>
                        </div>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('users.edit') }}">
                                        پروفایل من
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{ route('orders.index') }}">
                                        سفارش ها
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /Navbar -->
