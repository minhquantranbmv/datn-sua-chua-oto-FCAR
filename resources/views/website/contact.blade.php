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

    <div class="wrapper">
        @include('layout_client.menu')

        <!-- End page content -->


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

        <!-- START FOOTER AREA -->
        @include('layout_client.footer')
        <!-- END FOOTER AREA -->

    </div>




</body>



</html>