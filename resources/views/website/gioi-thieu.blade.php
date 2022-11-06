<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới thiệu</title>
    @include('layout_client.style')
</head>

<body>
    <div class="wrapper">
        <!-- START HEADER AREA -->
        @include('layout_client.menu')
        <!-- END MOBILE MENU AREA -->

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80 section">
            <h1 class="breadcrumbs-title">Giới thiệu về hệ thống Sửa chữa xe máy F-BIKE</h1>
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-inner">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper section">

            <!-- ABOUT SECTION START -->
            <div class="about-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-left ">
                                <h2 class="uppercase">Giới thiệu về hệ thống Sửa chữa xe máy</h2>
                                <h6 class="mb-40">Sửa chữa xe máy - "Dịch vụ uy tín hàng đầu Việt Nam"</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="about-photo p-20 bg-img-1">
                                <img src="{{ asset('client') }}/img/others/about.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="about-description mt-50">
                                <p>Sửa chữa xe máy xin gửi lời cảm ơn sâu sắc tới Quý khách hàng đã quan tâm và ủng hộ trong suốt 10 năm qua. Hàng triệu chiếc xe máy đã được đưa tới trung tâm để sửa chữa nhằm mang lại niềm vui, hiệu quả và lợi ích cho khách
                                    hàng. Với giá trị cốt lõi luôn lấy "TẬN TÂM - UY TÍN - CHUYÊN NGHIỆP" đặt lên hàng đầu, quan điểm hoạt động của trung tâm là làm việc nghiêm túc, trách nhiệm, đặt lợi ích khách hàng lên số 1 và hướng tới hợp tác, chia
                                    sẻ cùng các đối tác để đi tới thành công.</p>

                                <p>Bảo dưỡng xe máy Honda tại F-BIKE được thực hiện theo quy trình tiêu chuẩn chính hãng đảm bảo cho xe phục hồi về trạng thái tốt nhất, xe ổn định và vận hành tốt trong suốt thời gian sử dụng sau đó. Phụ tùng thay thế và các
                                    dịch vụ đi kèm sẽ được bảo hành tận nơi bởi đội kỹ thuật chuyên nghiệp. Sau bảo dưỡng tổng thể xe của bạn sẽ tiếp tục được hưởng chế độ bảo trì cơ bản miễn phí tại F-BIKE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SECTION END -->

            <!-- TEAM SECTION START -->
            <div class="team-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-left ">
                                <h2 class="uppercase">Thành Viên Của Công Ty</h2>
                            </div>
                            <div class="active-team-member section">
                                <!-- team-member start -->
                                <div class="team-member-item">
                                    <div class="team-member box-shadow bg-shape">
                                        <div class="team-member-photo">
                                            <img src="{{ asset('client') }}/img/team/nhung.png" alt="">
                                        </div>
                                        <div class="team-member-info pt-20">
                                            <h5 class="member-name">
                                                <a href="#">Đỗ Thị Hồng Vân</a>
                                                <a href="#">Nguyễn Tiến Quang</a>
                                            </h5>
                                            <p class="member-position"></p>
                                            <p class="mb-20">Thiết kế quản lý tài khoản, làm báo cáo, teseter
                                            </p>
                                            <ul class="footer-social">
                                                <li>
                                                    <a class="facebook" href="#" title="Facebook"><i
                                                            class="zmdi zmdi-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" title="Google Plus"><i
                                                            class="zmdi zmdi-google-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" title="Twitter"><i
                                                            class="zmdi zmdi-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" title="RSS"><i
                                                            class="zmdi zmdi-rss"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- team-member end -->
                                <!-- team-member start -->
                                <div class="team-member-item">
                                    <div class="team-member box-shadow bg-shape">
                                        <div class="team-member-photo">
                                            <img src="{{ asset('client') }}/img/team/mhung.png" alt="">
                                        </div>
                                        <div class="team-member-info pt-20">
                                            <h5 class="member-name"><a href="#">Hoàng Văn Nam</a></h5>
                                            <p class="member-position">Luồng Chính (Đặt lịch)</p>
                                            <p class="mb-20">Thiết kế quản lý lịch đặt người dùng và phân chia công việc nhân viên</p>
                                            <ul class="footer-social">
                                                <li>
                                                    <a class="facebook" href="#" title="Facebook"><i
                                                            class="zmdi zmdi-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" title="Google Plus"><i
                                                            class="zmdi zmdi-google-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" title="Twitter"><i
                                                            class="zmdi zmdi-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" title="RSS"><i
                                                            class="zmdi zmdi-rss"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- team-member end -->

                                <!-- team-member start -->
                                <div class="team-member-item">
                                    <div class="team-member box-shadow bg-shape">
                                        <div class="team-member-photo">
                                            <img src="{{ asset('client') }}/img/team/dung.png" alt="">
                                        </div>
                                        <div class="team-member-info pt-20">
                                            <h5 class="member-name"><a href="#"> Hà Mạnh Sơn</a></h5>
                                            <p class="member-position">Nhánh phụ (Cửa hàng)</p>
                                            <p class="mb-20">Thiết kế quản lý sản phẩm của cửa hàng</p>
                                            <ul class="footer-social">
                                                <li>
                                                    <a class="facebook" href="#" title="Facebook"><i
                                                            class="zmdi zmdi-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" title="Google Plus"><i
                                                            class="zmdi zmdi-google-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" title="Twitter"><i
                                                            class="zmdi zmdi-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" title="RSS"><i
                                                            class="zmdi zmdi-rss"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- team-member end -->

                                <!-- team-member start -->
                                <div class="team-member-item">
                                    <div class="team-member box-shadow bg-shape">
                                        <div class="team-member-photo">
                                            <img src="{{ asset('client') }}/img/team/thung.png" alt="">
                                        </div>
                                        <div class="team-member-info pt-20">
                                            <h5 class="member-name"><a href="#">Trần Minh Quân</a></h5>
                                            <p class="member-position">UI UX</p>
                                            <p class="mb-20">Thiết kế quản trị tin tức, ghép giao diện Client, làm slide thuyết trình</p>
                                            <ul class="footer-social">
                                                <li>
                                                    <a class="facebook" href="#" title="Facebook"><i
                                                            class="zmdi zmdi-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" title="Google Plus"><i
                                                            class="zmdi zmdi-google-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" title="Twitter"><i
                                                            class="zmdi zmdi-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" title="RSS"><i
                                                            class="zmdi zmdi-rss"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- team-member end -->
                                <!-- team-member start -->
                                <div class="team-member-item">
                                    <div class="team-member box-shadow bg-shape">
                                        <div class="team-member-photo">
                                            <img src="{{ asset('client') }}/img/team/hop.png" alt="">
                                        </div>
                                        <div class="team-member-info pt-20">
                                            <h5 class="member-name"><a href="#">Lê Quốc Việt</a></h5>
                                            <p class="member-position">Trưởng Nhóm</p>
                                            <p class="mb-20">Thiết kế quản lý thống kê sản phẩm, lịch đặt và doanh thu của cửa hàng</p>
                                            <ul class="footer-social">
                                                <li>
                                                    <a class="facebook" href="#" title="Facebook"><i
                                                            class="zmdi zmdi-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" title="Google Plus"><i
                                                            class="zmdi zmdi-google-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" title="Twitter"><i
                                                            class="zmdi zmdi-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" title="RSS"><i
                                                            class="zmdi zmdi-rss"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- team-member end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TEAM SECTION END -->
        </section>
        <!-- End page content -->

        <!-- START FOOTER AREA -->
        @include('layout_client.footer')
        <!-- END FOOTER AREA -->

    </div>
    @include('layout_client.script')
</body>


</html>