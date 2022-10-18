<header class="header-area header-wrapper">
    <!-- header-top-bar -->
    <div class="header-top-bar plr-185">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="call-us">
                        <p class="mb-0 roboto">Liên Hệ: 0569497173</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top-link clearfix">
                        <ul class="link f-right">
                            @if(Auth::check())
                            <li>
                                <a href="{{ asset('') }}profile">

                                    Quản lý tài khoản
                                </a>
                            </li>
                            @if(Auth::user()->isVerified == false)
                            <li>
                                <a href="{{ asset('') }}verify">
                                    Xác minh tài khoản
                                </a>
                            </li>
                            @endif @if(Auth::user()->id_role == 1)
                            <li>
                                <a href="{{ asset('') }}admin">
                                    Quản trị
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ asset('') }}logout">
                                    Thoát
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="{{ asset('') }}login">
                                    Đăng Nhập
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('') }}register">

                                    Đăng ký
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle-area -->
    <div id="sticky-header" class="header-middle-area plr-185">
        <div class="container-fluid">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- logo -->
                    <div class="col-lg-2 col-md-4">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('client') }}/img/logo/logo_fcar.jpg" alt="main logo" width="90%">
                            </a>
                        </div>
                    </div>
                    <!-- primary-menu -->
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                <li><a href="{{ asset('') }}">Trang Chủ</a></li>
                                {{--
                                <li><a href="{{ asset('') }}gioi-thieu">Giới Thiệu</a></li> --}} {{--
                                <li><a href="{{ asset('') }}cua-hang">Laptop</a></li> --}}
                                <li><a href="{{ asset('') }}dat-lich">Đặt Lịch</a></li>
                                {{--
                                <li><a href="{{ asset('') }}tin-tuc">Tin Tức</a></li>
                                <li><a href="{{ asset('') }}lien-he">Liên Hệ</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <!-- header-search & total-cart -->
                    <div class="col-lg-2 col-md-8">
                        <div class="search-top-cart  f-right">
                            <!-- header-search -->
                            <div class="header-search f-left">
                                <div class="header-search-inner">
                                    <button class="search-toggle">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>

                                    <div class="top-search-box">
                                        <input type="text" placeholder="Nhập từ khóa cần tìm kiếm..." name='timkiem' id="timkiem">
                                        <button type="button" id='btn-timkiem'>
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <!-- total-cart -->
                            <div class="total-cart f-left">
                                <div class="total-cart-in">
                                    <div class="cart-toggler">
                                        <a href="/gio-hang">
                                            <span class="cart-quantity">{{Cart::count()}}
                                            </span><br>
                                            <span class="cart-icon">
                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER AREA -->

<!-- START MOBILE MENU AREA -->
<div class="mobile-menu-area d-block d-lg-none section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="{{ asset('') }}">Trang Chủ</a></li>
                            {{--
                            <li><a href="{{ asset('') }}gioi-thieu">Giới Thiệu</a></li>
                            <li><a href="{{ asset('') }}cua-hang">Laptop</a></li> --}}
                            <li><a href="{{ asset('') }}dat-lich">Đặt Lịch</a></li>
                            {{--
                            <li><a href="{{ asset('') }}tin-tuc">Tin Tức</a></li>
                            <li><a href="{{ asset('') }}lien-he">Liên Hệ</a></li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>