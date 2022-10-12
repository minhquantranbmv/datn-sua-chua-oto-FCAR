<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liên hệ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> @include('layout_client.style')
</head>

<body>

    <div>

        <!-- HEADER -->

        @include('layout_client.header')

        <!-- END HEADER -->


        <section id="breadcrumb-wrapper">
            <div class="breadcrumb-content">
                <div class="wrapper">
                    <div class="inner">
                        <div class="breadcrum-big text-center uppercase font-bold text-8xl">

                            <span>Liên hệ</span>


                        </div>
                        <div class="breadcrumb-small mb-5 font-bold text-2xl">
                            <a href="/" title="Quay trở về trang chủ">Trang chủ</a>



                            <span aria-hidden="true">/</span>
                            <span>Liên hệ</span>


                        </div>
                    </div>

                </div>
                <div class="smart-search">
                    <form action="/search" id="search-fix" class="search-fr">
                        <div class="form-input">

                            <input name="q" id="search" placeholder="Tìm kiếm..." value="" type="text" required="required">
                            <button type="submit">
							<svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <i class="fa fa-search"></i> -->
						</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <div class=" text-center uppercase font-bold text-5xl  ">
            <h1>Liên hệ</h1>
        </div>

        <div class="grid grid-cols-7 gap-8 mt-8 m-16">
            <div class="col-span-2 mt-20">
                <div class="text-center ">
                    <div class="uppercase font-bold mb-2 text-4xl font-sans">
                        <h4>
                            Địa chỉ trụ sở:
                        </h4>
                    </div>
                    <div class="contact-info text-2xl text-slate-900  font-semibold">
                        Số 5 Ngõ 85 Láng Hạ, Q. Ba Đình, Tp. Hà Nội
                    </div>
                </div>
                <div class="text-center">
                    <div class="uppercase mt-12 mb-2 font-bold text-4xl font-sans">
                        <h4>
                            Số điện thoại:
                        </h4>
                    </div>
                    <div class="contact-info text-2xl text-slate-900 font-semibold">
                        <a href="tel:0979955664">0979955664</a>
                    </div>
                </div>
                <div class="text-center">
                    <div class="uppercase mt-12 mb-2 font-bold text-4xl font-sans">
                        <h4>
                            Email:
                        </h4>
                    </div>
                    <div class="contact-info font-semibold text-2xl text-slate-900">
                        <a href="mailto:bk.nguyenlinh@gmail.com">fcar@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class=" col-span-3 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7075388392564!2d105.81261271440759!3d21.04438499262175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1066ddb189%3A0xd32ca6689b380499!2zVHJ1bmcgdMOibSBjaMSDbSBzw7NjIHhlIGjGoWkgVE1DQVJl!5e0!3m2!1svi!2s!4v1539151270228"
                    width="600" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>

            <div class=" col-span-2 mr-32">
                <div class="uppercase font-bold text-3xl font-sans">
                    <h4>
                        Form liên hệ:
                    </h4>
                </div>
                <div class="contact_info_form form-vertical clearfix">
                    <form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
                        <input name="form_type" type="hidden" value="contact">
                        <input name="utf8" type="hidden" value="✓">








                        <!-- <label for="ContactFormName" class="hidden-label">Họ tên của bạn</label> -->
                        <input type="text" id="ContactFormName" class="input-full" name="contact[name]" placeholder="Họ tên của bạn" autocapitalize="words" value="">

                        <!-- <label for="ContactFormEmail" class="hidden-label">Địa chỉ email của bạn</label> -->
                        <input type="email" id="ContactFormEmail" class="input-full" name="contact[email]" placeholder="Địa chỉ email của bạn" autocorrect="off" autocapitalize="off" value="">


                        <!-- <label for="ContactFormPhone" class="hidden-label">Số điện thoại của bạn</label> -->
                        <input type="tel" id="ContactFormPhone" class="input-full" name="contact[phone]" placeholder="Số điện thoại của bạn" pattern="[0-9\-]*" value="">

                        <!-- <label for="ContactFormMessage" class="hidden-label">Nội dung</label> -->
                        <textarea rows="10" id="ContactFormMessage" class="input-full" name="contact[body]" placeholder="Nội dung"></textarea>

                        <input type="submit" class="btn right btnContactSubmit" value="Gửi">


                        <input id="e09529522dd543859fcbd9ddcbddc489" name="g-recaptcha-response" type="hidden" value="03AIIukzjj77KsM6PzLfbyTNStslVsNwqTGQ6ocimXWWgGa48v3BY2gfXFYvuMBp7b3zx0c7Ji8sXX71YM0auQjMWvMHG71nvwdwByazLxpdKqf9-2s3j3n2tdtWXbTwoRzDcmXTXJ6u1i0lDJjRneDSXB_A32sXbVfFDhahKCHp41ntRolZHD3nJqRyaUjeCsuqHCurwd-yE1ZvaZ3F3aEXLXT7wPrb5N2AwnxH86jjNICBo7uc2gOQteWIhz6PRFVCqxdU0q8vN9vcKaMr9IWC-q7-82SrgZX9CCCntxE6aQRpRkTIfwhE5SU7d2LW1Jds78K7FRWgfoENbojOssgVj4XddheeET91BEQGLTU2cgTQIquDWWFAQxgpjQcY6xF4HUF0nPYjIPwgjS4wAavg1knFuLsZ-3oAnCwb1vwVXbG3gD5ItvK0yX8SR6-TmTHmuBDEsYHc3xMWUyXRK4CsAl2jN1u_Qjrh9URhiQsxUw_WwMGfpdcMFayLhK9ENzKO-PhHnIAdP8">
                        <script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script>
                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                    action: 'submit'
                                }).then(function(token) {
                                    document.getElementById('e09529522dd543859fcbd9ddcbddc489').value = token;
                                });
                            });
                        </script>
                    </form>
                </div>
            </div>

        </div>
        <div></div>
    </div>

    <!-- FOOTER -->

    @include('layout_client.footer')

    <!-- END FOOTER -->


    <!-- <div class="wrapper"> -->

    <!-- START HEADER AREA -->
    <!-- @include('layout_client.menu') -->
    <!-- END MOBILE MENU AREA -->

    <!-- BREADCRUMBS SETCTION START -->
    <!-- <div class="breadcrumbs-section plr-200 mb-80 section">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Liên Hệ</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Trang Chủ</a></li>
                                    <li>Liên Hệ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- BREADCRUMBS SETCTION END -->

    <!-- Start page content -->
    <!-- <section id="page-content" class="page-wrapper section"> -->

    <!-- ADDRESS SECTION START -->
    <!-- <div class="address-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-pin"></i>
                                <h6>Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Việt Nam</h6>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-phone"></i>
                                <h6><a href="tel:0967758023">0967758023</a></h6>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-email"></i>
                                <h6>hungltph08107@fpt.edu.vn</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- ADDRESS SECTION END -->

    <!-- GOOGLE MAP SECTION START -->
    <!-- <div class="google-map-section">
                <div class="container-fluid">
                    <div class="google-map plr-185">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814177!2d105.74459841467802!3d21.038132792834787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1651974559282!5m2!1svi!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div> -->
    <!-- </div> -->
    <!-- GOOGLE MAP SECTION END -->

    <!-- MESSAGE BOX SECTION START -->
    <!-- <div class="message-box-section mt--50 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="message-box box-shadow white-bg">
                        <form id="contact-form" action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="blog-section-title border-left mb-30">Liên Hệ</h4>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_name" placeholder="Họ và tên">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_email" placeholder="Email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_subject" placeholder="Địa chỉ">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="con_phone" placeholder="Số điện thoại">
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="custom-textarea" name="con_message" placeholder="Nội dung"></textarea>
                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">Gửi Liên
                                        Hệ</button>
                                </div>
                            </div>
                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- MESSAGE BOX SECTION END -->
    <!-- </section> -->
    <!-- End page content -->

    <!-- START FOOTER AREA -->
    <!-- @include('layout_client.footer') -->
    <!-- END FOOTER AREA -->

    <!-- </div> -->


</body>

@include('layout_client.script')

</html>