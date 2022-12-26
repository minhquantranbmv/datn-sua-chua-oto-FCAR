<footer id="footer" class="footer-area section bg-dark">
    <div class="footer-top mt-4 ">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="footer-top-inner bg-secondary text-white">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-5">
                            <div class="single-footer footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('client') }}/img/logo/logo.jpg" alt="" width="80%">
                                </div>
                                <div class="footer-brief">
                                    <p class="text-white">Cửa hàng dịch vụ sửa chữa F-BIKE xin gửi lời cảm ơn sâu sắc tới Quý khách hàng đã quan tâm và ủng hộ trong suốt thời gian vừa qua . Hàng triệu chiếc xe đã được đưa tới trung tâm để sửa chữa nhằm mang lại niềm vui, hiệu quả và lợi ích cho khách
                                        hàng.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 d-block d-xl-block d-lg-none d-md-none">
                            <div class="single-footer">
                                <h4 class="footer-title border-left text-white">Về Chúng Tôi</h4>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="{{ asset('') }}gioi-thieu" class="text-white "><i class="zmdi zmdi-plus"></i><span class="b">Về FBike </span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}cua-hang" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">Mua
                                                Sắm</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}dat-lich" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">Đặt
                                                Lịch</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}tin-tuc" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">Tin
                                                Tức</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}lien-he" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">Liên
                                                Hệ</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}chinh-sach" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">Điều khoản và dịch vụ</span></a>
                                    </li>
                                    <!-- <li>
                                        <a href="#" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">Chính sách bảo mật </span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">Chính sách đổi trả</span></a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="single-footer">
                                <h4 class="footer-title border-left text-white">Tài Khoản</h4>
                                <ul class="footer-menu">
                                    @if(Auth::check())
                                    <li>
                                        <a href="{{ asset('') }}profile" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">
                                                Quản Lý Tài Khoản
                                            </span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}gio-hang" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">
                                                Giỏ hàng
                                            </span></a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{ asset('') }}login" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">
                                                Đăng Nhập
                                            </span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}register" class="text-white"><i class="zmdi zmdi-plus"></i><span class="b">
                                                Đăng Ký
                                            </span></a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-footer">
                                <h4 class="footer-title border-left text-white">Giờ Phục Vụ</h4>
                                <p class="text-white">Chúng tôi phục vụ quý khách hàng tất cả các ngày trong tuần từ: 8h - 20h mỗi ngày</p>
                                <!-- <div class="footer-message">
                                    <form action="#" class="text-black">
                                        <input type="text" name="name" placeholder="Tên của bạn..." class="text-black">
                                        <input type="text" name="email" placeholder="Email của bạn..." class="text-black">
                                        <textarea class="height-80 text-black" name="message" placeholder="Nội dung..."></textarea>
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">Gửi Liên
                                            Hệ</button>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p class="copy-text"> © 2022 <strong>F-BIKE</strong><i class="zmdi zmdi-favorite" style="color: red;" aria-hidden="true"></i> Dịch vụ uy tín hàng đầu Việt Nam
                                    <a class="company-name" href="https://themeforest.net/user/codecarnival/portfolio">
                                        <strong></strong></a>.</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-payment text-right">
                                <!-- <li>
                                    <a href="#"><img src="{{ asset('client') }}/img/payment/1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('client') }}/img/payment/2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('client') }}/img/payment/3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('client') }}/img/payment/4.jpg" alt=""></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>