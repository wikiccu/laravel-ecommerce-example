@extends('layouts.app')

@section('title', 'تماس با ما')
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
<section class="youplay-banner banner-top youplay-banner-parallax small">

<div class="image" data-speed="0.4">
    <img src="assets/images/dark/banner-blog-bg.jpg" alt="" class="jarallax-img">
</div>


<div class="info">
<div>
    <div class="container">
        
        
            <h1 class="h1">تماس با ما</h1>
        
        
        
    </div>
</div>
</div>
</section>
<!-- /Banner -->


<div class="container youplay-content">

<div class="row">
    <div class="col-md-9 col-md-push-3">
        <!-- Contact Form -->
        <div class="youplay-form p-0">
            <h2 class="mt-0">پیغام خود را برای ما بفرستید</h2>

            <form action="php/contact.php" method="POST" role="form" class="youplay-form-ajax" data-toggle="validator">
                <div class="row">
                    <div class="col-md-6">
                        <div class="youplay-input form-group">
                            <input type="text" name="name" placeholder="نام " required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="youplay-input form-group">
                            <input type="email" name="email" placeholder="ایمیل" required>
                        </div>
                    </div>
                </div>
                <div class="youplay-textarea form-group">
                    <textarea name="message" placeholder="متن پیام" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-default">ارسال</button>
            </form>
        </div>
        <!-- /Contact Form -->
    </div>
    <div class="col-md-3 col-md-pull-9">
        <h2 class="mt-0">اطلاعات تماس</h2>

        رامسر خیابان مطهری<br>
        جنب بانک صادرات ساختمان حیات بخش
        <br><br>
        تلفن: 09332636994<br>
        ایمیل: info[at]gamecap.ir<br>
        <br>
    </div>
</div>

</div>
@endsection