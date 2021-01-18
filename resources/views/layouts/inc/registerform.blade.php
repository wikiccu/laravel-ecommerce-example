<!-- Registration Form -->
<div id="nav-registration" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ثبت نام</h4>
            </div>
            <div class="modal-body">

                <form action="#" method="post" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div>
                        <p>نام و نام خانوادگی:</p>
                        <div class="youplay-input">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="نام" required autofocus>
                        </div>

                        <p>ایمیل:</p>
                        <div class="youplay-input">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="ایمیل" required>
                        </div>
                        <p>رمز عبور:</p>
                        <div class="youplay-input">
                            <input id="password" type="password" class="form-control" name="password"
                                placeholder="رمز عبور" placeholder="رمز عبور" required>
                        </div>
                        <p>تایید رمز عبور:</p>
                        <div class="youplay-input">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" placeholder="تایید رمز عبور" required>
                        </div>

                        <p>
                            <em>از قبل ثبت نام کرده اید؟</em> <a href="{{ route('login') }}">وارد شوید</a>
                        </p>
                        

                        <button class="btn ml-3" name="submit">ثبت نام</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Registration Form -->
