<template>
  <div>
    <fixed-header :threshold="150" :hideScrollUp="true">
      <!-- Start Menu Fixed -->
      <div class="big_container">
        <div class="super_container">
          <div class="container-fluid">
            <div class="container">
              <!-- Start title previous header -->
              <div class="previous-header">
                <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6 col">
                    <!-- col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6 -->
                    <img
                      class="alarm_responsive"
                      src="/images/alarm.svg"
                      alt="alarm_responsive_image"
                    />
                    <h3 class="title-pre-header work-time">
                      <span>{{contact.worktime}}</span>
                    </h3>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-sm-6 col-6 col">
                    <!-- col-xl-9 col-lg-9 col-md-5 col-sm-4 col-6  -->
                    <h3 class="title-pre-header phone-number-responsive">
                      <span class="fas fa-phone-alt phone-icon"></span>
                      (+84) {{contact.phone}}
                    </h3>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-6 col nav-cart">
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
            <nav class="navbar navbar-expand-sm" style="display: flex;">
              <a class="navbar-brand" :href="link.home">
                <img class="Em_logo_responsive" src="/images/EM_hair_salon_logo.png" alt="Em Hair Salon logo" />
              </a>
              <button
                class="navbar-toggler nav_bar_responsive"
                type="button"
                data-toggle="collapse"
                data-target="#collapse"
              >
                <span class="fas fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse main-nav-header" id="collapse">
                <ul class="navbar-nav" id="nav">
                  <li class="nav-item item_responsive">
                    <a class="nav-link nav_link_menu_header" :class="{ 'nav_active' : currentLocation.indexOf(link.home) > -1}" :href="link.home">Home</a>
                  </li>
                  <li class="nav-item item_responsive">
                    <a class="nav-link nav_link_menu_header" :class="{ 'nav_active' : currentLocation.indexOf(link.service) > -1}" :href="link.service">Services</a>
                  </li>
                  <li class="nav-item item_responsive">
                    <a class="nav-link nav_link_menu_header" :class="{ 'nav_active' : currentLocation.indexOf(link.about) > -1}" :href="link.about">About</a>
                  </li>
                  <li class="nav-item item_responsive">
                    <a class="nav-link nav_link_menu_header" :class="{ 'nav_active' : currentLocation.indexOf(link.news) > -1}" :href="link.news">News</a>
                  </li>
                  <li class="nav-item item_responsive">
                    <a class="nav-link nav_link_menu_header" :class="{ 'nav_active' : currentLocation.indexOf(link.contact) > -1}" :href="link.contact">Contact</a>
                  </li>
                  <li class="nav-item item_responsive">
                    <a class="nav-link nav_link_menu_header" :class="{ 'nav_active' : currentLocation.indexOf(link.emshop) > -1}" :href="link.emshop">Em Shop</a>
                  </li>
                  <!-- <li class="nav-item cart_responsive">
                                <a href="#" class="nav-link ">
                                    <span class="fas fa-shopping-cart cart_logo_responsive"></span>
                                </a>  
                  </li>-->
                </ul>
              </div>
            </nav>
          </header>
        </div>
        <!-- End header -->
      </div>
      <!-- End Menu Fixed -->
    </fixed-header>
    <!-- Start Icon phone ring -->

    <div class="hotline-phone-ring-wrap">
      <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
          <a :href="'tel:'+contact.phone" class="pps-btn-img">
            <img
              src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png"
              alt="Gọi điện thoại"
              width="50"
            />
          </a>
        </div>
      </div>
      <div class="hotline-bar">
        <a :href="'tel:+84'+contact.phone">
          <span class="text-hotline">(+84) {{contact.phone}}</span>
        </a>
      </div>
    </div>

    <!-- Start Icon phone ring -->
  </div>
</template>
 
<script>
import FixedHeader from "vue-fixed-header";

export default {
  components: {
    FixedHeader
  },
  data() {
    return {
      contact: "",
      link: "",
      currentLocation: location.href
    };
  },
  created() {
    this.showHeader();
  },
  methods: {
    showHeader() {
      axios.get("/api/index").then(response => {
        (this.contact = response.data.data.contact[0]),
          (this.link = response.data.data.link);
      });
    }
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
  filter: alpla(opacity=90);
}
</style> 