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
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6">
            <h2 class="text-EM wow rollIn" data-wow-duration="1.5s">EM Hair Salon</h2>
          </div>
          <div class="col-xl-12 video-service">
            <iframe
              width="70%"
              height="438"
              src="https://www.youtube.com/embed/yX0YWLWXeDo"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
            <p>"Trai nghiem tai EM Hair salon"</p>
          </div>
        </div>

        <div v-for="item in services" :key="item.id" class="row massage-services">
          <div class="col-xl-6">
            <h3 class="title-content-service-details">{{item.name_cat}}</h3>
            <table class="table table-bordered table-success">
              <thead style="background: #171616; color: #fff;">
                <tr>
                  <th>Service</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="service in item.service" :key="service.id">
                  <td>{{service.service}}</td>
                  <td>{{service.price}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-xl-6 align-self-center">
            <div class="images-massage">
              <div class="row">
                <div
                  v-for="img in item.img"
                  :key="img.id"
                  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 wow bounceInDown"
                  data-wow-duration="2s"
                  data-wow-delay="0.1s"
                >
                  <img :src="img.img" alt="massage-services1.jpg" width="100%" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End service details -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      services: ""
    };
  },
  created() {
    this.showService();
  },
  methods: {
    showService() {
      axios.get("api/service").then(response => {
        this.services = response.data.data.service;
      });
    }
  }
};
</script>

<style lang="scss" scoped>
</style>