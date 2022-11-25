<!DOCTYPE html>
<html lang="en">

<head>
    <title>FBIKE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        if (window.performance.navigation.type === 2) {
            location.reload();
        }
    </script>
    <!--===============================================================================================-->
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
    <!--===============================================================================================-->


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
        /* #show-password {
            width: 20px;
            height: 20px;
            margin: 15px 20px;
        }
        
        #show {
            color: aliceblue;
            font-size: 20px;
        } */
    </style>
</head>

<body>


    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Đăng Nhập</h2>
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
                        <h3>ĐĂNG NHẬP</h3>

                        @if (Session::has('message'))
                        <div class="message alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        <form method="POST" action="{{route('login')}}">
                            @csrf




                            <div class="input__item_phone" data-validate="Valid email is: a@b.c">
                                <input type="text" class="@error('phone') is-invalid @enderror mb-0 mt-4" value="{{ old('phone') }}" name="phone" placeholder="Số điện thoại"> @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-massage">{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="input__item" data-validate="Enter password">
                                <input type="password" name="password" upassword placeholder="Mật khẩu"> @error('password')
                                <span class="invalid-feedback-pass" role="alert">
                                    <strong class="text-massage-pass">{{ $message }}</strong>
                                </span> @enderror


                            </div>

                            <button type="submit" class="site-btn">ĐĂNG NHẬP NGAY</button>
                        </form>
                        <a href="/forget-password" class="forget_pass">QUÊN MẬT KHẨU?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>KHÔNG CÓ TÀI KHOẢN?</h3>
                        <a href="/register" class="primary-btn">Đăng KÝ</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>



</body>

</html> -->