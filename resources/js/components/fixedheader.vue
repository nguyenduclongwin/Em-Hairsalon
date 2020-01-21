<template>
  <fixed-header
    :threshold=150
    :hideScrollUp=true
  >
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
                                <img class="alarm_responsive" src="/images/alarm.svg" alt="alarm_responsive_image">
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
                    <a class="navbar-brand" href="#"><img class="Em_logo_responsive" src="/images/EM_hair_salon_logo.png" alt="Em Hair Salon logo"></a>
                    <button class="navbar-toggler nav_bar_responsive" type="button" data-toggle="collapse" data-target="#collapse">
                        <span class="fas fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse main-nav-header" id="collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item item_responsive">
                                <a class="nav-link nav_link_menu_header" href="#">Home </a>
                            </li>
                            <li class="nav-item item_responsive">
                                <a class="nav-link nav_link_menu_header" href="#">Services</a>
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
  </fixed-header>
</template>
 
<script>
import FixedHeader from "vue-fixed-header";

export default {
  components: {
    FixedHeader
  }
};
</script> 
 
<style>
.big_container.vue-fixed-header--isFixed {
  position: fixed;
  left: 0;
  top: 0px;
  /* width: 100%; */
  opacity: 0.9;
  filter:alpla(opacity=90);
}
</style> 