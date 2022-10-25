<footer id="footer" class="footer-area section bg-dark">
    <div class="footer-top mt-4 ">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="footer-top-inner bg-secondary text-white">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-5">
                            <div class="single-footer footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('client') }}/img/logo/logo_fcar.jpg" alt="" width="80%">
                                </div>
                                <div class="footer-brief">
                                    <p class="text-white">FCAR xin gửi lời cảm ơn sâu sắc tới Quý khách hàng đã quan tâm và ủng hộ
                                        trong suốt 10 năm qua. Hàng triệu chiếc laptop đã được đưa tới trung tâm để sửa
                                        chữa nhằm mang lại niềm vui, hiệu quả và lợi ích cho khách hàng.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 d-block d-xl-block d-lg-none d-md-none">
                            <div class="single-footer">
                                <h4 class="footer-title border-left text-black">Về Chúng Tôi</h4>
                                <ul class="footer-menu">
                                    <li >
                                        <a href="{{ asset('') }}gioi-thieu" class="text-white hover:text-black"><i class="zmdi zmdi-plus"></i><span>Về FCAR </span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}cua-hang" class="text-white"><i class="zmdi zmdi-plus"></i><span>Mua
                                                Sắm</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}dat-lich" class="text-white"><i class="zmdi zmdi-plus"></i><span>Đặt
                                                Lịch</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}tin-tuc" class="text-white"><i class="zmdi zmdi-plus"></i><span>Tin
                                                Tức</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}lien-he" class="text-white"><i class="zmdi zmdi-plus"></i><span>Liên
                                                Hệ</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white"><i class="zmdi zmdi-plus"></i><span>Điều khoản và dịch vụ</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white"><i class="zmdi zmdi-plus"></i><span>Chính sách bảo mật </span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white"><i class="zmdi zmdi-plus"></i><span>Chính sách đổi trả</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">Tài Khoản</h4>
                                <ul class="footer-menu">
                                    @if(Auth::check())
                                    <li>
                                        <a href="{{ asset('') }}profile" class="text-white"><i class="zmdi zmdi-plus"></i><span>
                                                Quản Lý Tài Khoản
                                            </span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}gio-hang" class="text-white"><i class="zmdi zmdi-plus"></i><span>
                                                Giỏ hàng
                                            </span></a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{ asset('') }}login" class="text-white"><i class="zmdi zmdi-plus"></i><span>
                                                Đăng Nhập
                                            </span></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('') }}register" class="text-white"><i class="zmdi zmdi-plus"></i><span>
                                                Đăng Ký
                                            </span></a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-footer">
                                <h4 class="footer-title border-left" class="text-white">Liên Hệ</h4>
                                <div class="footer-message">
                                    <form action="#" class="text-black">
                                        <input type="text" name="name" placeholder="Tên của bạn..." class="text-black">
                                        <input type="text" name="email" placeholder="Email của bạn..." class="text-black">
                                        <textarea class="height-80 text-black" name="message" placeholder="Nội dung..." ></textarea>
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">Gửi Liên
                                            Hệ</button>
                                    </form>
                                </div>
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
                                <p class="copy-text"> © 2022 <strong>FCAR</strong><i class="zmdi zmdi-favorite" style="color: red;" aria-hidden="true"></i> Dịch vụ
                                    uy tín hàng đầu Việt Nam<a class="company-name" href="https://themeforest.net/user/codecarnival/portfolio">
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
