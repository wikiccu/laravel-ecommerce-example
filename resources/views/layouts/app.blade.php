@include('layouts.inc.head')
<body>
    <!-- Preloader -->
<div class="page-preloader preloader-wrapp">

    <img src="{{ asset('images/logo-light.png') }}" alt="">

<div class="preloader"></div>
</div>
<!-- /Preloader -->
    @include('layouts.inc.nav')
@include('layouts.inc.registerform')
@yield('content')
@yield('mightLike')
@include('layouts.inc.footer')
@include('layouts.inc.searchandscripts')
</body>
</html>