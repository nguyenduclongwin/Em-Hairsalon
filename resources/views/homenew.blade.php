<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EM Hair Salon</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7b6477155e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel='stylesheet' href="style2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="icon" type="image/png" href="images/EM_hair_salon_logo_title.png">
</head>
<body>
    <!-- Start Menu Fixed -->
    <div class="big_container">
        <div class="super_container">
            <div class="container-fluid" style="background: #1b1717;">
                <div class="container">
                
                    <!-- Start title previous header -->
                    <div class="previous-header">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6 col">
                                <!-- col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6 -->
                                <img class="alarm_responsive" src="images/alarm.svg" alt="alarm_responsive_image">
                                <h3 class="title-pre-header work-time"></span>Mon-Sun : 8h-22h </h3>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-sm-6 col-6 col ">
                                <!-- col-xl-9 col-lg-9 col-md-5 col-sm-4 col-6  -->
                                <h3 class="title-pre-header phone-number-responsive"><span class="fas fa-phone-alt phone-icon"></span> (+84)626262626</h3>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-6  col nav-cart ">
                                <!-- col-xl-1 col-lg-1 col-sm-2 col-12 -->
                                <a href="#" class="review-booked-calendars">
                                    <i class="far fa-calendar-check" style="margin-right: 5px;"></i>Booked 
                                </a>
                                <a href="#">Your order</a>
                                <a href="#">Book now</a>
                                <a href="#" class="link_cart">
                                    <span class="fas fa-shopping-cart cart_logo"></span>Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End title previous header -->
        
                </div>
            </div>
        </div>
    
        <!-- Start header  -->

        <div class="container">
            <header>
                <nav class="navbar navbar-expand-sm " style="display: flex;">
                    <a class="navbar-brand" href="#"><img class="Em_logo_responsive" src="images/EM_hair_salon_logo.png" alt="Em Hair Salon logo"></a>
                    <button class="navbar-toggler nav_bar_responsive" type="button" data-toggle="collapse" data-target="#collapse">
                        <span class="fas fa-bars"></span>
                    </button> 
                    <div class="collapse navbar-collapse main-nav-header" id="collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item item_responsive">
                                <a  class="nav-link nav_link_menu_header" href="#">Home </a>
                            </li>
                            <li class="nav-item item_responsive">
                                <a class="nav-link nav_link_menu_header" href="http://localhost:52330/service.html">Services</a>
                            </li>
                            <li class="nav-item item_responsive">
                                <a class="nav-link nav_link_menu_header" href="#">About</a>
                            </li>
                            <li class="nav-item item_responsive">
                                <a class="nav-link nav_link_menu_header" href="#">News</a>
                            </li>
                            <li class="nav-item item_responsive">
                                <a class="nav-link nav_link_menu_header" href="#">Gallery</a>
                            </li>
                            <li class="nav-item item_responsive">
                                <a class="nav-link nav_link_menu_header" href="#">EM shop</a>
                            </li>
                            <!-- <li class="nav-item cart_responsive">
                                <a href="#" class="nav-link ">
                                    <span class="fas fa-shopping-cart cart_logo_responsive"></span>
                                </a>  
                            </li> -->
                        </ul>
                    </div>
                </nav>
                
            </header>  
        </div>
        <!-- End header -->
    </div>
    <!-- End Menu Fixed -->


    <div class="container-fluid">
        <!-- Start main carousel -->

        <div class="main_carousel" style="position: relative;">
            <div class="main-slideshow owl-carousel owl-theme">
                <div class="item"  style="position: relative;">
                    <img src="images/image_slide03_02.jpg" alt="images carousle">
                    <div class="overlay"></div>
                    <h2 class="title-overlay wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.3s">Welcome to EM hair salon</h2>
                    
                </div>
                <div class="item" style="position: relative;">
                    <img src="images/image_slide03_02.jpg" alt="images carousle">
                    <div class="overlay"></div>
                    <h2 class="title-overlay wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.3s">Welcome to EM hair salon</h2>
                    
                </div>
                <div class="item" style="position: relative;">
                    <img src="images/image_slide03_02.jpg" alt="images carousle">
                    <div class="overlay"></div>
                    <h2 class="title-overlay wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.3s">Welcome to EM hair salon</h2>
                    
                </div>
            </div>

           
            <!-- Book now -->
            <button type="button" class="btn btn-info btn-lg book-online" data-toggle="modal" data-target="#book-in-carousel">book now</button>
            
            <!-- Modal -->
            <div class="modal fade" id="book-in-carousel" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="title-modal-book">Book now</h1>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!-- <h4 class="modal-title">book now</h4> -->
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>

    <!-- Start Combo Seggestions-->

    <div class="container">
        <div class="combo-suggestions">
            <h3 class="title-combo-suggestions"><i class="fas fa-forward icon-sale"></i><i>Discount combos</i></h3>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="combo-sale wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 class="title-combo"><!--<span class="fas fa-crown icon-king-combo"></span>--><i>Joico treatment</i></h4>
                        <i class="text-after-title-combo-suggestions">Sale 25%</i>
                        <ul class="combo-nav">
                            <li class="combo-item">Đắp mặt nạ</li>
                            <li class="combo-item">Tẩy da chết</li>
                            <li class="combo-item">Đắp mặt nạ</li>
                            <li class="combo-item">Đắp mặt nạ</li>
                        </ul>
                        <div class="price-sale-off">
                            <del><i class="before-sale-off">100$</i></del>
                            <h5 class="sale-off"><span>-> only</span> 75$</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="combo-sale wow slideInLeft" data-wow-duration="1.1s" data-wow-delay="0.7s">
                        <h4 class="title-combo"><!--<span class="fas fa-crown icon-king-combo"></span>--><i>Olaplex treatment </i></h4>
                        <i class="text-after-title-combo-suggestions">Sale 25%</i>
                        <ul class="combo-nav">
                            <li class="combo-item">Treatment</li>
                            <li class="combo-item">hair wash</li>
                            <li class="combo-item">Head & Face massage</li>
                            <li class="combo-item">Blow dry</li>
                        </ul>
                        <div class="price-sale-off">
                            <del><i class="before-sale-off">100$</i></del>
                            <h5 class="sale-off"><span>-> only</span> 75$</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="combo-sale wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0.7s">
                        <h4 class="title-combo"><!--<span class="fas fa-crown icon-king-combo"></span>--><i>Shampoo for kid</i></h4>
                        <i class="text-after-title-combo-suggestions">Sale 25%</i>
                        <ul class="combo-nav">
                            <li class="combo-item">Shampoo</li>
                            <li class="combo-item">head massage</li>
                            <li class="combo-item">face cleaning</li>
                            <li class="combo-item">style blow dry</li>
                        </ul>
                        <div class="price-sale-off">
                            <del><i class="before-sale-off">100$</i></del>
                            <h5 class="sale-off"><span>-> only</span> 75$</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="combo-sale wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 class="title-combo"><!--<span class="fas fa-crown icon-king-combo"></span>--><i>King combo</i></h4>
                        <i class="text-after-title-combo-suggestions">Sale 25%</i>
                        <ul class="combo-nav">
                            <li class="combo-item">Đắp mặt nạ</li>
                            <li class="combo-item">Tẩy da chết</li>
                            <li class="combo-item">Đắp mặt nạ</li>
                            <li class="combo-item">Đắp mặt nạ</li>
                        </ul>
                        <div class="price-sale-off">
                            <del><i class="before-sale-off">100$</i></del>
                            <h5 class="sale-off"><span>-> only</span> 75$</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <!-- End Combo Seggestions-->

    <!-- Start service-->
    <div class="container">
        <div class="our-ability" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s">
            <div class="row">
                <div class="col-xl-12">
                    <div class="content-our-ability">
                        <h3 class="title-body-our-ability"> What do we do </h3>
                        <p class="text-after-title-body-our-ability">The quality and service attitude that make up our brand !</p>
                        <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <div class="some-service wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <img src="images/em-hair-cut1.jpg" width="100%" style="border-radius: 50%;">
                        <h4 class="title-some-service"> hairstylist</h4>
                        <p class="text-some-service">Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <div class="some-service wow bounceInUp">
                        <img src="images/wash-your-face.jpg" width="100%" style="border-radius: 50%;">
                        <h4 class="title-some-service">wash your face</h4>
                        <p class="text-some-service">Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <div class="some-service wow  slideInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <img src="images/Em-massage.jpg" width="100%" style="border-radius: 50%;">
                        <h4 class="title-some-service">Massage</h4>
                        <p class="text-some-service">Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xl-12" >
                    <div class="see-all-services">
                        <a href="#" class="link-see-all-services" >See all services</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!-- End service-->
    
    <div class="container-fluid">

        <!-- Start open time -->
        <div class="open-time" style="position: relative;">
                   
            <div class="container">
                <div class="row" >
                    <div class="overlay-open-time"></div>
                    <div class="col-xl-12 opening-time-summary" >
                        <h3 class="title-open-time">Open time</h3>
                    </div>
                    <div class="col-xl-12 opening-time-summary">
                        <h4 class="text-after-title-open-time">Opening time of Em Hair Salon - Please track the opening time of Minh Nghi Hair Salon<br> to facilitate tracking and booking.</h4>
                        <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
                        <div class="time-panel wow bounceInUp" data-wow-duration="2.5s" data-wow-delay="0.1s">
                            <h4 class="title-time-panel">Monday</h4>
                            <ul class="list-time-panel">
                                <li class="item">8:00</li>
                                <li class="item">to</li>
                                <li class="item">22:00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
                        <div class="time-panel wow bounceInUp" data-wow-duration="2.5s" data-wow-delay="0.1s">
                            <h4 class="title-time-panel">Monday</h4>
                            <ul class="list-time-panel">
                                <li class="item">8:00</li>
                                <li class="item">to</li>
                                <li class="item">22:00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                        <div class="time-panel wow bounceInUp" data-wow-duration="2.5s" data-wow-delay="0.1s">
                            <h4 class="title-time-panel">Monday</h4>
                            <ul class="list-time-panel">
                                <li class="item">8:00</li>
                                <li class="item">to</li>
                                <li class="item">22:00</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                        <div class="time-panel wow bounceInUp" data-wow-duration="2.5s" data-wow-delay="0.1s">
                            <h4 class="title-time-panel">Monday</h4>
                            <ul class="list-time-panel">
                                <li class="item">8:00</li>
                                <li class="item">to</li>
                                <li class="item">22:00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                        <div class="time-panel wow bounceInUp" data-wow-duration="2.5s" data-wow-delay="0.1s">
                            <h4 class="title-time-panel">Monday</h4>
                            <ul class="list-time-panel">
                                <li class="item">8:00</li>
                                <li class="item">to</li>
                                <li class="item">22:00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                        <div class="time-panel wow bounceInUp" data-wow-duration="2.5s" data-wow-delay="0.1s">
                            <h4 class="title-time-panel">Monday</h4>
                            <ul class="list-time-panel">
                                <li class="item">8:00</li>
                                <li class="item">to</li>
                                <li class="item">22:00</li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <!-- End open time -->
    </div>

    <!-- Start update on new trends -->

    <div class="container">
        <div class="Update-on-new-trends">
            <div class="row">
                <div class="col-xl-12 ">
                    <h3 class="title-update-on-trends">We are always updated with new hair trends</h3>
                </div>
                <div class="col-xl-12">
                    <h4 class="text-after-update-on-trends">
                        Want to make a difference to your hair? So we are the one you need
                    </h4>
                    <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-12" >
                    <div class="slideshow2 owl-carousel owl-theme">
                        <div class="item ">
                            <img src="images/update-trend1.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend2.png" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend3.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend4.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend5.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend6.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend7.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend8.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend9.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend10.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend11.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend12.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend13.png" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend14.jpg" width="100%" alt="Update trend img">
                        </div>
                        <div class="item ">
                            <img src="images/update-trend15.jpg" width="100%" alt="Update trend img">
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <p class="text-update-trends">In addition to service quality, we are also interested in new trends of hair , nails and massages to help you relax after a day of intense burning.</p>
                </div>
            </div>

        </div>
    </div> 
    <!-- End update on new trends -->

    <!-- Start Our Team -->
    <div class="our-team-cover">
        <div class="container">
            <div class="our-team">
                <div class="row">
                    <div class="col-xl-12">
                        <h3 class="title-our-team">Our professional team</h3>
                    </div>
                    <div class="col-xl-12">
                        <h4 class="text-after-title-our-team">We have a professional staff to make a difference for you</h4>
                        <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
                    </div>
                </div>
                <div class="our-team-images">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown" data-wow-duration="2s" data-wow-delay="0.1s">
                            <img src="images/master-hair-cut1.jpg" alt="our team">
                            <div class="content-after-team-images">
                                <p class="hair-consultant-for-men">Hair consultant for men</p>
                                <p class="name-of-consultant">Tom Hiddleston</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown" data-wow-duration="2.5s" data-wow-delay="0.1s">
                            <img src="images/makeup-specialist1.jpg" alt="our team">
                            <div class="content-after-team-images">
                                <p class="hair-consultant-for-men">Hair consultant for men</p>
                                <p class="name-of-consultant">Aliyah</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.2s">
                            <img src="images/master-hair-cut1.jpg" alt="our team">
                            <div class="content-after-team-images">
                                <p class="hair-consultant-for-men">Hair consultant for men</p>
                                <p class="name-of-consultant">Angel</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown" data-wow-duration="3.5s" data-wow-delay="0.3s">
                            <img src="images/makeup-specialist1.jpg" alt="our team">
                            <div class="content-after-team-images">
                                <p class="hair-consultant-for-men">Hair consultant for men</p>
                                <p class="name-of-consultant">Sarah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Team -->


    <!-- Start API map -->
    <div class="container-fluid">
        <div class="API_map">       
            <div class="row Em-hair-map">
                <div class="col-xl-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.591203610626!2d105.83886671532784!3d21.049036892460723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abba04f05471%3A0xaacb7d8c86e3ef47!2sEm%20Hair%20Salon%201!5e0!3m2!1sen!2s!4v1578105180112!5m2!1sen!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
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
                            <i  class="fab fa-facebook-messenger"></i>
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
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEmhairsalon1%2F&tabs=EM%20HAIR%20SALON%201%20-%20Trang%20ch%E1%BB%A7&width=400&height=160&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="100%" height="160" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                                allowTransparency="true" allow="encrypted-media">
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
    


    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="jsmyVue.js"></script>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- Carousel after header -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/carousel.js"></script>
</body>
</html>