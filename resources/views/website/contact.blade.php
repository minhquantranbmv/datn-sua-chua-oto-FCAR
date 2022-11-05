<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liên hệ</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css') }}/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css') }}/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css') }}/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css') }}/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css') }}/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css') }}/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css') }}/reset.css">
    <link rel="stylesheet" href="{{ asset('css') }}/style.css">
    <link rel="stylesheet" href="{{ asset('css') }}/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/{{ asset('css') }}/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> @include('layout_client.style')
</head>

<body>

    <div class="wrapper">
        @include('layout_client.menu')

        <!-- Start page content -->


        <div class=" text-center uppercase font-bold text-5xl  ">
            <h1>Liên hệ</h1>
        </div>

        <!-- Start Contact -->
        <section id="contact-us" class="contact-us section">
            <div class="container">
                <div class="contact-head">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="form-main">
                                <div class="title">
                                    <h4>Liên hệ</h4>
                                    <h3>Nhập Phản Hồi</h3>
                                </div>
                                <form class="form" method="post" action="mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Họ và tên<span>*</span></label>
                                                <input name="name" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Địa chỉ<span>*</span></label>
                                                <input name="subject" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label> Email<span>*</span></label>
                                                <input name="email" type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label> Số điện thoại<span>*</span></label>
                                                <input name="company_name" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <label>Nội dung<span>*</span></label>
                                                <textarea name="message" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn "> Gửi</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="single-head">
                                <div class="single-info">
                                    <i class="fa fa-phone"></i>
                                    <h4 class="title">Số điện thoại:</h4>
                                    <ul>
                                        <li>+123 456-789-1120</li>
                                        <li>+522 672-452-1120</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-envelope-open"></i>
                                    <h4 class="title">Email:</h4>
                                    <ul>
                                        <li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
                                        <li><a href="mailto:info@yourwebsite.com">support@yourwebsite.com</a></li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-location-arrow"></i>
                                    <h4 class="title">Địa chỉ trụ sở:</h4>
                                    <ul>
                                        <li>Số 5 Ngõ 85 Láng Hạ, Q. Ba Đình, Tp. Hà Nội</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Contact -->

        <!-- Map Section -->
        <div class="map-section">
            <div id="">
                <iframe class="w-full " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7075388392564!2d105.81261271440759!3d21.04438499262175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1066ddb189%3A0xd32ca6689b380499!2zVHJ1bmcgdMOibSBjaMSDbSBzw7NjIHhlIGjGoWkgVE1DQVJl!5e0!3m2!1svi!2s!4v1539151270228"
                    height="600"></iframe>
            </div>
        </div>
        <!--/ End Map Section -->

        <!-- End page content -->

        <!-- START FOOTER AREA -->
        @include('layout_client.footer')
        <!-- END FOOTER AREA -->

    </div>

    <!-- Jquery -->
    <script src="{{ asset('js') }}/jquery.min.js"></script>
    <script src="{{ asset('js') }}/jquery-migrate-3.0.0.js"></script>
    <script src="{{ asset('js') }}/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js') }}/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js') }}/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="{{ asset('js') }}/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('js') }}/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('js') }}/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('js') }}/magnific-popup.js"></script>
    <!-- Fancybox JS -->
    <script src="{{ asset('js') }}/facnybox.min.js"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('js') }}/waypoints.min.js"></script>
    <!-- Jquery Counterup JS -->
    <script src="{{ asset('js') }}/jquery-counterup.min.js"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('js') }}/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('js') }}/nicesellect.js"></script>
    <!-- Ytplayer JS -->
    <script src="{{ asset('js') }}/ytplayer.min.js"></script>
    <!-- Flex Slider JS -->
    <script src="{{ asset('js') }}/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('js') }}/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ asset('js') }}/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="{{ asset('js') }}/easing.js"></script>
    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
    <script src="{{ asset('js') }}/gmap.min.js"></script>
    <!-- <script src="{{ asset('js') }}/map-script.js"></script> -->
    <!-- Active JS -->
    <script src="{{ asset('js') }}/active.js"></script>


</body>



</html>