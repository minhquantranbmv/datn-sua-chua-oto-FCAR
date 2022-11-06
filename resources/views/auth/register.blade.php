<!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>

    <title>Sửa Chữa Xe Máy F-Bike</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/vendor/bootstrap/{{ asset('client') }}/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/fonts/font-awesome-4.7.0/{{ asset('client') }}/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/fonts/iconic/{{ asset('client') }}/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/vendor/animsition/{{ asset('client') }}/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/css/main.css">

    <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/plyr.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/style.css" type="text/css">

    <style>
        .invalid-feedback {
            display: block;
            background-color: red;
            margin-top: 30px;
            margin-bottom: 40px;
            margin-right: 20px;
            height: 40px;
            /* padding: 10px; */
            font-size: 5px;
        }
        
        .invalid-feedback-pass {
            display: block;
            background-color: red;
            margin-top: 45px;
            margin-bottom: 30px;
            margin-right: 60px;
            height: 20px;
            width: 90%;
        }
        
        .text-massage {
            color: #ffffff;
            font-size: 20px;
            padding: 20px;
            text-align: center;
        }
        
        .text-massage-pass {
            color: #ffffff;
            font-size: 10px;
            padding: 20px;
            text-align: center;
        }
        
        .login__form form .input__item_phone {
            position: relative;
            width: 370px;
            margin-bottom: 20px;
        }
        
        .login__form form .input__item_phone:before {
            position: absolute;
            left: 50px;
            top: 30px;
            height: 30px;
            width: 1px;
            background: #b7b7b7;
            content: "";
        }
        
        .login__form form .input__item_phone input {
            height: 50px;
            width: 100%;
            font-size: 15px;
            color: #b7b7b7;
            background: #ffffff;
            border: none;
            padding-left: 76px;
        }
    </style>
    <script>
        if (window.performance.navigation.type === 2) {
            location.reload();
        }
    </script>


</head>

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Đăng Ký</h2>
                    <p>CHÀO MỪNG ĐẾN VỚI FBIKE</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>ĐĂNG KÝ</h3>

                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="input__item_phone">
                            <input type="text" class="@error('name') is-invalid @enderror mb-0 mt-4" value="{{ old('name') }}" name="name" placeholder="Họ và tên*"> @error('name')
                            <span class="text-danger">
                                {{ $message }}
                            </span> @enderror
                        </div>

                        <div class="input__item_phone" data-validate="Enter password">
                            <input type="text" class="@error('phone') is-invalid @enderror mb-0 mt-4" value="{{ old('phone') }}" name="phone" placeholder="Số điện thoại*"> @error('phone')
                            <span class="text-danger">
                               {{ $message }}
                            </span> @enderror
                        </div>

                        <div class="input__item_phone" data-validate="Valid email is: a@b.c">
                            <input type="text" class="@error('email') is-invalid @enderror mb-0 mt-4" value="{{ old('email') }}" name="email" placeholder="abc@email.com*"> @error('email')
                            <span class="text-danger" >
                                {{ $message }}
                            </span> @enderror
                        </div>
                        <div class="input__item_phone" data-validate="Enter password">
                            <input type="password" upassword name="password" placeholder="Mật khẩu*" class="mb-0 mt-4 upassword"> 
                            @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span> @enderror
                        </div>

                        <div class="input__item_phone" data-validate="Enter password">
                            <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu*" class="mb-0 mt-4 upassword">

                        </div>



                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register" style="background-color: rgb(240, 10, 60);">Đăng
                                        ký</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>ĐÃ CÓ TÀI KHOẢN?</h3>
                    <a href="/login" class="primary-btn">Đăng Nhập</a>
                </div>
            </div>
        </div>
        <div class="login__social">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <a href="/">Quay lại trang chủ</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->

<div id="dropDownSelect1"></div>


<!-- <h1 style="padding: 0 0 25px;" class="breadcrumbs-title">Đăng ký</h1>
<div class="login-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6  pb-5">
                <div class="new-customers">
                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="login-account p-30 box-shadow" style="background-color: black;">
                            <p>Bạn đã có tài khoản? <a href="/login"> Nhấp vào đây để đăng nhập!</a></p>
                            <input type="text" class="@error('name') is-invalid @enderror mb-0 mt-4" value="{{ old('name') }}" name="name" placeholder="Họ và tên*"> @error('name')
                            <span class="invalid-feedback pb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                            <input type="text" class="@error('email') is-invalid @enderror mb-0 mt-4" value="{{ old('email') }}" name="email" placeholder="abc@email.com*"> @error('email')
                            <span class="invalid-feedback pb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                            <input type="text" class="@error('phone') is-invalid @enderror mb-0 mt-4" value="{{ old('phone') }}" name="phone" placeholder="Số điện thoại*"> @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                            <input type="password" upassword name="password" placeholder="Mật khẩu*" class="mb-0 mt-4 upassword"> @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                            <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu*" class="mb-0 mt-4 upassword">
                            <div class="row">
                                <div class="d-inline">
                                    <input type="checkbox" id="show-password">
                                    <small for="show-password">Hiện mật khẩu</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register" style="background-color: rgb(240, 10, 60);">Đăng
                                        ký</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('client') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('client') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('client') }}/vendor/bootstrap/js/popper.js"></script>
<script src="{{ asset('client') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('client') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('client') }}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{ asset('client') }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('client') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
</body>


</body>

</html>