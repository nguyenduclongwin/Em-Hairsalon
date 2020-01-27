<template>
  <div class="Em_services">
    <!-- Start All Services -->
    <div class="services-page">
      <div class="container">
        <div class="all-services">
          <div class="row">
            <div class="col-xl-12">
              <h1 class="title-services-page wow bounceInRight" data-wow-duration="3s">Our services</h1>
              <p class="text-after-services-page wow bounceInLeft" data-wow-duration="3s">
                <i>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</i>
              </p>
              <p class="scissors" style="color: #bb8c4b;">
                ------
                <span class="fas fa-cut scissors-icon"></span> ------
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3">
              <div class="services-table">
                <img src="images/images_services/scissors-services.svg" alt="scissors-services.svg" />
                <h3 class="title-services-item">Hair cut</h3>
                <p
                  class="text-services-item"
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, assumenda rem nulla odio iure animi repellat voluptates ullam omnis enim?</p>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="services-table">
                <img src="images/images_services/shampoo-services.svg" alt="scissors-services.svg" />
                <h3 class="title-services-item">Shampoo</h3>
                <p
                  class="text-services-item"
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, assumenda rem nulla odio iure animi repellat voluptates ullam omnis enim?</p>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="services-table">
                <img src="images/images_services/massage-services.svg" alt="scissors-services.svg" />
                <h3 class="title-services-item">Massage</h3>
                <p
                  class="text-services-item"
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, assumenda rem nulla odio iure animi repellat voluptates ullam omnis enim?</p>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="services-table">
                <img src="images/images_services/scissors-services.svg" alt="scissors-services.svg" />
                <h3 class="title-services-item">Color</h3>
                <p
                  class="text-services-item"
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, assumenda rem nulla odio iure animi repellat voluptates ullam omnis enim?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End all Services -->

    <!-- Start service details -->

    <div class="service-details">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 content-service-details">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6">
                <h2 class="text-EM wow rollIn" data-wow-duration="1.5s">EM Hair Salon</h2>
              </div>
              <div class="col-xl-4">
                <div class="row">
                  <div class="col-xl-12 col-sm-6 col-6">
                    <img src="images/em-hair-cut2.jpg" alt="em-hair-cut2.jpg" width="95%" />
                  </div>
                  <div class="col-xl-12 col-sm-6 col-6" style="margin-top: 10px;">
                    <img src="images/em-hair-cut2.jpg" alt="em-hair-cut2.jpg" width="95%" />
                  </div>
                </div>
              </div>
              <div class="col-xl-8">
                <h3 class="title-content-service-details">Haircut and styling</h3>
                <table class="table table-bordered table-success">
                  <thead style="background: #171616; color: #fff;">
                    <tr>
                      <th>Service</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in haircut" :key="item.id">
                      <td>{{item.service}}</td>
                      <td>{{item.price}} $</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 video-service">
            <iframe
              width="100%"
              height="315"
              src="https://www.youtube.com/embed/yX0YWLWXeDo"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
            <p>"Trai nghiem tai EM Hair salon"</p>
          </div>
        </div>

        <div class="row hair-wash-services">
          <div class="col-xl-6 image-wash-services">
            <p>Trai nghiem goi dau tai Em Hair salon</p>
            <img src="images/images_services/khi_02.jpg" alt="hair-wash-services.png" width="100%" />
          </div>
          <div class="col-xl-6">
            <h3 class="title-content-service-details">hairwash</h3>
            <table class="table table-bordered table-success">
              <thead style="background: #171616; color: #fff;">
                <tr>
                  <th>Service</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="item in hairwash" :key="item.id">
                      <td>{{item.service}}</td>
                      <td>{{item.price}} $</td>
                    </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row massage-services">
          <div class="col-xl-6">
            <h3 class="title-content-service-details">massage</h3>
            <table class="table table-bordered table-success">
              <thead style="background: #171616; color: #fff;">
                <tr>
                  <th>Service</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Men's haircut</td>
                  <td>$100+</td>
                </tr>
                <tr>
                  <td>Men's haircut</td>
                  <td>$100+</td>
                </tr>
                <tr>
                  <td>Men's haircut</td>
                  <td>$100+</td>
                </tr>
                <tr>
                  <td>Men's haircut</td>
                  <td>$100+</td>
                </tr>
                <tr>
                  <td>Men's haircut</td>
                  <td>$100+</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-xl-6">
            <div class="images-massage">
              <div class="row">
                <div
                  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 wow bounceInDown"
                  data-wow-duration="2s"
                  data-wow-delay="0.1s"
                >
                  <img
                    src="images/images_services/massage-services1.jpg"
                    alt="massage-services1.jpg"
                    width="100%"
                  />
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 wow bounceInDown"
                  data-wow-duration="2s"
                  data-wow-delay="0.4s"
                >
                  <img
                    src="images/images_services/massage-services2.jpg"
                    alt="massage-services2.jpg"
                    width="100%"
                    style="margin-top: 50px;"
                  />
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 wow bounceInDown"
                  data-wow-duration="2s"
                  data-wow-delay="0.7s"
                >
                  <img
                    src="images/images_services/massage-services3.jpg"
                    alt="massage-services3.jpg"
                    width="100%"
                    style="margin-top: 100px;"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 70px;">
          <div class="col-xl-6">
            <div class="images-massage">
              <div class="row">
                <div
                  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 wow bounceInUp"
                  data-wow-duration="2s"
                  data-wow-delay="0.1s"
                >
                  <img
                    src="images/images_services/massage-services1.jpg"
                    alt="massage-services1.jpg"
                    width="100%"
                  />
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 wow bounceInUp"
                  data-wow-duration="2s"
                  data-wow-delay="0.4s"
                >
                  <img
                    src="images/images_services/massage-services2.jpg"
                    alt="massage-services2.jpg"
                    width="100%"
                    style="margin-top: 50px;"
                  />
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 wow bounceInUp"
                  data-wow-duration="2s"
                  data-wow-delay="0.7s"
                >
                  <img
                    src="images/images_services/massage-services3.jpg"
                    alt="massage-services3.jpg"
                    width="100%"
                    style="margin-top: 100px;"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <h3 class="title-content-service-details">color</h3>
            <table class="table table-bordered table-success">
              <thead style="background: #171616; color: #fff;">
                <tr>
                  <th>Color</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="item in hairdye" :key="item.id">
                      <td>{{item.service}}</td>
                      <td>{{item.price}} $</td>
                    </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- End service details -->
  </div>
</template>

<script>
export default {
  data(){
    return {
      haircut:"",
      hairwash:"",
      hairdye:""
    };
  },
  created(){
    this.showService();
  },
  methods:{
    showService(){
      axios.get('api/service').then(response=>{
        this.haircut=response.data.data.haircut,
        this.hairwash=response.data.data.hairwash,
        this.hairdye=response.data.data.hairdye
      });
    }
  }

};
</script>

<style lang="scss" scoped>
</style>