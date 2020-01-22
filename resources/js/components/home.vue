<template>
<div>
  <div>
      <!-- Start main carousel -->

      <div class="main_carousel" style="position: relative;">
        <!-- <div class="main-slideshow owl-carousel owl-theme"> -->
          <carousel :autoplay="true" :nav="false" :items=1 :loop="true">
          <div class="item" style="position: relative;">
            <img :src="slide[0].img" alt="images carousle" class="img"/>
            <div class="overlay"></div>
            <h2
              class="title-overlay wow bounceInRight"
              data-wow-duration="2s"
              data-wow-delay="0.3s"
            > {{slide[0].content}} </h2>
          </div>
          <div class="item" style="position: relative;">
            <img :src="slide[1].img" alt="images carousle" class="img"/>
            <div class="overlay"></div>
            <h2
              class="title-overlay wow bounceInRight"
              data-wow-duration="2s"
              data-wow-delay="0.3s"
            > {{slide[1].content}} </h2>
          </div>
          <div class="item" style="position: relative;">
            <img :src="slide[2].img" alt="images carousle" class="img"/>
            <div class="overlay"></div>
            <h2
              class="title-overlay wow bounceInRight"
              data-wow-duration="2s"
              data-wow-delay="0.3s"
            > {{slide[2].content}} </h2>
          </div>
      </carousel>

      <!-- Book now -->
      <button
          type="button"
          class="btn btn-info btn-lg book-online"
          data-toggle="modal"
          data-target="#book-in-carousel"
      >book now</button>

      <!-- Modal -->
      <div class="modal fade" id="book-in-carousel" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
              <div class="modal-header">
                <h1 class="title-modal-book">Book now</h1>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">book now</h4>
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
        <h3 class="title-combo-suggestions">
          <i class="fas fa-forward icon-sale"></i>
          <i>Discount combos</i>
        </h3>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="combo-sale wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
              <h4 class="title-combo">
                <!--<span class="fas fa-crown icon-king-combo"></span>-->
                <i>Joico treatment</i>
              </h4>
              <i class="text-after-title-combo-suggestions">Sale 25%</i>
              <ul class="combo-nav">
                <li class="combo-item">Đắp mặt nạ</li>
                <li class="combo-item">Tẩy da chết</li>
                <li class="combo-item">Đắp mặt nạ</li>
                <li class="combo-item">Đắp mặt nạ</li>
              </ul>
              <div class="price-sale-off">
                <del>
                  <i class="before-sale-off">100$</i>
                </del>
                <h5 class="sale-off">
                  <span>-> only</span> 75$
                </h5>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="combo-sale wow slideInLeft" data-wow-duration="1.1s" data-wow-delay="0.3s">
              <h4 class="title-combo">
                <!--<span class="fas fa-crown icon-king-combo"></span>-->
                <i>Olaplex treatment</i>
              </h4>
              <i class="text-after-title-combo-suggestions">Sale 25%</i>
              <ul class="combo-nav">
                <li class="combo-item">Treatment</li>
                <li class="combo-item">hair wash</li>
                <li class="combo-item">Head & Face massage</li>
                <li class="combo-item">Blow dry</li>
              </ul>
              <div class="price-sale-off">
                <del>
                  <i class="before-sale-off">100$</i>
                </del>
                <h5 class="sale-off">
                  <span>-> only</span> 75$
                </h5>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="combo-sale wow slideInRight" data-wow-duration="1.1s" data-wow-delay="0.3s">
              <h4 class="title-combo">
                <!--<span class="fas fa-crown icon-king-combo"></span>-->
                <i>Shampoo for kid</i>
              </h4>
              <i class="text-after-title-combo-suggestions">Sale 25%</i>
              <ul class="combo-nav">
                <li class="combo-item">Shampoo</li>
                <li class="combo-item">head massage</li>
                <li class="combo-item">face cleaning</li>
                <li class="combo-item">style blow dry</li>
              </ul>
              <div class="price-sale-off">
                <del>
                  <i class="before-sale-off">100$</i>
                </del>
                <h5 class="sale-off">
                  <span>-> only</span> 75$
                </h5>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="combo-sale wow slideInRight" data-wow-duration="1s" data-wow-delay="0.1s">
              <h4 class="title-combo">
                <!--<span class="fas fa-crown icon-king-combo"></span>-->
                <i>King combo</i>
              </h4>
              <i class="text-after-title-combo-suggestions">Sale 25%</i>
              <ul class="combo-nav">
                <li class="combo-item">Đắp mặt nạ</li>
                <li class="combo-item">Tẩy da chết</li>
                <li class="combo-item">Đắp mặt nạ</li>
                <li class="combo-item">Đắp mặt nạ</li>
              </ul>
              <div class="price-sale-off">
                <del>
                  <i class="before-sale-off">100$</i>
                </del>
                <h5 class="sale-off">
                  <span>-> only</span> 75$
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End Combo Seggestions-->

    <!-- Start service-->
    <div class="container">
      <div class="our-ability wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
        <div class="row">
          <div class="col-xl-12">
            <div class="content-our-ability">
              <h3 class="title-body-our-ability">What do we do</h3>
              <p
                class="text-after-title-body-our-ability"
              >The quality and service attitude that make up our brand !</p>
              <p class="scissors">
                ------
                <span class="fas fa-cut scissors-icon"></span> ------
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="some-service wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
              <img src="images/em-hair-cut1.jpg" width="100%" style="border-radius: 50%;" />
              <h4 class="title-some-service">hairstylist</h4>
              <p
                class="text-some-service"
              >Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="some-service wow bounceInUp">
              <img src="images/wash-your-face.jpg" width="100%" style="border-radius: 50%;" />
              <h4 class="title-some-service">wash your face</h4>
              <p
                class="text-some-service"
              >Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="some-service wow slideInRight" data-wow-duration="1s" data-wow-delay="0.1s">
              <img src="images/Em-massage.jpg" width="100%" style="border-radius: 50%;" />
              <h4 class="title-some-service">Massage</h4>
              <p
                class="text-some-service"
              >Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="see-all-services">
              <a href="#" class="link-see-all-services">See all services</a>
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
          <div class="row">
            <div class="overlay-open-time"></div>
            <div class="col-xl-12 opening-time-summary">
              <h3 class="title-open-time">Open time</h3>
            </div>
            <div class="col-xl-12 opening-time-summary">
              <h4 class="text-after-title-open-time">
                Opening time of Em Hair Salon - Please track the opening time of Minh Nghi Hair Salon
                <br />to facilitate tracking and booking.
              </h4>
              <p class="scissors">
                ------
                <span class="fas fa-cut scissors-icon"></span> ------
              </p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
              <div class="time-panel wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <h4 class="title-time-panel">Monday</h4>
                <ul class="list-time-panel">
                  <li class="item">8:00</li>
                  <li class="item">to</li>
                  <li class="item">22:00</li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
              <div class="time-panel wow bounceInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
                <h4 class="title-time-panel">Monday</h4>
                <ul class="list-time-panel">
                  <li class="item">8:00</li>
                  <li class="item">to</li>
                  <li class="item">22:00</li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
              <div class="time-panel wow bounceInUp" data-wow-duration="1.6s" data-wow-delay="0.1s">
                <h4 class="title-time-panel">Monday</h4>
                <ul class="list-time-panel">
                  <li class="item">8:00</li>
                  <li class="item">to</li>
                  <li class="item">22:00</li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
              <div class="time-panel wow bounceInUp" data-wow-duration="1.9s" data-wow-delay="0.1s">
                <h4 class="title-time-panel">Monday</h4>
                <ul class="list-time-panel">
                  <li class="item">8:00</li>
                  <li class="item">to</li>
                  <li class="item">22:00</li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
              <div class="time-panel wow bounceInUp" data-wow-duration="2.2s" data-wow-delay="0.1s">
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
          </div>
        </div>
      </div>
      <!-- End open time -->
    </div>

    <!-- Start update on new trends -->

    <div class="container">
      <div class="Update-on-new-trends">
        <div class="row">
          <div class="col-xl-12">
            <h3 class="title-update-on-trends">We are always updated with new hair trends</h3>
          </div>
          <div class="col-xl-12">
            <h4
              class="text-after-update-on-trends"
            >Want to make a difference to your hair? So we are the one you need</h4>
            <p class="scissors">
              ------
              <span class="fas fa-cut scissors-icon"></span> ------
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <carousel :autoplay="true" :nav="false" :items=6 :loop="true" :stagePadding=70>
              <div class="item">
                <img src="images/update-trend1.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend2.png" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend3.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend4.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend5.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend6.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend7.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend8.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend9.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend10.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend11.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend12.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend13.png" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend14.jpg" width="100%" alt="Update trend img" />
              </div>
              <div class="item">
                <img src="images/update-trend15.jpg" width="100%" alt="Update trend img" />
              </div>
            </carousel>
          </div>

          <div class="col-xl-12">
            <p
              class="text-update-trends"
            >In addition to service quality, we are also interested in new trends of hair , nails and massages to help you relax after a day of intense burning.</p>
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
              <h4
                class="text-after-title-our-team"
              >We have a professional staff to make a difference for you</h4>
              <p class="scissors">
                ------
                <span class="fas fa-cut scissors-icon"></span> ------
              </p>
            </div>
          </div>
          <div class="our-team-images">
            <div class="row">
              <div
                class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown"
                data-wow-duration="1s"
                data-wow-delay="0.1s"
              >
                <img src="images/master-hair-cut1.jpg" alt="our team" />
                <div class="content-after-team-images">
                  <p class="hair-consultant-for-men">Hair consultant for men</p>
                  <p class="name-of-consultant">Tom Hiddleston</p>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown"
                data-wow-duration="1.5s"
                data-wow-delay="0.1s"
              >
                <img src="images/makeup-specialist1.jpg" alt="our team" />
                <div class="content-after-team-images">
                  <p class="hair-consultant-for-men">Hair consultant for men</p>
                  <p class="name-of-consultant">Aliyah</p>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown"
                data-wow-duration="2s"
                data-wow-delay="0.1s"
              >
                <img src="images/master-hair-cut1.jpg" alt="our team" />
                <div class="content-after-team-images">
                  <p class="hair-consultant-for-men">Hair consultant for men</p>
                  <p class="name-of-consultant">Angel</p>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-3 col-md-3 master-our-team wow bounceInDown"
                data-wow-duration="2.5s"
                data-wow-delay="0.1s"
              >
                <img src="images/makeup-specialist1.jpg" alt="our team" />
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
    </div>

    <!-- End Our Team -->
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
    components: { carousel },
    data() {
      return {
          slide:""
      }
  },
  created(){
      this.showHome()
  },
  methods:{
      showHome(){
          axios.get('/api/index/home').then(response=>{
              this.slide=response.data.data.slide
              
          })
      }
  }
}
</script>
<style lang="scss" scoped>
</style>