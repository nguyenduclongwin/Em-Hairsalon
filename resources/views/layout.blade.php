<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel='stylesheet' href="{{asset('style2.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.css" />
    <link rel="icon" type="image/png" href="{{asset('images/EM_hair_salon_logo_title.png')}}">
    @yield('link')
</head>

<body>
    <div id="app">
        <menu-fix></menu-fix>
    </div>


    @yield('content')


    <!-- Start API map -->
    <div class="container-fluid">
        <div class="API_map">
            <div class="row Em-hair-map">
                <div class="col-xl-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.591203610626!2d105.83886671532784!3d21.049036892460723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abba04f05471%3A0xaacb7d8c86e3ef47!2sEm%20Hair%20Salon%201!5e0!3m2!1sen!2s!4v1578105180112!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- End API map -->


    <!--Start Footer -->

    <footer>
        <div class="container">
            <div class="footer-and-contact">
                <div class="row contact-in-footer">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <h4>introduce</h4>
                        <div class="introduce-item">
                            <i class="fas fa-phone-alt"></i>
                            <p style="display: inline-block; font-weight: 300;">Gọi 024 6687 5115</p>
                        </div>
                        <div class="introduce-item">
                            <i class="fab fa-facebook-messenger"></i>
                            <a href="https://www.messenger.com/t/Emhairsalon1" target="_blank"> m.me/Emhairsalon1</a>
                        </div>
                        <div class="introduce-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:emhairsalon@reach.org.vn" target="_blank"> emhairsalon@reach.org.vn</a>
                        </div>
                        <div class="introduce-item">
                            <i class="fas fa-globe"></i>
                            <a href="http://www.reach.org.vn" target="_blank"> http://www.reach.org.vn</a>
                        </div>
                        <div class="introduce-item">
                            <h4>Contact us</h4>
                            <i>" Đăng nhập email hoặc facebook để nhận các thông tin mới nhất của Em Hair Salon ! "</i>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" name="" id="email" placeholder="Nhập email">
                                <!-- <button type="submit">Submit</button> -->
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="password" name="" id="email" placeholder="Mật khẩu">
                                <button type="submit" class=" btn-success" style="padding:1px 5px;">Xong</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 services-footer">
                        <h4>service</h4>
                        <ul>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Women Hair cut/ Hair Curl/ Color</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Man Hair cut/ Hair Curl/ Color</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Kid hair cut/shampoo</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Hair Bleaching</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Hair Straightening</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Style Hair</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Skin Peeling</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <h4>address</h4>
                        <div>
                            <span class="fas fa-map-marker-alt"></span>
                            <p>No. 53, Pho Duc Chinh, Ba Dinh, Hanoi.</p>

                        </div>
                        <div>
                            <span class="fas fa-map-marker-alt"></span>
                            <p>No. 7, Do Quang, Trung Hoa, Thanh Xuan, Hanoi.</p>
                            <h4>fanpage</h4>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEmhairsalon1%2F&tabs=EM%20HAIR%20SALON%201%20-%20Trang%20ch%E1%BB%A7&width=400&height=160&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="160" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 copyright_footer">
                        <!-- <p>Copyright ©2018 All rights reserved | This template is made with <span class="far fa-heart"></span> by
                            REACH Code
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- End footer -->


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/7b6477155e.js" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/wow.min.js"></script>
    
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    @yield('scripts')

</body>

</html>